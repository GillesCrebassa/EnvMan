<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_244e455775ea1d1e09178f72d772fcb4311ce80436b75b218405c516f36be602 extends Twig_Template
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
        $__internal_593c06e6fb62eddd30a857c794e1bbdddcc679fc04749ea40a82e5f6a470892f = $this->env->getExtension("native_profiler");
        $__internal_593c06e6fb62eddd30a857c794e1bbdddcc679fc04749ea40a82e5f6a470892f->enter($__internal_593c06e6fb62eddd30a857c794e1bbdddcc679fc04749ea40a82e5f6a470892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_593c06e6fb62eddd30a857c794e1bbdddcc679fc04749ea40a82e5f6a470892f->leave($__internal_593c06e6fb62eddd30a857c794e1bbdddcc679fc04749ea40a82e5f6a470892f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
