<?php

/* base.html.twig */
class __TwigTemplate_d8fd08962f7f4bcedca52b4e2f78a6f74f20e75bd59b5c1693a7e000bab98b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_javascripts' => array($this, 'block_header_javascripts'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'footer_javascripts' => array($this, 'block_footer_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c857afb2066abfdb21851c3533d2a3a885f77d73778ba22c4ff0da3372dd88d3 = $this->env->getExtension("native_profiler");
        $__internal_c857afb2066abfdb21851c3533d2a3a885f77d73778ba22c4ff0da3372dd88d3->enter($__internal_c857afb2066abfdb21851c3533d2a3a885f77d73778ba22c4ff0da3372dd88d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('header_javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head><!-- end head -->
    <body>
        ";
        // line 18
        $this->displayBlock('navbar', $context, $blocks);
        echo "            
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('footer_javascripts', $context, $blocks);
        // line 23
        echo "    </body><!-- end body -->
</html>";
        
        $__internal_c857afb2066abfdb21851c3533d2a3a885f77d73778ba22c4ff0da3372dd88d3->leave($__internal_c857afb2066abfdb21851c3533d2a3a885f77d73778ba22c4ff0da3372dd88d3_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_401aad916a964dc15306f006c91dea8d16f46eb27680bcbabe68366ec6e1705b = $this->env->getExtension("native_profiler");
        $__internal_401aad916a964dc15306f006c91dea8d16f46eb27680bcbabe68366ec6e1705b->enter($__internal_401aad916a964dc15306f006c91dea8d16f46eb27680bcbabe68366ec6e1705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=\"description\" content=\"SHIELD - Free Bootstrap 3 Theme\">
            <meta name=\"author\" content=\"Crebassa Gilles\">
            <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ico/favicon.png"), "html", null, true);
        echo "\">            
        ";
        
        $__internal_401aad916a964dc15306f006c91dea8d16f46eb27680bcbabe68366ec6e1705b->leave($__internal_401aad916a964dc15306f006c91dea8d16f46eb27680bcbabe68366ec6e1705b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a58054d22d09916311b952257d7411600f0c6a05c58ccb3d281011a6f0dd06a5 = $this->env->getExtension("native_profiler");
        $__internal_a58054d22d09916311b952257d7411600f0c6a05c58ccb3d281011a6f0dd06a5->enter($__internal_a58054d22d09916311b952257d7411600f0c6a05c58ccb3d281011a6f0dd06a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a58054d22d09916311b952257d7411600f0c6a05c58ccb3d281011a6f0dd06a5->leave($__internal_a58054d22d09916311b952257d7411600f0c6a05c58ccb3d281011a6f0dd06a5_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f51c51f1093992854f88055358ef45c4d170d2bb537301cc451ae79659ae3a0a = $this->env->getExtension("native_profiler");
        $__internal_f51c51f1093992854f88055358ef45c4d170d2bb537301cc451ae79659ae3a0a->enter($__internal_f51c51f1093992854f88055358ef45c4d170d2bb537301cc451ae79659ae3a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f51c51f1093992854f88055358ef45c4d170d2bb537301cc451ae79659ae3a0a->leave($__internal_f51c51f1093992854f88055358ef45c4d170d2bb537301cc451ae79659ae3a0a_prof);

    }

    // line 14
    public function block_header_javascripts($context, array $blocks = array())
    {
        $__internal_1bd64a03b489fc5540b9c97b8b0c68340b9d2bc098a1211b0c5db08f9404a1e4 = $this->env->getExtension("native_profiler");
        $__internal_1bd64a03b489fc5540b9c97b8b0c68340b9d2bc098a1211b0c5db08f9404a1e4->enter($__internal_1bd64a03b489fc5540b9c97b8b0c68340b9d2bc098a1211b0c5db08f9404a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_javascripts"));

        
        $__internal_1bd64a03b489fc5540b9c97b8b0c68340b9d2bc098a1211b0c5db08f9404a1e4->leave($__internal_1bd64a03b489fc5540b9c97b8b0c68340b9d2bc098a1211b0c5db08f9404a1e4_prof);

    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_03e955e7724339af929061399a7580214f8c7b40052ab7d596c520e31931a63a = $this->env->getExtension("native_profiler");
        $__internal_03e955e7724339af929061399a7580214f8c7b40052ab7d596c520e31931a63a->enter($__internal_03e955e7724339af929061399a7580214f8c7b40052ab7d596c520e31931a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_03e955e7724339af929061399a7580214f8c7b40052ab7d596c520e31931a63a->leave($__internal_03e955e7724339af929061399a7580214f8c7b40052ab7d596c520e31931a63a_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f19b3c21c0c25139bc9470e8b31aa785459e5f039fe3e6fc458290f5a0b17989 = $this->env->getExtension("native_profiler");
        $__internal_f19b3c21c0c25139bc9470e8b31aa785459e5f039fe3e6fc458290f5a0b17989->enter($__internal_f19b3c21c0c25139bc9470e8b31aa785459e5f039fe3e6fc458290f5a0b17989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f19b3c21c0c25139bc9470e8b31aa785459e5f039fe3e6fc458290f5a0b17989->leave($__internal_f19b3c21c0c25139bc9470e8b31aa785459e5f039fe3e6fc458290f5a0b17989_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aff9fb5f90ad62fade25a77fcb9b570e202698be4888ab43e85d29043c1ba627 = $this->env->getExtension("native_profiler");
        $__internal_aff9fb5f90ad62fade25a77fcb9b570e202698be4888ab43e85d29043c1ba627->enter($__internal_aff9fb5f90ad62fade25a77fcb9b570e202698be4888ab43e85d29043c1ba627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_aff9fb5f90ad62fade25a77fcb9b570e202698be4888ab43e85d29043c1ba627->leave($__internal_aff9fb5f90ad62fade25a77fcb9b570e202698be4888ab43e85d29043c1ba627_prof);

    }

    // line 22
    public function block_footer_javascripts($context, array $blocks = array())
    {
        $__internal_2100b935d6eeb3d8f41db8d3951f7f1ef05dffd0ebb0b1bd0d389b87aa63fb47 = $this->env->getExtension("native_profiler");
        $__internal_2100b935d6eeb3d8f41db8d3951f7f1ef05dffd0ebb0b1bd0d389b87aa63fb47->enter($__internal_2100b935d6eeb3d8f41db8d3951f7f1ef05dffd0ebb0b1bd0d389b87aa63fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_javascripts"));

        
        $__internal_2100b935d6eeb3d8f41db8d3951f7f1ef05dffd0ebb0b1bd0d389b87aa63fb47->leave($__internal_2100b935d6eeb3d8f41db8d3951f7f1ef05dffd0ebb0b1bd0d389b87aa63fb47_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 22,  154 => 21,  143 => 19,  132 => 18,  121 => 14,  110 => 13,  98 => 12,  89 => 10,  82 => 5,  76 => 4,  68 => 23,  65 => 22,  63 => 21,  60 => 20,  58 => 19,  54 => 18,  47 => 15,  44 => 14,  42 => 13,  37 => 12,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block meta %}*/
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*             <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">*/
/*             <meta name="author" content="Crebassa Gilles">*/
/*             <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">            */
/*         {% endblock %}*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         {% block header_javascripts %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head><!-- end head -->*/
/*     <body>*/
/*         {% block navbar %}{% endblock %}            */
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block footer %}{% endblock %}*/
/*         {% block footer_javascripts %}{% endblock %}*/
/*     </body><!-- end body -->*/
/* </html>*/
