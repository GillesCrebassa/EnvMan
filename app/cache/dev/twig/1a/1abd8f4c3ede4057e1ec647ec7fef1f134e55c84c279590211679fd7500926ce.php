<?php

/* :environment:add.html.twig */
class __TwigTemplate_fcca9c0d17e42c86d4a05b1704a9dca45d2a16b925715f6e0adb00a8d9c1568d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":environment:add.html.twig", 1);
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
        $__internal_11a846580b552f05e4d26e93af65f82fe3d78b1b57403e0dd2df40b4da36d227 = $this->env->getExtension("native_profiler");
        $__internal_11a846580b552f05e4d26e93af65f82fe3d78b1b57403e0dd2df40b4da36d227->enter($__internal_11a846580b552f05e4d26e93af65f82fe3d78b1b57403e0dd2df40b4da36d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":environment:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a846580b552f05e4d26e93af65f82fe3d78b1b57403e0dd2df40b4da36d227->leave($__internal_11a846580b552f05e4d26e93af65f82fe3d78b1b57403e0dd2df40b4da36d227_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_931de24c69e27f4486a98ba3c9fa60ae4fd8c103afdfc06eb5833e943727e0d9 = $this->env->getExtension("native_profiler");
        $__internal_931de24c69e27f4486a98ba3c9fa60ae4fd8c103afdfc06eb5833e943727e0d9->enter($__internal_931de24c69e27f4486a98ba3c9fa60ae4fd8c103afdfc06eb5833e943727e0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "

    <button type=\"submit\">create !</button>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_931de24c69e27f4486a98ba3c9fa60ae4fd8c103afdfc06eb5833e943727e0d9->leave($__internal_931de24c69e27f4486a98ba3c9fa60ae4fd8c103afdfc06eb5833e943727e0d9_prof);

    }

    public function getTemplateName()
    {
        return ":environment:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/*     {{ form_row(form.name) }}*/
/*     {{ form_row(form.description) }}*/
/* */
/*     <button type="submit">create !</button>*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
