<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3b4f13b857a31faec9f115daf364ed491d812465d15842deaee1ea8cf8b7610f extends Twig_Template
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
        $__internal_524fb4849de393b8a27306cd904e695497588dd474e56487fe50231140eb9151 = $this->env->getExtension("native_profiler");
        $__internal_524fb4849de393b8a27306cd904e695497588dd474e56487fe50231140eb9151->enter($__internal_524fb4849de393b8a27306cd904e695497588dd474e56487fe50231140eb9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_524fb4849de393b8a27306cd904e695497588dd474e56487fe50231140eb9151->leave($__internal_524fb4849de393b8a27306cd904e695497588dd474e56487fe50231140eb9151_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
