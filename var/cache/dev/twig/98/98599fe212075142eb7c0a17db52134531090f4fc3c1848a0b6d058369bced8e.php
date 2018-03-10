<?php

/* common/menu.html.twig */
class __TwigTemplate_fdd559d0e26b10f8bca2d32aa7aee7a30a54cbe2d7e48870b853368b2beb760c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d6510f80924bc66ad1ca59a2ceeccc5135f2d447fa9765478aae1f49454fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d6510f80924bc66ad1ca59a2ceeccc5135f2d447fa9765478aae1f49454fdf->enter($__internal_f3d6510f80924bc66ad1ca59a2ceeccc5135f2d447fa9765478aae1f49454fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "common/menu.html.twig"));

        // line 1
        echo "

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Admin Visiteur</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/Visiteur\">Visiteurs</a></li>
            <li><a href=\"/Visiteur/create\">Enregister un Visiteur</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>";
        
        $__internal_f3d6510f80924bc66ad1ca59a2ceeccc5135f2d447fa9765478aae1f49454fdf->leave($__internal_f3d6510f80924bc66ad1ca59a2ceeccc5135f2d447fa9765478aae1f49454fdf_prof);

    }

    public function getTemplateName()
    {
        return "common/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Admin Visiteur</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/Visiteur\">Visiteurs</a></li>
            <li><a href=\"/Visiteur/create\">Enregister un Visiteur</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>", "common/menu.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/app/Resources/views/common/menu.html.twig");
    }
}
