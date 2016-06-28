<?php

/* :server:update.html.twig */
class __TwigTemplate_97d0648d6911807ffb05b707b3582c8b62f5304755b3ffd639844f8a93905f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":server:update.html.twig", 1);
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
        $__internal_15bc6ca7c89a3ea355980626a153c3040c306e49abc65fcbfa3b8adfec7180ee = $this->env->getExtension("native_profiler");
        $__internal_15bc6ca7c89a3ea355980626a153c3040c306e49abc65fcbfa3b8adfec7180ee->enter($__internal_15bc6ca7c89a3ea355980626a153c3040c306e49abc65fcbfa3b8adfec7180ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":server:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15bc6ca7c89a3ea355980626a153c3040c306e49abc65fcbfa3b8adfec7180ee->leave($__internal_15bc6ca7c89a3ea355980626a153c3040c306e49abc65fcbfa3b8adfec7180ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb443477f334fd3bb7f897d0d22bff19bbb2d34cd80ff30d8c5b9cd6c222248d = $this->env->getExtension("native_profiler");
        $__internal_cb443477f334fd3bb7f897d0d22bff19bbb2d34cd80ff30d8c5b9cd6c222248d->enter($__internal_cb443477f334fd3bb7f897d0d22bff19bbb2d34cd80ff30d8c5b9cd6c222248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "

    <button type=\"submit\">Update!</button>
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_cb443477f334fd3bb7f897d0d22bff19bbb2d34cd80ff30d8c5b9cd6c222248d->leave($__internal_cb443477f334fd3bb7f897d0d22bff19bbb2d34cd80ff30d8c5b9cd6c222248d_prof);

    }

    public function getTemplateName()
    {
        return ":server:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/*     {{ form_row(form.name) }}*/
/*     {{ form_row(form.price) }}*/
/*     {{ form_row(form.description) }}*/
/* */
/*     <button type="submit">Update!</button>*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
