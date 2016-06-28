<?php

/* :envdetails:add.html.twig */
class __TwigTemplate_b0fd94b30ed60956d30a06784b8f64de2b7ac90fb2850c7f0f7c93081cf92f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":envdetails:add.html.twig", 1);
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
        $__internal_3059348d3fabf0b174c51722c4802dedb35aa83e55e024611d627998f390772e = $this->env->getExtension("native_profiler");
        $__internal_3059348d3fabf0b174c51722c4802dedb35aa83e55e024611d627998f390772e->enter($__internal_3059348d3fabf0b174c51722c4802dedb35aa83e55e024611d627998f390772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":envdetails:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3059348d3fabf0b174c51722c4802dedb35aa83e55e024611d627998f390772e->leave($__internal_3059348d3fabf0b174c51722c4802dedb35aa83e55e024611d627998f390772e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e782ad380c0336ed425b995a5a8f2feb2b778b432e90c818687eb563e07c28a8 = $this->env->getExtension("native_profiler");
        $__internal_e782ad380c0336ed425b995a5a8f2feb2b778b432e90c818687eb563e07c28a8->enter($__internal_e782ad380c0336ed425b995a5a8f2feb2b778b432e90c818687eb563e07c28a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servertype", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "environment", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "server", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
</div>
";
        
        $__internal_e782ad380c0336ed425b995a5a8f2feb2b778b432e90c818687eb563e07c28a8->leave($__internal_e782ad380c0336ed425b995a5a8f2feb2b778b432e90c818687eb563e07c28a8_prof);

    }

    public function getTemplateName()
    {
        return ":envdetails:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/*     {{ form_row(form.servertype) }}*/
/*     {{ form_row(form.description) }}*/
/*     {{ form_row(form.user) }}*/
/*     {{ form_row(form.environment) }}*/
/*     {{ form_row(form.server) }}*/
/*     {{ form_row(form.save) }}*/
/* */
/* {#    <button type="submit">create !</button> #}*/
/* {{ form_end(form) }}*/
/*     */
/* </div>*/
/* {%  endblock body %}*/
