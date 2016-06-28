<?php

/* :server:list.html.twig */
class __TwigTemplate_7fc180ba2d8c496acd81de8ebee921fa84c3af2bd640e03b3cd3ffe37dec74fe extends Twig_Template
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
        $__internal_d7a413cfd3e7a0dd6c680914a179004127b105df65e1adf9e2955abc0fd098d4 = $this->env->getExtension("native_profiler");
        $__internal_d7a413cfd3e7a0dd6c680914a179004127b105df65e1adf9e2955abc0fd098d4->enter($__internal_d7a413cfd3e7a0dd6c680914a179004127b105df65e1adf9e2955abc0fd098d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":server:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a413cfd3e7a0dd6c680914a179004127b105df65e1adf9e2955abc0fd098d4->leave($__internal_d7a413cfd3e7a0dd6c680914a179004127b105df65e1adf9e2955abc0fd098d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f6a41ae7b7678ec0dcdbe92d2791613d72b6483072c2205943eafe655c76047 = $this->env->getExtension("native_profiler");
        $__internal_2f6a41ae7b7678ec0dcdbe92d2791613d72b6483072c2205943eafe655c76047->enter($__internal_2f6a41ae7b7678ec0dcdbe92d2791613d72b6483072c2205943eafe655c76047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Servers Summary";
        
        $__internal_2f6a41ae7b7678ec0dcdbe92d2791613d72b6483072c2205943eafe655c76047->leave($__internal_2f6a41ae7b7678ec0dcdbe92d2791613d72b6483072c2205943eafe655c76047_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5da53246d20ac9c7bf77bf58b07c717b553b548425a1f72371993e07d15cdca5 = $this->env->getExtension("native_profiler");
        $__internal_5da53246d20ac9c7bf77bf58b07c717b553b548425a1f72371993e07d15cdca5->enter($__internal_5da53246d20ac9c7bf77bf58b07c717b553b548425a1f72371993e07d15cdca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) ? $context["servers"] : $this->getContext($context, "servers")));
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
        
        $__internal_5da53246d20ac9c7bf77bf58b07c717b553b548425a1f72371993e07d15cdca5->leave($__internal_5da53246d20ac9c7bf77bf58b07c717b553b548425a1f72371993e07d15cdca5_prof);

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
        return array (  106 => 34,  98 => 32,  93 => 29,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
