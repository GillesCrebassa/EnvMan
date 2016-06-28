<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6290105c695fc493320510b89d69093171e1cdefe6ad9582876019233b6c9798 extends Twig_Template
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
        $__internal_3163ee536e38e0979bdf69cf17d9fbea9a27d3ea7d5276456f2406113cfeb4a9 = $this->env->getExtension("native_profiler");
        $__internal_3163ee536e38e0979bdf69cf17d9fbea9a27d3ea7d5276456f2406113cfeb4a9->enter($__internal_3163ee536e38e0979bdf69cf17d9fbea9a27d3ea7d5276456f2406113cfeb4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3163ee536e38e0979bdf69cf17d9fbea9a27d3ea7d5276456f2406113cfeb4a9->leave($__internal_3163ee536e38e0979bdf69cf17d9fbea9a27d3ea7d5276456f2406113cfeb4a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
