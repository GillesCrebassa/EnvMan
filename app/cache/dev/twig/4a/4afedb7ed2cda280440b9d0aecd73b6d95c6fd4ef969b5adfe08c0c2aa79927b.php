<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9a09cf2aabf02a5e2ee42e8126a5c4ed70d1d1ce45c0f21619349659cf1781b6 extends Twig_Template
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
        $__internal_1f8def250cb89a75342d3dddfcaf336e19c4e15b0c6d1a6e17548211fce61dd5 = $this->env->getExtension("native_profiler");
        $__internal_1f8def250cb89a75342d3dddfcaf336e19c4e15b0c6d1a6e17548211fce61dd5->enter($__internal_1f8def250cb89a75342d3dddfcaf336e19c4e15b0c6d1a6e17548211fce61dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1f8def250cb89a75342d3dddfcaf336e19c4e15b0c6d1a6e17548211fce61dd5->leave($__internal_1f8def250cb89a75342d3dddfcaf336e19c4e15b0c6d1a6e17548211fce61dd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
