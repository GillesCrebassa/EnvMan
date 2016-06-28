<?php

/* :environment:list.html.twig */
class __TwigTemplate_3fa8ef7907b8ada50b25365bb9bf7378226a598eb8cc1c4c4d2df283e0f810f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":environment:list.html.twig", 1);
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
        echo "Environments Summary";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <br>
    <br>
    <div class=\"row\">
        <div class=\"col-xs-8 col-md-8 col-lg-8 centered\">
            <table class=\"table table-bordered\">
              <caption>
                <strong>Environments List</strong></em>
              </caption>
             <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>             
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["environments"]) ? $context["environments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["environment"]) {
            if ($context["environment"]) {
                // line 24
                echo "                     <tr>
                         <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["environment"], "name", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["environment"], "description", array()), "html", null, true);
                echo "</td>
                         <td>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-list  glyphicon-align-left\"></span><a href=\"/environment/view/";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["environment"], "id", array()), "html", null, true);
                echo "\">View</a></button>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-search glyphicon-align-left\"></span><a href=\"/envdetails/";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["environment"], "id", array()), "html", null, true);
                echo "\">Details</a></button>
                         </td>
                     </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return ":environment:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  78 => 29,  74 => 28,  69 => 26,  65 => 25,  62 => 24,  57 => 23,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}Environments Summary{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <br>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="col-xs-8 col-md-8 col-lg-8 centered">*/
/*             <table class="table table-bordered">*/
/*               <caption>*/
/*                 <strong>Environments List</strong></em>*/
/*               </caption>*/
/*              <thead>*/
/*                 <tr>*/
/*                   <th>Name</th>*/
/*                   <th>Description</th>*/
/*                   <th>Action</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>             */
/*         {% for environment in environments if environment %}*/
/*                      <tr>*/
/*                          <td>{{ environment.name }}</td>*/
/*                          <td>{{ environment.description }}</td>*/
/*                          <td>*/
/*                              <button type="button" class="btn btn-default"/><span class="glyphicon glyphicon-list  glyphicon-align-left"></span><a href="/environment/view/{{ environment.id }}">View</a></button>*/
/*                              <button type="button" class="btn btn-default"/><span class="glyphicon glyphicon-search glyphicon-align-left"></span><a href="/envdetails/{{ environment.id }}">Details</a></button>*/
/*                          </td>*/
/*                      </tr>*/
/*         {% endfor %}      */
/*               </tbody>*/
/*        </table>*/
/*     </div><!-- end col-lg-8 -->*/
/*   </div><!-- end row -->*/
/* </div><!-- end container -->*/
/* {%  endblock body %}*/
