<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VisiteurController extends Controller
{
    /**
     * @Route("/Visiteur", name="Visiteur_list")
     */
    public function indexAction()
    {
        $Visiteurs = $this->getDoctrine()
                ->getRepository('AppBundle:Visiteur')
                ->findAll();
        
        return $this->render('Visiteur/index.html.twig', array(
            'Visiteurs' => $Visiteurs
        ));
    }
    
    /**
     * @Route("/Visiteur/create", name="Visiteur_create")
     */
    public function createAction(Request $request)
    {
        $Visiteur = new \AppBundle\Entity\Visiteur();
        $atrributes = array('class' => 'form-control' , 'style' => 'margin-bottom:15px');
        $choices = array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High');
        $form = $this->createFormBuilder($Visiteur)
                ->add('name', TextType::class, array('attr' => $atrributes))
                ->add('category', TextType::class, array('attr' => $atrributes))
                ->add('description', TextareaType::class, array('attr' => $atrributes))
                ->add('priority', ChoiceType::class, array('choices' => $choices, 'attr' => $atrributes))
                ->add('due_date', DateTimeType::class, array('attr' => array('style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Create Visiteur', 'attr' => array('class' => 'btn btn-primary')))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $Visiteur->setName($form['name']->getData());
            $Visiteur->setCategory($form['category']->getData());
            $Visiteur->setDescription($form['description']->getData());
            $Visiteur->setPriority($form['priority']->getData());
            $Visiteur->setDueDate($form['due_date']->getData());
            $Visiteur->setCreateDate(new \DateTime('now'));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($Visiteur);
            $em->flush();
            
            $this->addFlash('notice', 'Visiteur Added');
            
            return $this->redirectToRoute('Visiteur_list');
        }
        
        return $this->render('Visiteur/create.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/Visiteur/edit/{id}", name="Visiteur_edit")
     */
    public function editAction($id, Request $request)
    {
        $Visiteur = $this->getDoctrine()
                ->getRepository('AppBundle:Visiteur')
                ->find($id);
        
        if (empty($Visiteur)) {
            $this->addFlash('error', 'Visiteur not found');
            
            return $this->redirectToRoute('Visiteur_list');
        }
        
        $atrributes = array('class' => 'form-control' , 'style' => 'margin-bottom:15px');
        $choices = array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High');
        $form = $this->createFormBuilder($Visiteur)
                ->add('name', TextType::class, array('attr' => $atrributes))
                ->add('category', TextType::class, array('attr' => $atrributes))
                ->add('description', TextareaType::class, array('attr' => $atrributes))
                ->add('priority', ChoiceType::class, array('choices' => $choices, 'attr' => $atrributes))
                ->add('due_date', DateTimeType::class, array('attr' => array('style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Update Visiteur', 'attr' => array('class' => 'btn btn-primary')))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $Visiteur->setName($form['name']->getData());
            $Visiteur->setCategory($form['category']->getData());
            $Visiteur->setDescription($form['description']->getData());
            $Visiteur->setPriority($form['priority']->getData());
            $Visiteur->setDueDate($form['due_date']->getData());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($Visiteur);
            $em->flush();
            
            $this->addFlash('notice', 'Visiteur updated');
            
            return $this->redirectToRoute('Visiteur_list');
        }
        
        return $this->render('Visiteur/edit.html.twig', array(
            'form' => $form->createView(),
            'Visiteur' => $Visiteur
        ));
    }
    
    /**
     * @Route("/Visiteur/details/{id}", name="Visiteur_details")
     */
    public function detailsAction($id)
    {
        $Visiteur = $this->getDoctrine()
                ->getRepository('AppBundle:Visiteur')
                ->find($id);
        if (empty($Visiteur)) {
            $this->addFlash('error', 'Visiteur not found');
            
            return $this->redirectToRoute('Visiteur_list');
        }
        
        return $this->render('Visiteur/detail.html.twig', array(
            'Visiteur' => $Visiteur
        ));
    }

    /**
     * @Route("/Visiteur/delete/{id}", name="Visiteur_delete")
     */
    public function deleteAction($id)
    {
        $Visiteur = $this->getDoctrine()
                ->getRepository('AppBundle:Visiteur')
                ->find($id);
        
        if (empty($Visiteur)) {
            $this->addFlash('error', 'Visiteur not found');
            
            return $this->redirectToRoute('Visiteur_list');
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($Visiteur);
        $em->flush();
        
        $this->addFlash('notice', 'Visiteur removed');
       
        return $this->redirectToRoute('Visiteur_list');
    }
}
