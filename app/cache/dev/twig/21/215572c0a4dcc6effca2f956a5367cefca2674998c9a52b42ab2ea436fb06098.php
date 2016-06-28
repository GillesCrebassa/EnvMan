<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_07e9987eca0627f4dc66faa5f2f88938edb7be5300d4d4d42d6daab82d6b6f93 extends Twig_Template
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
        $__internal_0e78c8b7ee5fe5284fc4e6b81cace023889703e2d2aa465122adb5e742f7b986 = $this->env->getExtension("native_profiler");
        $__internal_0e78c8b7ee5fe5284fc4e6b81cace023889703e2d2aa465122adb5e742f7b986->enter($__internal_0e78c8b7ee5fe5284fc4e6b81cace023889703e2d2aa465122adb5e742f7b986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0e78c8b7ee5fe5284fc4e6b81cace023889703e2d2aa465122adb5e742f7b986->leave($__internal_0e78c8b7ee5fe5284fc4e6b81cace023889703e2d2aa465122adb5e742f7b986_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
