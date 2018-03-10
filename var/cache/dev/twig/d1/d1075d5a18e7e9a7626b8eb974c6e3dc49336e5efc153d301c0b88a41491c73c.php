<?php

/* Visiteur/create.html.twig */
class __TwigTemplate_6b3250bd2bf110a27b2748f64f97432b045d45781fba0f52a59396f13bc75669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Visiteur/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759065e2d33aafefb9b4303e1e6feb8ccf4c4a2b44e27745efec9111ad8d76c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759065e2d33aafefb9b4303e1e6feb8ccf4c4a2b44e27745efec9111ad8d76c0->enter($__internal_759065e2d33aafefb9b4303e1e6feb8ccf4c4a2b44e27745efec9111ad8d76c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Visiteur/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759065e2d33aafefb9b4303e1e6feb8ccf4c4a2b44e27745efec9111ad8d76c0->leave($__internal_759065e2d33aafefb9b4303e1e6feb8ccf4c4a2b44e27745efec9111ad8d76c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fc453915af1163dffb330d994cd2ba431ec2b44bc6cf8851c173a51542ea70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc453915af1163dffb330d994cd2ba431ec2b44bc6cf8851c173a51542ea70d->enter($__internal_7fc453915af1163dffb330d994cd2ba431ec2b44bc6cf8851c173a51542ea70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/create.html.twig"));

        echo "Visiteur:create";
        
        $__internal_7fc453915af1163dffb330d994cd2ba431ec2b44bc6cf8851c173a51542ea70d->leave($__internal_7fc453915af1163dffb330d994cd2ba431ec2b44bc6cf8851c173a51542ea70d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56fee039325b285ec2c8f6edb673ab37ef43fdd60841537b4a98723c3ac7dfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fee039325b285ec2c8f6edb673ab37ef43fdd60841537b4a98723c3ac7dfa6->enter($__internal_56fee039325b285ec2c8f6edb673ab37ef43fdd60841537b4a98723c3ac7dfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/create.html.twig"));

        // line 6
        echo "    <h2 class=\"page-header\">Ajout Visiteur</h2>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_56fee039325b285ec2c8f6edb673ab37ef43fdd60841537b4a98723c3ac7dfa6->leave($__internal_56fee039325b285ec2c8f6edb673ab37ef43fdd60841537b4a98723c3ac7dfa6_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Visiteur:create{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Ajout Visiteur</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "Visiteur/create.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/Visiteur/create.html.twig");
    }
}
