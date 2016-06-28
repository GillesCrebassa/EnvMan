<?php

/* :product:edit.html.twig */
class __TwigTemplate_edf55b8235d217d0dfc98e86ca4fc7fa7f63fe7f8f35748bf75e562234a3a8d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":product:edit.html.twig", 1);
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
        $__internal_25199e7e2de96131dfe9203ef527aeda694824d2baecca0b7b625dad7ec1c6e0 = $this->env->getExtension("native_profiler");
        $__internal_25199e7e2de96131dfe9203ef527aeda694824d2baecca0b7b625dad7ec1c6e0->enter($__internal_25199e7e2de96131dfe9203ef527aeda694824d2baecca0b7b625dad7ec1c6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25199e7e2de96131dfe9203ef527aeda694824d2baecca0b7b625dad7ec1c6e0->leave($__internal_25199e7e2de96131dfe9203ef527aeda694824d2baecca0b7b625dad7ec1c6e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a00330c6e24df5e00fd7bde791fca8c12df465a10a0a3766360a3b8274a4e9a = $this->env->getExtension("native_profiler");
        $__internal_0a00330c6e24df5e00fd7bde791fca8c12df465a10a0a3766360a3b8274a4e9a->enter($__internal_0a00330c6e24df5e00fd7bde791fca8c12df465a10a0a3766360a3b8274a4e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <button type=\"submit\">Update!</button>
    <button type=\"reset\">Cancel!</button>
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_0a00330c6e24df5e00fd7bde791fca8c12df465a10a0a3766360a3b8274a4e9a->leave($__internal_0a00330c6e24df5e00fd7bde791fca8c12df465a10a0a3766360a3b8274a4e9a_prof);

    }

    public function getTemplateName()
    {
        return ":product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <button type="submit">Update!</button>*/
/*     <button type="reset">Cancel!</button>*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
