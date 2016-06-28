<?php

/* :default:index.html.twig */
class __TwigTemplate_7b4a37e292aa7580989bb395e906f54971e2d6495878fd45b22d1432a87702f4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home!";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : null), "html", null, true);
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
        return array (  65 => 24,  53 => 15,  43 => 8,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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
