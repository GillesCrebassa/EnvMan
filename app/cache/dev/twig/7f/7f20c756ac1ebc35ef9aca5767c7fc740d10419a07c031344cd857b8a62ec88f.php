<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9a1b06764dbfeece5b800796d1df060631c6260a8e5ff83d8799ebc79477997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_524eedcc0afec83616c80784e07d2b7108d27fc9736b5bba249329a7aed1e856 = $this->env->getExtension("native_profiler");
        $__internal_524eedcc0afec83616c80784e07d2b7108d27fc9736b5bba249329a7aed1e856->enter($__internal_524eedcc0afec83616c80784e07d2b7108d27fc9736b5bba249329a7aed1e856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524eedcc0afec83616c80784e07d2b7108d27fc9736b5bba249329a7aed1e856->leave($__internal_524eedcc0afec83616c80784e07d2b7108d27fc9736b5bba249329a7aed1e856_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dfe0ffc24ef02b57fde1198118eb3e88693d06d4895775f0da04429767bceba = $this->env->getExtension("native_profiler");
        $__internal_8dfe0ffc24ef02b57fde1198118eb3e88693d06d4895775f0da04429767bceba->enter($__internal_8dfe0ffc24ef02b57fde1198118eb3e88693d06d4895775f0da04429767bceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8dfe0ffc24ef02b57fde1198118eb3e88693d06d4895775f0da04429767bceba->leave($__internal_8dfe0ffc24ef02b57fde1198118eb3e88693d06d4895775f0da04429767bceba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34260b4f24197eef58cbf75da493bc907638a0249828d72f1729758922182baa = $this->env->getExtension("native_profiler");
        $__internal_34260b4f24197eef58cbf75da493bc907638a0249828d72f1729758922182baa->enter($__internal_34260b4f24197eef58cbf75da493bc907638a0249828d72f1729758922182baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_34260b4f24197eef58cbf75da493bc907638a0249828d72f1729758922182baa->leave($__internal_34260b4f24197eef58cbf75da493bc907638a0249828d72f1729758922182baa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
