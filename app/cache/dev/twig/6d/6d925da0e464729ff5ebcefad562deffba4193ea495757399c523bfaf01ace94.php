<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b1afefdbb09a00c79d43ddcbfa1f48ecc555a6e6e44fffbf796774ccca7d8f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_47b7807d8093d11450617cb2038f683399324bfecb312e820dcdcd4d36548f32 = $this->env->getExtension("native_profiler");
        $__internal_47b7807d8093d11450617cb2038f683399324bfecb312e820dcdcd4d36548f32->enter($__internal_47b7807d8093d11450617cb2038f683399324bfecb312e820dcdcd4d36548f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b7807d8093d11450617cb2038f683399324bfecb312e820dcdcd4d36548f32->leave($__internal_47b7807d8093d11450617cb2038f683399324bfecb312e820dcdcd4d36548f32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfddaaf5b3e76944e8ae51340a59c637de837dca458a227a335bf3feba8b7c00 = $this->env->getExtension("native_profiler");
        $__internal_cfddaaf5b3e76944e8ae51340a59c637de837dca458a227a335bf3feba8b7c00->enter($__internal_cfddaaf5b3e76944e8ae51340a59c637de837dca458a227a335bf3feba8b7c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfddaaf5b3e76944e8ae51340a59c637de837dca458a227a335bf3feba8b7c00->leave($__internal_cfddaaf5b3e76944e8ae51340a59c637de837dca458a227a335bf3feba8b7c00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae98cb30b8ac6915a58590927c69d1b2a844765d4b33d3349234e1346c57753b = $this->env->getExtension("native_profiler");
        $__internal_ae98cb30b8ac6915a58590927c69d1b2a844765d4b33d3349234e1346c57753b->enter($__internal_ae98cb30b8ac6915a58590927c69d1b2a844765d4b33d3349234e1346c57753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae98cb30b8ac6915a58590927c69d1b2a844765d4b33d3349234e1346c57753b->leave($__internal_ae98cb30b8ac6915a58590927c69d1b2a844765d4b33d3349234e1346c57753b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19e7672ec81e585545ae3a23a664c3142ed729047e00a56a0b8c3295e42c6d37 = $this->env->getExtension("native_profiler");
        $__internal_19e7672ec81e585545ae3a23a664c3142ed729047e00a56a0b8c3295e42c6d37->enter($__internal_19e7672ec81e585545ae3a23a664c3142ed729047e00a56a0b8c3295e42c6d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19e7672ec81e585545ae3a23a664c3142ed729047e00a56a0b8c3295e42c6d37->leave($__internal_19e7672ec81e585545ae3a23a664c3142ed729047e00a56a0b8c3295e42c6d37_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
