<?php

/* base.html.twig */
class __TwigTemplate_5a197965d185e8e12a65429db63b2c6160f056f7821280c46051a5a289fc3384 extends Twig_Template
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
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_header_javascripts($context, array $blocks = array())
    {
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 22
    public function block_footer_javascripts($context, array $blocks = array())
    {
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
        return array (  117 => 22,  112 => 21,  107 => 19,  102 => 18,  97 => 14,  92 => 13,  86 => 12,  80 => 10,  73 => 5,  70 => 4,  65 => 23,  62 => 22,  60 => 21,  57 => 20,  55 => 19,  51 => 18,  44 => 15,  41 => 14,  39 => 13,  34 => 12,  32 => 4,  27 => 1,);
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
