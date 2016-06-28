<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_edfd27780d239175e414bcfcba85fe9c277dd5d0174ac7da1f6631251396cf07 extends Twig_Template
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
        $__internal_98d0ed528a4557ad246b014a34b10bc2746215e2458b1601e6de8732c9162df1 = $this->env->getExtension("native_profiler");
        $__internal_98d0ed528a4557ad246b014a34b10bc2746215e2458b1601e6de8732c9162df1->enter($__internal_98d0ed528a4557ad246b014a34b10bc2746215e2458b1601e6de8732c9162df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_98d0ed528a4557ad246b014a34b10bc2746215e2458b1601e6de8732c9162df1->leave($__internal_98d0ed528a4557ad246b014a34b10bc2746215e2458b1601e6de8732c9162df1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
