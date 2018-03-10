<?php

/* Visiteur/edit.html.twig */
class __TwigTemplate_de6f12fcb3e7ecb1895755d40568c3d4344af293a132dd27efb4ccef763a4ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Visiteur/edit.html.twig", 1);
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
        $__internal_462ba9cd9a856e515a1dac16d4a32b87fd2befa9e54da2d0af98d2c464163211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462ba9cd9a856e515a1dac16d4a32b87fd2befa9e54da2d0af98d2c464163211->enter($__internal_462ba9cd9a856e515a1dac16d4a32b87fd2befa9e54da2d0af98d2c464163211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Visiteur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462ba9cd9a856e515a1dac16d4a32b87fd2befa9e54da2d0af98d2c464163211->leave($__internal_462ba9cd9a856e515a1dac16d4a32b87fd2befa9e54da2d0af98d2c464163211_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfa312e9f2df8146ed49ac0bf91d80fdff77bfa6babcf590c6f49b312c9e4a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa312e9f2df8146ed49ac0bf91d80fdff77bfa6babcf590c6f49b312c9e4a4c->enter($__internal_dfa312e9f2df8146ed49ac0bf91d80fdff77bfa6babcf590c6f49b312c9e4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/edit.html.twig"));

        echo "Visiteur:edit";
        
        $__internal_dfa312e9f2df8146ed49ac0bf91d80fdff77bfa6babcf590c6f49b312c9e4a4c->leave($__internal_dfa312e9f2df8146ed49ac0bf91d80fdff77bfa6babcf590c6f49b312c9e4a4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e07e1868344aabab2dfafb52eb743f154b2d19aa12022ea46d49c616d9f9dff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07e1868344aabab2dfafb52eb743f154b2d19aa12022ea46d49c616d9f9dff6->enter($__internal_e07e1868344aabab2dfafb52eb743f154b2d19aa12022ea46d49c616d9f9dff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/edit.html.twig"));

        // line 6
        echo "    <h2 class=\"page-header\">Modifier Visiteur</h2>
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
        
        $__internal_e07e1868344aabab2dfafb52eb743f154b2d19aa12022ea46d49c616d9f9dff6->leave($__internal_e07e1868344aabab2dfafb52eb743f154b2d19aa12022ea46d49c616d9f9dff6_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/edit.html.twig";
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

{% block title %}Visiteur:edit{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Modifier Visiteur</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "Visiteur/edit.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/Visiteur/edit.html.twig");
    }
}
