<?php

/* ::layout.html_orig.twig */
class __TwigTemplate_80faace142cae52a2e3d230d728b976f0c88bc286644ea3c41cdde0bff8e9961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html_orig.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96ffb555e2262bb58db4331a63f08f54a68dbcdbe5e30ef006493ac5355b050 = $this->env->getExtension("native_profiler");
        $__internal_d96ffb555e2262bb58db4331a63f08f54a68dbcdbe5e30ef006493ac5355b050->enter($__internal_d96ffb555e2262bb58db4331a63f08f54a68dbcdbe5e30ef006493ac5355b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html_orig.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96ffb555e2262bb58db4331a63f08f54a68dbcdbe5e30ef006493ac5355b050->leave($__internal_d96ffb555e2262bb58db4331a63f08f54a68dbcdbe5e30ef006493ac5355b050_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_13203e7b528242772cc5e7ee95ef2b19ab6554aebae214a28f10150eaa2ceb03 = $this->env->getExtension("native_profiler");
        $__internal_13203e7b528242772cc5e7ee95ef2b19ab6554aebae214a28f10150eaa2ceb03->enter($__internal_13203e7b528242772cc5e7ee95ef2b19ab6554aebae214a28f10150eaa2ceb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Articles<span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"dropdown\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("supquote_quote_quote_add");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Ajouter un article<span class=\"caret\"></span></a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 28
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion </a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <h2 align=\"center\">SUPQUOTE - PHP SYMFONY2</h2>
    <br>
";
        
        $__internal_13203e7b528242772cc5e7ee95ef2b19ab6554aebae214a28f10150eaa2ceb03->leave($__internal_13203e7b528242772cc5e7ee95ef2b19ab6554aebae214a28f10150eaa2ceb03_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html_orig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  76 => 29,  71 => 28,  63 => 22,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block navbar %}*/
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ path('home') }}">Accueil</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Articles<span class="sr-only">(current)</span></a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="{{ path('supquote_quote_quote_add') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ajouter un article<span class="caret"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     {#Liens de connexion et de déconnexion#}*/
/*                     <li><a href="{{ path('fos_user_registration_register') }}">S'inscrire</a></li>*/
/*                     <li><a href="{{ path("fos_user_security_login") }}">Connexion: {{ app.user }}</a></li>*/
/*                     <li><a href="{{ path("fos_user_security_logout") }}">Déconnexion </a></li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/*     <h2 align="center">SUPQUOTE - PHP SYMFONY2</h2>*/
/*     <br>*/
/* {% endblock %}*/
