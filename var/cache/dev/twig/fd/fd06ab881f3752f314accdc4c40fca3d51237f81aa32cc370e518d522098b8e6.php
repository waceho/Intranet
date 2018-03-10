<?php

/* todo/create.html.twig */
class __TwigTemplate_4a4f85f61229dc581cef37ca6e7d1860f3776de2511bcfa910497abf132bbe2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
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
        $__internal_c2fcc995c204ae24a99924b0ccf7f2e165a38e2bcdc86ffb5691813b01e36c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fcc995c204ae24a99924b0ccf7f2e165a38e2bcdc86ffb5691813b01e36c45->enter($__internal_c2fcc995c204ae24a99924b0ccf7f2e165a38e2bcdc86ffb5691813b01e36c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fcc995c204ae24a99924b0ccf7f2e165a38e2bcdc86ffb5691813b01e36c45->leave($__internal_c2fcc995c204ae24a99924b0ccf7f2e165a38e2bcdc86ffb5691813b01e36c45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f5af5622f4d6b7fb87a70c41690b71e5089c2b73e241cbec365e759ccd06a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5af5622f4d6b7fb87a70c41690b71e5089c2b73e241cbec365e759ccd06a9d->enter($__internal_0f5af5622f4d6b7fb87a70c41690b71e5089c2b73e241cbec365e759ccd06a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/create.html.twig"));

        echo "Todo:create";
        
        $__internal_0f5af5622f4d6b7fb87a70c41690b71e5089c2b73e241cbec365e759ccd06a9d->leave($__internal_0f5af5622f4d6b7fb87a70c41690b71e5089c2b73e241cbec365e759ccd06a9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c7552787cd1237b993393ef16b91e1c414d9f234764c150e45cad647f53c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c7552787cd1237b993393ef16b91e1c414d9f234764c150e45cad647f53c6f->enter($__internal_a0c7552787cd1237b993393ef16b91e1c414d9f234764c150e45cad647f53c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/create.html.twig"));

        // line 6
        echo "    <h2 class=\"page-header\">Add Todo</h2>
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
        
        $__internal_a0c7552787cd1237b993393ef16b91e1c414d9f234764c150e45cad647f53c6f->leave($__internal_a0c7552787cd1237b993393ef16b91e1c414d9f234764c150e45cad647f53c6f_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
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

{% block title %}Todo:create{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Add Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "todo/create.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/todo/create.html.twig");
    }
}
