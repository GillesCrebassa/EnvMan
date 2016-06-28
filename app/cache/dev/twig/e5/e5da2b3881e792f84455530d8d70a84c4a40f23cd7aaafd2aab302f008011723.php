<?php

/* :server:add.html.twig */
class __TwigTemplate_31b4f4e07e0a33afabfed8530759f6ecc2282566fc09296e9daa69c98bded3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":server:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_987f549627f832eb62574271a4c612e77e3f8be230fa04df254435ade38f68a6 = $this->env->getExtension("native_profiler");
        $__internal_987f549627f832eb62574271a4c612e77e3f8be230fa04df254435ade38f68a6->enter($__internal_987f549627f832eb62574271a4c612e77e3f8be230fa04df254435ade38f68a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":server:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987f549627f832eb62574271a4c612e77e3f8be230fa04df254435ade38f68a6->leave($__internal_987f549627f832eb62574271a4c612e77e3f8be230fa04df254435ade38f68a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12bf3d87cdbd10d764a3a0b6f7c128c0cf30bc0e8b7fc219550a5864d2eca688 = $this->env->getExtension("native_profiler");
        $__internal_12bf3d87cdbd10d764a3a0b6f7c128c0cf30bc0e8b7fc219550a5864d2eca688->enter($__internal_12bf3d87cdbd10d764a3a0b6f7c128c0cf30bc0e8b7fc219550a5864d2eca688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"container\">
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ip", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "os", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active", array()), 'row');
        echo "

    <button type=\"submit\">create !</button>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_12bf3d87cdbd10d764a3a0b6f7c128c0cf30bc0e8b7fc219550a5864d2eca688->leave($__internal_12bf3d87cdbd10d764a3a0b6f7c128c0cf30bc0e8b7fc219550a5864d2eca688_prof);

    }

    public function getTemplateName()
    {
        return ":server:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/*     {{ form_row(form.name) }}*/
/*     {{ form_row(form.ip) }}*/
/*     {{ form_row(form.os) }}*/
/*     {{ form_row(form.active) }}*/
/* */
/*     <button type="submit">create !</button>*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
