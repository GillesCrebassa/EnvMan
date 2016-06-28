<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_23abf4f440f11a669aae5c9a712fd976597b5082858dc01fcfdfb07c4a08b613 extends Twig_Template
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
        $__internal_a41c1cdb04efcc8d6fd1d4e5ab4deb126abed77ecea406a784d9b1af28c41935 = $this->env->getExtension("native_profiler");
        $__internal_a41c1cdb04efcc8d6fd1d4e5ab4deb126abed77ecea406a784d9b1af28c41935->enter($__internal_a41c1cdb04efcc8d6fd1d4e5ab4deb126abed77ecea406a784d9b1af28c41935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a41c1cdb04efcc8d6fd1d4e5ab4deb126abed77ecea406a784d9b1af28c41935->leave($__internal_a41c1cdb04efcc8d6fd1d4e5ab4deb126abed77ecea406a784d9b1af28c41935_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
