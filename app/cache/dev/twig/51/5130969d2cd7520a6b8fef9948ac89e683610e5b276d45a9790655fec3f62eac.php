<?php

/* :default:index.html.twig */
class __TwigTemplate_0118f057983d2d8629032b47000e649c7317074217042ebb65097e7fe90709d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a597bc67df73ef8f8b19932c50b60f54c7c4823688635c2f480f2c209cd5c0 = $this->env->getExtension("native_profiler");
        $__internal_b1a597bc67df73ef8f8b19932c50b60f54c7c4823688635c2f480f2c209cd5c0->enter($__internal_b1a597bc67df73ef8f8b19932c50b60f54c7c4823688635c2f480f2c209cd5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a597bc67df73ef8f8b19932c50b60f54c7c4823688635c2f480f2c209cd5c0->leave($__internal_b1a597bc67df73ef8f8b19932c50b60f54c7c4823688635c2f480f2c209cd5c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_def2da31291ed0940001f425629b8e716523f8cde1a9b8f568d5cf9ff6ca2b6a = $this->env->getExtension("native_profiler");
        $__internal_def2da31291ed0940001f425629b8e716523f8cde1a9b8f568d5cf9ff6ca2b6a->enter($__internal_def2da31291ed0940001f425629b8e716523f8cde1a9b8f568d5cf9ff6ca2b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home!";
        
        $__internal_def2da31291ed0940001f425629b8e716523f8cde1a9b8f568d5cf9ff6ca2b6a->leave($__internal_def2da31291ed0940001f425629b8e716523f8cde1a9b8f568d5cf9ff6ca2b6a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_237251ebe223197881c5daad6fb360da3781639f9f39eb515b0911c694fa8868 = $this->env->getExtension("native_profiler");
        $__internal_237251ebe223197881c5daad6fb360da3781639f9f39eb515b0911c694fa8868->enter($__internal_237251ebe223197881c5daad6fb360da3781639f9f39eb515b0911c694fa8868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony ";
        // line 8
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"status\">
                <p>

                    Your application is ready to start working on it at:
                    <code>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "/</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>

                    Read Symfony documentation to learn
                    <a href=\"http://symfony.com/doc/";
        // line 24
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), 0, 3), "html", null, true);
        echo "/book/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_237251ebe223197881c5daad6fb360da3781639f9f39eb515b0911c694fa8868->leave($__internal_237251ebe223197881c5daad6fb360da3781639f9f39eb515b0911c694fa8868_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  68 => 15,  58 => 8,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}Home!{% endblock %}*/
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION') }}</h1>*/
/*             </div>*/
/* */
/*             <div id="status">*/
/*                 <p>*/
/* */
/*                     Your application is ready to start working on it at:*/
/*                     <code>{{ base_dir }}/</code>*/
/*                 </p>*/
/*             </div>*/
/* */
/*             <div id="next">*/
/*                 <h2>What's next?</h2>*/
/*                 <p>*/
/* */
/*                     Read Symfony documentation to learn*/
/*                     <a href="http://symfony.com/doc/{{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION')[:3] }}/book/page_creation.html">*/
/*                         How to create your first page in Symfony*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
