<?php

/* base.html.twig */
class __TwigTemplate_60246c164fc519d30e19eb4e89208a39afc0503b8fe30101bbfcd88b570e482f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b61a75d3e14dae2109da6579ab4814f7f014ac88f499d4e611384c5ded834db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a75d3e14dae2109da6579ab4814f7f014ac88f499d4e611384c5ded834db8->enter($__internal_b61a75d3e14dae2109da6579ab4814f7f014ac88f499d4e611384c5ded834db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>

        ";
        // line 18
        echo twig_include($this->env, $context, "common/menu.html.twig");
        echo "

        <div class=\"container\">
            
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 25
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    
                    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "                </div>
                
            </div>
            
        </div><!-- /.container -->
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>

";
        
        $__internal_b61a75d3e14dae2109da6579ab4814f7f014ac88f499d4e611384c5ded834db8->leave($__internal_b61a75d3e14dae2109da6579ab4814f7f014ac88f499d4e611384c5ded834db8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_63b383f826890be8ca1abe48f9820e8e8fec29486b05d9e7ff8e0636946da21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b383f826890be8ca1abe48f9820e8e8fec29486b05d9e7ff8e0636946da21d->enter($__internal_63b383f826890be8ca1abe48f9820e8e8fec29486b05d9e7ff8e0636946da21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Bienvenue!";
        
        $__internal_63b383f826890be8ca1abe48f9820e8e8fec29486b05d9e7ff8e0636946da21d->leave($__internal_63b383f826890be8ca1abe48f9820e8e8fec29486b05d9e7ff8e0636946da21d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_067e1d5c8fcd9276497f6e3ebd3fd2f2461923a3b017b16ffeda9669960ce877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067e1d5c8fcd9276497f6e3ebd3fd2f2461923a3b017b16ffeda9669960ce877->enter($__internal_067e1d5c8fcd9276497f6e3ebd3fd2f2461923a3b017b16ffeda9669960ce877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_067e1d5c8fcd9276497f6e3ebd3fd2f2461923a3b017b16ffeda9669960ce877->leave($__internal_067e1d5c8fcd9276497f6e3ebd3fd2f2461923a3b017b16ffeda9669960ce877_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef94b4f36134164096a451dd6c1b3644e99a7f21990d4b814edb93827243883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef94b4f36134164096a451dd6c1b3644e99a7f21990d4b814edb93827243883->enter($__internal_0ef94b4f36134164096a451dd6c1b3644e99a7f21990d4b814edb93827243883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0ef94b4f36134164096a451dd6c1b3644e99a7f21990d4b814edb93827243883->leave($__internal_0ef94b4f36134164096a451dd6c1b3644e99a7f21990d4b814edb93827243883_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3c41907923772e9cfc0f3ef9ad9a61711f12919fa5f891a595d8b80d76db4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c41907923772e9cfc0f3ef9ad9a61711f12919fa5f891a595d8b80d76db4dd->enter($__internal_c3c41907923772e9cfc0f3ef9ad9a61711f12919fa5f891a595d8b80d76db4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c3c41907923772e9cfc0f3ef9ad9a61711f12919fa5f891a595d8b80d76db4dd->leave($__internal_c3c41907923772e9cfc0f3ef9ad9a61711f12919fa5f891a595d8b80d76db4dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 38,  141 => 32,  130 => 12,  118 => 8,  108 => 39,  106 => 38,  99 => 33,  97 => 32,  94 => 31,  85 => 29,  81 => 28,  78 => 27,  69 => 25,  65 => 24,  56 => 18,  47 => 13,  45 => 12,  41 => 11,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}Bienvenue!{% endblock %}</title>

        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>

        {{ include('common/menu.html.twig') }}

        <div class=\"container\">
            
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% for flash_message in app.session.flashbag.get('notice') %}
                        <div class=\"alert alert-success\">{{ flash_message }}</div>
                    {% endfor %}
                    
                    {% for flash_message in app.session.flashbag.get('error') %}
                        <div class=\"alert alert-danger\">{{ flash_message }}</div>
                    {% endfor %}
                    
                    {% block body %}{% endblock %}
                </div>
                
            </div>
            
        </div><!-- /.container -->
        {% block javascripts %}{% endblock %}
    </body>
</html>

", "base.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/base.html.twig");
    }
}
