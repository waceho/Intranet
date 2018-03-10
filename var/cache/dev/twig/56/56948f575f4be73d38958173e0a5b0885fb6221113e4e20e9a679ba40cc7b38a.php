<?php

/* Visiteur/detail.html.twig */
class __TwigTemplate_be1f1ba77831166197d339fdde1aa113376e2839f15ef15740a1415e717b9e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Visiteur/detail.html.twig", 1);
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
        $__internal_e814e381a6e339610ea96a3a15a8b360c8875fd7383d5ee46ec23565d649b622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e814e381a6e339610ea96a3a15a8b360c8875fd7383d5ee46ec23565d649b622->enter($__internal_e814e381a6e339610ea96a3a15a8b360c8875fd7383d5ee46ec23565d649b622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Visiteur/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e814e381a6e339610ea96a3a15a8b360c8875fd7383d5ee46ec23565d649b622->leave($__internal_e814e381a6e339610ea96a3a15a8b360c8875fd7383d5ee46ec23565d649b622_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fe4795d8bc8af4618b038be675eb0f6e1a311c68d1370fb95e35d4de999563e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe4795d8bc8af4618b038be675eb0f6e1a311c68d1370fb95e35d4de999563e->enter($__internal_5fe4795d8bc8af4618b038be675eb0f6e1a311c68d1370fb95e35d4de999563e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/detail.html.twig"));

        echo "Visiteur:detail";
        
        $__internal_5fe4795d8bc8af4618b038be675eb0f6e1a311c68d1370fb95e35d4de999563e->leave($__internal_5fe4795d8bc8af4618b038be675eb0f6e1a311c68d1370fb95e35d4de999563e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52100069dc22953dac937e139cac82ccaba86c898d199829024a776c0c460ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52100069dc22953dac937e139cac82ccaba86c898d199829024a776c0c460ff1->enter($__internal_52100069dc22953dac937e139cac82ccaba86c898d199829024a776c0c460ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/detail.html.twig"));

        // line 6
        echo "    <a class=\"btn btn-default\" href=\"/Visiteur\">Retour</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Visiteur"]) ? $context["Visiteur"] : $this->getContext($context, "Visiteur")), "getName", array(), "method"), "html", null, true);
        echo "</h2>
    
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Visiteur"]) ? $context["Visiteur"] : $this->getContext($context, "Visiteur")), "getCategory", array(), "method"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Visiteur"]) ? $context["Visiteur"] : $this->getContext($context, "Visiteur")), "getPriority", array(), "method"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Visiteur"]) ? $context["Visiteur"] : $this->getContext($context, "Visiteur")), "getDueDate", array(), "method"), "F j, Y, g:i a"), "html", null, true);
        echo "</li>
    </ul>
        <p>
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Visiteur"]) ? $context["Visiteur"] : $this->getContext($context, "Visiteur")), "getDescription", array(), "method"), "html", null, true);
        echo "
        </p>
";
        
        $__internal_52100069dc22953dac937e139cac82ccaba86c898d199829024a776c0c460ff1->leave($__internal_52100069dc22953dac937e139cac82ccaba86c898d199829024a776c0c460ff1_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 13,  67 => 12,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Visiteur:detail{% endblock %}

{% block body %}
    <a class=\"btn btn-default\" href=\"/Visiteur\">Retour</a>
    <hr>
    <h2 class=\"page-header\">{{ Visiteur.getName() }}</h2>
    
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{ Visiteur.getCategory() }}</li>
        <li class=\"list-group-item\">Priority: {{ Visiteur.getPriority() }}</li>
        <li class=\"list-group-item\">Due: {{ Visiteur.getDueDate() | date('F j, Y, g:i a') }}</li>
    </ul>
        <p>
            {{ Visiteur.getDescription() }}
        </p>
{% endblock %}
", "Visiteur/detail.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/Visiteur/detail.html.twig");
    }
}
