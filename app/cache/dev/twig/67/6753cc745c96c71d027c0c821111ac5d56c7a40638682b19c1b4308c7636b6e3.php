<?php

/* layout.html.twig */
class __TwigTemplate_fb68ded7841b4a7a9faa10f2c2b4547603caeccd0a6218c3dda0ba5f2d507bef extends Twig_Template
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
        $__internal_219734f0784b5d944f0a0e77159d34de6430bf74972e9d5dfc8b4459dc862d69 = $this->env->getExtension("native_profiler");
        $__internal_219734f0784b5d944f0a0e77159d34de6430bf74972e9d5dfc8b4459dc862d69->enter($__internal_219734f0784b5d944f0a0e77159d34de6430bf74972e9d5dfc8b4459dc862d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219734f0784b5d944f0a0e77159d34de6430bf74972e9d5dfc8b4459dc862d69->leave($__internal_219734f0784b5d944f0a0e77159d34de6430bf74972e9d5dfc8b4459dc862d69_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a796032dce6e9698ade1bc5a70fdbca2c2698411ef1f4033c7b535d4dad9d71b = $this->env->getExtension("native_profiler");
        $__internal_a796032dce6e9698ade1bc5a70fdbca2c2698411ef1f4033c7b535d4dad9d71b->enter($__internal_a796032dce6e9698ade1bc5a70fdbca2c2698411ef1f4033c7b535d4dad9d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
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
        
        $__internal_a796032dce6e9698ade1bc5a70fdbca2c2698411ef1f4033c7b535d4dad9d71b->leave($__internal_a796032dce6e9698ade1bc5a70fdbca2c2698411ef1f4033c7b535d4dad9d71b_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f5dd4e844d33dc6eb235b6a5552429d567d10a52f40f41ac50061fc5ee20cb3d = $this->env->getExtension("native_profiler");
        $__internal_f5dd4e844d33dc6eb235b6a5552429d567d10a52f40f41ac50061fc5ee20cb3d->enter($__internal_f5dd4e844d33dc6eb235b6a5552429d567d10a52f40f41ac50061fc5ee20cb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "    <footer class=\"navbar navbar-inverse navbar-fixed-bottom\">
        <div class=\"container\">
            <div class=\"row centered\">
                    Created by <a href=\"https://be.linkedin.com/in/crebassagilles\" target=\"_blank\">Crebassa Gilles</a> - Copyright 2016
            </div>
        </div>
    </footer><!-- end footer -->
";
        
        $__internal_f5dd4e844d33dc6eb235b6a5552429d567d10a52f40f41ac50061fc5ee20cb3d->leave($__internal_f5dd4e844d33dc6eb235b6a5552429d567d10a52f40f41ac50061fc5ee20cb3d_prof);

    }

    // line 58
    public function block_header_javascripts($context, array $blocks = array())
    {
        $__internal_fb7640dcb3fa4c07f1165ece569aedbae37050560cdd89236af4996922fe177e = $this->env->getExtension("native_profiler");
        $__internal_fb7640dcb3fa4c07f1165ece569aedbae37050560cdd89236af4996922fe177e->enter($__internal_fb7640dcb3fa4c07f1165ece569aedbae37050560cdd89236af4996922fe177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_javascripts"));

        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>            
";
        
        $__internal_fb7640dcb3fa4c07f1165ece569aedbae37050560cdd89236af4996922fe177e->leave($__internal_fb7640dcb3fa4c07f1165ece569aedbae37050560cdd89236af4996922fe177e_prof);

    }

    // line 62
    public function block_footer_javascripts($context, array $blocks = array())
    {
        $__internal_92e23f4f06b4087cb2098fc9130142e3b6ed0bff486262bd1939ae1365699607 = $this->env->getExtension("native_profiler");
        $__internal_92e23f4f06b4087cb2098fc9130142e3b6ed0bff486262bd1939ae1365699607->enter($__internal_92e23f4f06b4087cb2098fc9130142e3b6ed0bff486262bd1939ae1365699607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_javascripts"));

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
        
        $__internal_92e23f4f06b4087cb2098fc9130142e3b6ed0bff486262bd1939ae1365699607->leave($__internal_92e23f4f06b4087cb2098fc9130142e3b6ed0bff486262bd1939ae1365699607_prof);

    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bdbc62ce87e01d972f6198ccc16c38113ad44a7f6088581bebbfb2ee74c78ee = $this->env->getExtension("native_profiler");
        $__internal_3bdbc62ce87e01d972f6198ccc16c38113ad44a7f6088581bebbfb2ee74c78ee->enter($__internal_3bdbc62ce87e01d972f6198ccc16c38113ad44a7f6088581bebbfb2ee74c78ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3bdbc62ce87e01d972f6198ccc16c38113ad44a7f6088581bebbfb2ee74c78ee->leave($__internal_3bdbc62ce87e01d972f6198ccc16c38113ad44a7f6088581bebbfb2ee74c78ee_prof);

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
        return array (  221 => 84,  217 => 83,  213 => 82,  207 => 79,  198 => 77,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  166 => 63,  158 => 62,  149 => 60,  144 => 59,  138 => 58,  124 => 50,  118 => 49,  107 => 45,  98 => 42,  93 => 41,  88 => 40,  84 => 39,  71 => 29,  44 => 4,  38 => 3,  11 => 1,);
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
