<?php

/* Visiteur/index.html.twig */
class __TwigTemplate_8c162a1cd92141996c5365a06c4713742cdf6acd77958733009507e1d6031b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Visiteur/index.html.twig", 1);
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
        $__internal_d6509a78e5096679ae237e7869e97d16db0d21b9e6ab937a157e591311ac91ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6509a78e5096679ae237e7869e97d16db0d21b9e6ab937a157e591311ac91ea->enter($__internal_d6509a78e5096679ae237e7869e97d16db0d21b9e6ab937a157e591311ac91ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Visiteur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6509a78e5096679ae237e7869e97d16db0d21b9e6ab937a157e591311ac91ea->leave($__internal_d6509a78e5096679ae237e7869e97d16db0d21b9e6ab937a157e591311ac91ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc40079094b2f098523d9d96b1873ae36e18b3df3a01ddecce0bcc8f5a3d67d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40079094b2f098523d9d96b1873ae36e18b3df3a01ddecce0bcc8f5a3d67d9->enter($__internal_fc40079094b2f098523d9d96b1873ae36e18b3df3a01ddecce0bcc8f5a3d67d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/index.html.twig"));

        echo "Visiteur:List";
        
        $__internal_fc40079094b2f098523d9d96b1873ae36e18b3df3a01ddecce0bcc8f5a3d67d9->leave($__internal_fc40079094b2f098523d9d96b1873ae36e18b3df3a01ddecce0bcc8f5a3d67d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b1b91ee88498fe75c9fd27c211998f09ed8abf7668552eb21a99f21aa87cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b1b91ee88498fe75c9fd27c211998f09ed8abf7668552eb21a99f21aa87cc1->enter($__internal_d9b1b91ee88498fe75c9fd27c211998f09ed8abf7668552eb21a99f21aa87cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Visiteur/index.html.twig"));

        // line 6
        echo "    <h2 class=\"page-header\">Visiteur: Liste</h2>

    <table class=\"table\">
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Visiteur</th> 
                <th>Date d'ajout</th>
                <th></th> 
            </tr> 
        </thead> 
        <tbody> 
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Visiteurs"]) ? $context["Visiteurs"] : $this->getContext($context, "Visiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["Visiteur"]) {
            // line 19
            echo "            <tr> 
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["Visiteur"], "id", array()), "html", null, true);
            echo "</th> 
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["Visiteur"], "name", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Visiteur"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td> 
                <td>
                    <a href=\"/Visiteur/details/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["Visiteur"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Afficher</a>
                    <a href=\"/Visiteur/edit/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["Visiteur"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">modifier</a>
                    <a href=\"/Visiteur/delete/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Visiteur"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                </td> 
            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody> 
    </table>
";
        
        $__internal_d9b1b91ee88498fe75c9fd27c211998f09ed8abf7668552eb21a99f21aa87cc1->leave($__internal_d9b1b91ee88498fe75c9fd27c211998f09ed8abf7668552eb21a99f21aa87cc1_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  95 => 26,  91 => 25,  87 => 24,  82 => 22,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Visiteur:List{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Visiteur: Liste</h2>

    <table class=\"table\">
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Visiteur</th> 
                <th>Date d'ajout</th>
                <th></th> 
            </tr> 
        </thead> 
        <tbody> 
            {% for Visiteur in Visiteurs %}
            <tr> 
                <th scope=\"row\">{{ Visiteur.id }}</th> 
                <td>{{ Visiteur.name }}</td> 
                <td>{{ Visiteur.dueDate|date('F j, Y, g:i a') }}</td> 
                <td>
                    <a href=\"/Visiteur/details/{{ Visiteur.id }}\" class=\"btn btn-success\">Afficher</a>
                    <a href=\"/Visiteur/edit/{{ Visiteur.id }}\" class=\"btn btn-default\">modifier</a>
                    <a href=\"/Visiteur/delete/{{ Visiteur.id }}\" class=\"btn btn-danger\">Supprimer</a>
                </td> 
            </tr> 
            {% endfor %}
        </tbody> 
    </table>
{% endblock %}
", "Visiteur/index.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/Visiteur/index.html.twig");
    }
}
