<?php

/* :envdetails:list.html.twig */
class __TwigTemplate_af63c8f31c474dfa8b6fc73800e7d4bcc15b652bee19f231ca62fbbbabb100a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":envdetails:list.html.twig", 1);
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
        echo "Environment Details Summary";
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
                <strong>Environments Details List for ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "name", array()), "html", null, true);
        echo "</strong></em>
              </caption>
             <thead>
                <tr>
                  <th>Type</th>
                  <th>Description</th>
                  <th>Server Name</th>
                  <th>user</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>             
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["envdetails"]) ? $context["envdetails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["envdetails_row"]) {
            if ($context["envdetails_row"]) {
                // line 26
                echo "                     <tr>
                         <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["envdetails_row"], "servertype", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["envdetails_row"], "description", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["envdetails_row"], "server", array()), "name", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["envdetails_row"], "user", array()), "html", null, true);
                echo "</td>
                         <td>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-list  glyphicon-align-left\"></span><a href=\"/envdetails/view/";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "id", array()), "html", null, true);
                echo "\">View</a></button>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-search glyphicon-align-left\"></span><a href=\"/envdetails/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "id", array()), "html", null, true);
                echo "\">Details</a></button>
                         </td>
                         
                     </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['envdetails_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return ":envdetails:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  91 => 33,  87 => 32,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  67 => 26,  62 => 25,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}Environment Details Summary{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <br>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="col-lg-8 centered">*/
/*             <table class="table table-bordered">*/
/*               <caption>*/
/*                 <strong>Environments Details List for {{ environment.name }}</strong></em>*/
/*               </caption>*/
/*              <thead>*/
/*                 <tr>*/
/*                   <th>Type</th>*/
/*                   <th>Description</th>*/
/*                   <th>Server Name</th>*/
/*                   <th>user</th>*/
/*                   <th>action</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>             */
/*         {% for envdetails_row in envdetails if envdetails_row %}*/
/*                      <tr>*/
/*                          <td>{{ envdetails_row.servertype }}</td>*/
/*                          <td>{{ envdetails_row.description }}</td>*/
/*                          <td>{{ envdetails_row.server.name }}</td>*/
/*                          <td>{{ envdetails_row.user }}</td>*/
/*                          <td>*/
/*                              <button type="button" class="btn btn-default"/><span class="glyphicon glyphicon-list  glyphicon-align-left"></span><a href="/envdetails/view/{{ environment.id }}">View</a></button>*/
/*                              <button type="button" class="btn btn-default"/><span class="glyphicon glyphicon-search glyphicon-align-left"></span><a href="/envdetails/{{ environment.id }}">Details</a></button>*/
/*                          </td>*/
/*                          */
/*                      </tr>*/
/*         {% endfor %}      */
/*               </tbody>*/
/*        </table>*/
/*     </div><!-- end col-lg-8 -->*/
/*   </div><!-- end row -->*/
/* </div><!-- end container -->*/
/* {%  endblock body %}*/
