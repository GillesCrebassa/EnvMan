<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_81c91913c01374bcfdddda93c882e0f4368ae5a9e3fd591af0d86196c66b268f extends Twig_Template
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
        $__internal_cc428f558fbdb6e6e9dc0ee518daca60022596a10e4b2ab6b9ede1b55b16c7b3 = $this->env->getExtension("native_profiler");
        $__internal_cc428f558fbdb6e6e9dc0ee518daca60022596a10e4b2ab6b9ede1b55b16c7b3->enter($__internal_cc428f558fbdb6e6e9dc0ee518daca60022596a10e4b2ab6b9ede1b55b16c7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cc428f558fbdb6e6e9dc0ee518daca60022596a10e4b2ab6b9ede1b55b16c7b3->leave($__internal_cc428f558fbdb6e6e9dc0ee518daca60022596a10e4b2ab6b9ede1b55b16c7b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
