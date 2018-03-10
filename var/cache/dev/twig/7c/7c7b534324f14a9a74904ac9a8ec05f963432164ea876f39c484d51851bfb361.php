<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ca278ae67ebc88b027843b604b99e840155b0282e62f3012f4b936b657f8bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9137c3504b74018f6740facedf70b2996a8d15d08ce3656acd5a50b61b94c16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9137c3504b74018f6740facedf70b2996a8d15d08ce3656acd5a50b61b94c16b->enter($__internal_9137c3504b74018f6740facedf70b2996a8d15d08ce3656acd5a50b61b94c16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9137c3504b74018f6740facedf70b2996a8d15d08ce3656acd5a50b61b94c16b->leave($__internal_9137c3504b74018f6740facedf70b2996a8d15d08ce3656acd5a50b61b94c16b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f7d4483f1ec9c4bdb0039307a3689f7dc54608a2ae4ef8103ff942f21d614a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7d4483f1ec9c4bdb0039307a3689f7dc54608a2ae4ef8103ff942f21d614a2->enter($__internal_5f7d4483f1ec9c4bdb0039307a3689f7dc54608a2ae4ef8103ff942f21d614a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f7d4483f1ec9c4bdb0039307a3689f7dc54608a2ae4ef8103ff942f21d614a2->leave($__internal_5f7d4483f1ec9c4bdb0039307a3689f7dc54608a2ae4ef8103ff942f21d614a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75995de4511ab29a664e9a60720fe65c727880ccf53a8b8ccaf9b2d4feea6bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75995de4511ab29a664e9a60720fe65c727880ccf53a8b8ccaf9b2d4feea6bca->enter($__internal_75995de4511ab29a664e9a60720fe65c727880ccf53a8b8ccaf9b2d4feea6bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75995de4511ab29a664e9a60720fe65c727880ccf53a8b8ccaf9b2d4feea6bca->leave($__internal_75995de4511ab29a664e9a60720fe65c727880ccf53a8b8ccaf9b2d4feea6bca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffdc42dcea2c05804aa388ba65cec3124eed9ec21630348d6560841c0b056181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdc42dcea2c05804aa388ba65cec3124eed9ec21630348d6560841c0b056181->enter($__internal_ffdc42dcea2c05804aa388ba65cec3124eed9ec21630348d6560841c0b056181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ffdc42dcea2c05804aa388ba65cec3124eed9ec21630348d6560841c0b056181->leave($__internal_ffdc42dcea2c05804aa388ba65cec3124eed9ec21630348d6560841c0b056181_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
