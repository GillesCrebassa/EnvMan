<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8365049b7004dd107a70b01ddb6cdbc512961fe8997f1d55c01606d934fba80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8525aacd52c995ce9a1b4e913a7b4b16a8fa6dc8f21014acaa87e78b74effc8c = $this->env->getExtension("native_profiler");
        $__internal_8525aacd52c995ce9a1b4e913a7b4b16a8fa6dc8f21014acaa87e78b74effc8c->enter($__internal_8525aacd52c995ce9a1b4e913a7b4b16a8fa6dc8f21014acaa87e78b74effc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8525aacd52c995ce9a1b4e913a7b4b16a8fa6dc8f21014acaa87e78b74effc8c->leave($__internal_8525aacd52c995ce9a1b4e913a7b4b16a8fa6dc8f21014acaa87e78b74effc8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4962027b869066addecf1decfa6e2c009be146a1f75195602961566a3da712e = $this->env->getExtension("native_profiler");
        $__internal_e4962027b869066addecf1decfa6e2c009be146a1f75195602961566a3da712e->enter($__internal_e4962027b869066addecf1decfa6e2c009be146a1f75195602961566a3da712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e4962027b869066addecf1decfa6e2c009be146a1f75195602961566a3da712e->leave($__internal_e4962027b869066addecf1decfa6e2c009be146a1f75195602961566a3da712e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d55e692c655324f303a917829d8620f8c4062888eacc4a3450868f083453878b = $this->env->getExtension("native_profiler");
        $__internal_d55e692c655324f303a917829d8620f8c4062888eacc4a3450868f083453878b->enter($__internal_d55e692c655324f303a917829d8620f8c4062888eacc4a3450868f083453878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d55e692c655324f303a917829d8620f8c4062888eacc4a3450868f083453878b->leave($__internal_d55e692c655324f303a917829d8620f8c4062888eacc4a3450868f083453878b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f400702c8fd0529662c1af29cdc8df432490830302d03713c49675f552253f1f = $this->env->getExtension("native_profiler");
        $__internal_f400702c8fd0529662c1af29cdc8df432490830302d03713c49675f552253f1f->enter($__internal_f400702c8fd0529662c1af29cdc8df432490830302d03713c49675f552253f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f400702c8fd0529662c1af29cdc8df432490830302d03713c49675f552253f1f->leave($__internal_f400702c8fd0529662c1af29cdc8df432490830302d03713c49675f552253f1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
