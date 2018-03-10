<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1766adddc2adf8ec4105370d6305306e8a5ebaac185023732af259cb51a677d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16d5775fe29707f47dfab18b3bcf48df0e79b778f195fbf89fe87967ce53037a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d5775fe29707f47dfab18b3bcf48df0e79b778f195fbf89fe87967ce53037a->enter($__internal_16d5775fe29707f47dfab18b3bcf48df0e79b778f195fbf89fe87967ce53037a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d5775fe29707f47dfab18b3bcf48df0e79b778f195fbf89fe87967ce53037a->leave($__internal_16d5775fe29707f47dfab18b3bcf48df0e79b778f195fbf89fe87967ce53037a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1aafb3cc35825aebedbde7138b4fd3dd7089fbe855fe253c15e6c4c88dee43cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aafb3cc35825aebedbde7138b4fd3dd7089fbe855fe253c15e6c4c88dee43cd->enter($__internal_1aafb3cc35825aebedbde7138b4fd3dd7089fbe855fe253c15e6c4c88dee43cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_1aafb3cc35825aebedbde7138b4fd3dd7089fbe855fe253c15e6c4c88dee43cd->leave($__internal_1aafb3cc35825aebedbde7138b4fd3dd7089fbe855fe253c15e6c4c88dee43cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_589668206e17df6981d8c5480b796664e6685df2df57556212dfc18626c94ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589668206e17df6981d8c5480b796664e6685df2df57556212dfc18626c94ab1->enter($__internal_589668206e17df6981d8c5480b796664e6685df2df57556212dfc18626c94ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_589668206e17df6981d8c5480b796664e6685df2df57556212dfc18626c94ab1->leave($__internal_589668206e17df6981d8c5480b796664e6685df2df57556212dfc18626c94ab1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0507e5b6e8dab1044084ddd1e2d1e35e86a570c14f1dc2b0abeea617472b0499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0507e5b6e8dab1044084ddd1e2d1e35e86a570c14f1dc2b0abeea617472b0499->enter($__internal_0507e5b6e8dab1044084ddd1e2d1e35e86a570c14f1dc2b0abeea617472b0499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0507e5b6e8dab1044084ddd1e2d1e35e86a570c14f1dc2b0abeea617472b0499->leave($__internal_0507e5b6e8dab1044084ddd1e2d1e35e86a570c14f1dc2b0abeea617472b0499_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/amanciodossou/Documents/symfony3-crud/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
