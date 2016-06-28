<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_514df6482d6d2e12443daca609e657f0f351c9a8c116a4df232540694a0e8e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e74955156890bd87a14d899b4c5c1eed21dde7614793fbe671faa04806bb7c3d = $this->env->getExtension("native_profiler");
        $__internal_e74955156890bd87a14d899b4c5c1eed21dde7614793fbe671faa04806bb7c3d->enter($__internal_e74955156890bd87a14d899b4c5c1eed21dde7614793fbe671faa04806bb7c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74955156890bd87a14d899b4c5c1eed21dde7614793fbe671faa04806bb7c3d->leave($__internal_e74955156890bd87a14d899b4c5c1eed21dde7614793fbe671faa04806bb7c3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cfb3b30a0cbf115ece444a3e3382d99824abc867449cb4d14a647a42ab836b5 = $this->env->getExtension("native_profiler");
        $__internal_5cfb3b30a0cbf115ece444a3e3382d99824abc867449cb4d14a647a42ab836b5->enter($__internal_5cfb3b30a0cbf115ece444a3e3382d99824abc867449cb4d14a647a42ab836b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5cfb3b30a0cbf115ece444a3e3382d99824abc867449cb4d14a647a42ab836b5->leave($__internal_5cfb3b30a0cbf115ece444a3e3382d99824abc867449cb4d14a647a42ab836b5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0ea817b4250b82afc820724996fca351e86b76aa9e24284db98272a635008c1 = $this->env->getExtension("native_profiler");
        $__internal_f0ea817b4250b82afc820724996fca351e86b76aa9e24284db98272a635008c1->enter($__internal_f0ea817b4250b82afc820724996fca351e86b76aa9e24284db98272a635008c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f0ea817b4250b82afc820724996fca351e86b76aa9e24284db98272a635008c1->leave($__internal_f0ea817b4250b82afc820724996fca351e86b76aa9e24284db98272a635008c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2b10b25630cf03207131c8dea2c1d232381e68a14e0501ad6424cae8fd66b6a = $this->env->getExtension("native_profiler");
        $__internal_a2b10b25630cf03207131c8dea2c1d232381e68a14e0501ad6424cae8fd66b6a->enter($__internal_a2b10b25630cf03207131c8dea2c1d232381e68a14e0501ad6424cae8fd66b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a2b10b25630cf03207131c8dea2c1d232381e68a14e0501ad6424cae8fd66b6a->leave($__internal_a2b10b25630cf03207131c8dea2c1d232381e68a14e0501ad6424cae8fd66b6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
