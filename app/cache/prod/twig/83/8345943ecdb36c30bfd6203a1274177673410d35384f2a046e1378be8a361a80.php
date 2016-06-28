<?php

/* layout.html.twig */
class __TwigTemplate_9a4a692c3b5e4d3fa96ed6e8423963b662c751d4daa610f2400dab6162ea1826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'footer' => array($this, 'block_footer'),
            'header_javascripts' => array($this, 'block_header_javascripts'),
            'footer_javascripts' => array($this, 'block_footer_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "  <nav id=\"navbar-main\">
      <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon icon-shield\" style=\"font-size:30px; color:#3498db;\"></span>
          </button>
          <a class=\"navbar-brand hidden-xs hidden-sm\" href=\"#home\"><span class=\"icon icon-shield\" style=\"font-size:18px; color:#3498db;\"></span></a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/\" class=\"smoothScroll\">Home</a></li>
            <li> <a href=\"/environment\" class=\"smoothScroll\"> Environments</a></li>
            <li> <a href=\"/server\" class=\"smoothScroll\"> Servers</a></li>
            <li> <a href=\"/product\" class=\"smoothScroll\"> Products</a></li>
            <li> <a href=\"#contact\" class=\"smoothScroll\"> Contact</a></li>
            <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Dropdown Link 1</a></li>
                    <li><a href=\"#\">Dropdown Link 2</a></li>
                </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
             <li><a href=\"\">Connexion: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
        echo "</a></li>
             <li><a href=\"\">Déconnexion </a></li>
          </ul>
         </div>
        </div>
        </div>
    </nav>
<br>
<br>
<br>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 41
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 42
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "    <footer class=\"navbar navbar-inverse navbar-fixed-bottom\">
        <div class=\"container\">
            <div class=\"row centered\">
                    Created by <a href=\"https://be.linkedin.com/in/crebassagilles\" target=\"_blank\">Crebassa Gilles</a> - Copyright 2016
            </div>
        </div>
    </footer><!-- end footer -->
";
    }

    // line 58
    public function block_header_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>            
";
    }

    // line 62
    public function block_footer_javascripts($context, array $blocks = array())
    {
        echo "   
\t<script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/retina.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-func.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\$(document).ready (function(){
\$(\".alert\").delay(4000).slideUp(200, function() {
    \$(this).alert('close');
});
});            
        </script>
";
    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/animate-custom.css"), "html", null, true);
        echo "\">


    
<!--    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
-->
            
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 84,  184 => 83,  180 => 82,  174 => 79,  168 => 77,  155 => 67,  151 => 66,  147 => 65,  143 => 64,  139 => 63,  134 => 62,  128 => 60,  123 => 59,  120 => 58,  109 => 50,  106 => 49,  98 => 45,  89 => 42,  84 => 41,  79 => 40,  75 => 39,  62 => 29,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block navbar %}*/
/*   <nav id="navbar-main">*/
/*       <!-- Fixed navbar -->*/
/*     <div class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>*/
/*           </button>*/
/*           <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href="/" class="smoothScroll">Home</a></li>*/
/*             <li> <a href="/environment" class="smoothScroll"> Environments</a></li>*/
/*             <li> <a href="/server" class="smoothScroll"> Servers</a></li>*/
/*             <li> <a href="/product" class="smoothScroll"> Products</a></li>*/
/*             <li> <a href="#contact" class="smoothScroll"> Contact</a></li>*/
/*             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="#">Dropdown Link 1</a></li>*/
/*                     <li><a href="#">Dropdown Link 2</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*           </ul>*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*              <li><a href="">Connexion: {{ app.user }}</a></li>*/
/*              <li><a href="">Déconnexion </a></li>*/
/*           </ul>*/
/*          </div>*/
/*         </div>*/
/*         </div>*/
/*     </nav>*/
/* <br>*/
/* <br>*/
/* <br>*/
/*     {% for label, flashes in app.session.flashbag.all %}*/
/*         {% for flash in flashes %}*/
/*             <div class="alert alert-{{ label }}">*/
/*                 {{ flash }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/*     */
/*     */
/* {% block footer %}*/
/*     <footer class="navbar navbar-inverse navbar-fixed-bottom">*/
/*         <div class="container">*/
/*             <div class="row centered">*/
/*                     Created by <a href="https://be.linkedin.com/in/crebassagilles" target="_blank">Crebassa Gilles</a> - Copyright 2016*/
/*             </div>*/
/*         </div>*/
/*     </footer><!-- end footer -->*/
/* {% endblock %}*/
/* {% block header_javascripts %}*/
/*     <script src="{{ asset('assets/js/jquery.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js')}}"></script>            */
/* {% endblock %}*/
/* {% block footer_javascripts %}   */
/* 	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('assets/js/retina.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/js/smoothscroll.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('assets/js/jquery-func.js')}}"></script>*/
/*         <script type="text/javascript">*/
/* $(document).ready (function(){*/
/* $(".alert").delay(4000).slideUp(200, function() {*/
/*     $(this).alert('close');*/
/* });*/
/* });            */
/*         </script>*/
/* {% endblock %}*/
/*         */
/* {% block stylesheets %} */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/animate-custom.css')}}">*/
/* */
/* */
/*     */
/* <!--    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>*/
/* -->*/
/*             */
/* {% endblock %}*/
/*             */
