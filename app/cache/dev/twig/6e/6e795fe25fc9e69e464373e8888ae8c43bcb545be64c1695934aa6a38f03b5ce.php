<?php

/* :environment:list.html.twig */
class __TwigTemplate_d8750e932da34841525b7578b9fd532c57b76d68bd36745d036c00e195fa6b0a extends Twig_Template
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
        $__internal_58eefa8a1962225b9b000c1c124d496c2f887c8b0854655592ff068651af81a6 = $this->env->getExtension("native_profiler");
        $__internal_58eefa8a1962225b9b000c1c124d496c2f887c8b0854655592ff068651af81a6->enter($__internal_58eefa8a1962225b9b000c1c124d496c2f887c8b0854655592ff068651af81a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":environment:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58eefa8a1962225b9b000c1c124d496c2f887c8b0854655592ff068651af81a6->leave($__internal_58eefa8a1962225b9b000c1c124d496c2f887c8b0854655592ff068651af81a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d25e9d1045c5247ea6211cbc191eb171c2ce05b69042c0a8f827c3f7a9a2cd7 = $this->env->getExtension("native_profiler");
        $__internal_2d25e9d1045c5247ea6211cbc191eb171c2ce05b69042c0a8f827c3f7a9a2cd7->enter($__internal_2d25e9d1045c5247ea6211cbc191eb171c2ce05b69042c0a8f827c3f7a9a2cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Environments Summary";
        
        $__internal_2d25e9d1045c5247ea6211cbc191eb171c2ce05b69042c0a8f827c3f7a9a2cd7->leave($__internal_2d25e9d1045c5247ea6211cbc191eb171c2ce05b69042c0a8f827c3f7a9a2cd7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bff9214aae8db272a7788b339058472c7b425d92ed9508669148d8ec0ca485e = $this->env->getExtension("native_profiler");
        $__internal_0bff9214aae8db272a7788b339058472c7b425d92ed9508669148d8ec0ca485e->enter($__internal_0bff9214aae8db272a7788b339058472c7b425d92ed9508669148d8ec0ca485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["environments"]) ? $context["environments"] : $this->getContext($context, "environments")));
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
        
        $__internal_0bff9214aae8db272a7788b339058472c7b425d92ed9508669148d8ec0ca485e->leave($__internal_0bff9214aae8db272a7788b339058472c7b425d92ed9508669148d8ec0ca485e_prof);

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
        return array (  104 => 32,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  77 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
