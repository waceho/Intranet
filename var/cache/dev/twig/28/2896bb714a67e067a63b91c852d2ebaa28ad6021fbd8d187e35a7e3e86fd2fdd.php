<?php

/* default/index.html.twig */
class __TwigTemplate_4a5e0b7e3129a2812fde62a4d385cc5176a60ce4dec06e05a66e9afaf320b197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_256ca7ddf715f7cd979275647991c77041a14d33e40b344d2489293170e71e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256ca7ddf715f7cd979275647991c77041a14d33e40b344d2489293170e71e94->enter($__internal_256ca7ddf715f7cd979275647991c77041a14d33e40b344d2489293170e71e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256ca7ddf715f7cd979275647991c77041a14d33e40b344d2489293170e71e94->leave($__internal_256ca7ddf715f7cd979275647991c77041a14d33e40b344d2489293170e71e94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_034da4727306f2d9f5350fc770e8ea13352a7eb42995d5fcd00d4a83c19c8735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034da4727306f2d9f5350fc770e8ea13352a7eb42995d5fcd00d4a83c19c8735->enter($__internal_034da4727306f2d9f5350fc770e8ea13352a7eb42995d5fcd00d4a83c19c8735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Bienvenue sur la plateforme d'administration du cabinet </span> EN DEV </h1>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>
                     Vous pouvez administrer les visiteurs sur cette plâteforme
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_034da4727306f2d9f5350fc770e8ea13352a7eb42995d5fcd00d4a83c19c8735->leave($__internal_034da4727306f2d9f5350fc770e8ea13352a7eb42995d5fcd00d4a83c19c8735_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2117ab69d0d8b14ffa204c2d5fc53389b382593188e4edf4f1c76adbfe413859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2117ab69d0d8b14ffa204c2d5fc53389b382593188e4edf4f1c76adbfe413859->enter($__internal_2117ab69d0d8b14ffa204c2d5fc53389b382593188e4edf4f1c76adbfe413859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 22
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_2117ab69d0d8b14ffa204c2d5fc53389b382593188e4edf4f1c76adbfe413859->leave($__internal_2117ab69d0d8b14ffa204c2d5fc53389b382593188e4edf4f1c76adbfe413859_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  63 => 21,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Bienvenue sur la plateforme d'administration du cabinet </span> EN DEV </h1>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>
                     Vous pouvez administrer les visiteurs sur cette plâteforme
                </p>
            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/default/index.html.twig");
    }
}
