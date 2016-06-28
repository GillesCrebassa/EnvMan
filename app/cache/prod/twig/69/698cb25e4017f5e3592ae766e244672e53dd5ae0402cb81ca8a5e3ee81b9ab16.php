<?php

/* :server:list.html.twig */
class __TwigTemplate_be10a34bed84ed0b4aeb03e6deecb2e47d1ce2bd663d4cca1404257f6b784da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":server:list.html.twig", 1);
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
        echo "Servers Summary";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <br>
    <br>
    <div class=\"row\">
        <div class=\"col-lg-8 centered\">
            <table class=\"table table-bordered\">
              <caption>
                <strong>Servers List</strong></em>
              </caption>
             <thead>
                <tr>
                  <th>Name</th>
                  <th>OS</th>
                  <th>Active</th>
                </tr>
              </thead>
              <tbody>             
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) ? $context["servers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 24
            echo "                     <tr>
                         <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "name", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["server"], "os", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 27
            if ($this->getAttribute($context["server"], "active", array())) {
                echo " 
                             <span class=\"glyphicon glyphicon-ok\"></span>
                             ";
            } else {
                // line 29
                echo " 
                             <span class=\"glyphicon glyphicon-remove\"></span>
                             ";
            }
            // line 32
            echo "                         </td>
                     </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      
              </tbody>
       </table>
    </div><!-- end col-lg-8 -->
  </div><!-- end row -->
</div><!-- end container -->
";
    }

    public function getTemplateName()
    {
        return ":server:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  83 => 32,  78 => 29,  72 => 27,  68 => 26,  64 => 25,  61 => 24,  57 => 23,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}Servers Summary{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <br>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="col-lg-8 centered">*/
/*             <table class="table table-bordered">*/
/*               <caption>*/
/*                 <strong>Servers List</strong></em>*/
/*               </caption>*/
/*              <thead>*/
/*                 <tr>*/
/*                   <th>Name</th>*/
/*                   <th>OS</th>*/
/*                   <th>Active</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>             */
/*         {% for server in servers %}*/
/*                      <tr>*/
/*                          <td>{{ server.name }}</td>*/
/*                          <td>{{ server.os }}</td>*/
/*                          <td>{% if server.active %} */
/*                              <span class="glyphicon glyphicon-ok"></span>*/
/*                              {% else %} */
/*                              <span class="glyphicon glyphicon-remove"></span>*/
/*                              {% endif %}*/
/*                          </td>*/
/*                      </tr>*/
/*         {% endfor %}      */
/*               </tbody>*/
/*        </table>*/
/*     </div><!-- end col-lg-8 -->*/
/*   </div><!-- end row -->*/
/* </div><!-- end container -->*/
/* {%  endblock body %}*/
