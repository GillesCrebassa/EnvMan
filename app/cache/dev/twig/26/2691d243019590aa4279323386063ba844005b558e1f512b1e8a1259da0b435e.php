<?php

/* :environment:view.html.twig */
class __TwigTemplate_58de9af620ef80c01de0b4977b5049b7c911ead2c935ff823c4425d6f530e1c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":environment:view.html.twig", 1);
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
        $__internal_c1fa6da9c35dbbc23bbd7f5cea0ebe5ddd3fdf0af6af74ffa193e75bae9ce763 = $this->env->getExtension("native_profiler");
        $__internal_c1fa6da9c35dbbc23bbd7f5cea0ebe5ddd3fdf0af6af74ffa193e75bae9ce763->enter($__internal_c1fa6da9c35dbbc23bbd7f5cea0ebe5ddd3fdf0af6af74ffa193e75bae9ce763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":environment:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1fa6da9c35dbbc23bbd7f5cea0ebe5ddd3fdf0af6af74ffa193e75bae9ce763->leave($__internal_c1fa6da9c35dbbc23bbd7f5cea0ebe5ddd3fdf0af6af74ffa193e75bae9ce763_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62b0762ac7e8037ed252b877bc04501088fc72edde5e1f26745d0055a39ef7cc = $this->env->getExtension("native_profiler");
        $__internal_62b0762ac7e8037ed252b877bc04501088fc72edde5e1f26745d0055a39ef7cc->enter($__internal_62b0762ac7e8037ed252b877bc04501088fc72edde5e1f26745d0055a39ef7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <button type=\"submit\">back !</button>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_62b0762ac7e8037ed252b877bc04501088fc72edde5e1f26745d0055a39ef7cc->leave($__internal_62b0762ac7e8037ed252b877bc04501088fc72edde5e1f26745d0055a39ef7cc_prof);

    }

    public function getTemplateName()
    {
        return ":environment:view.html.twig";
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
/*     <button type="submit">back !</button>*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
