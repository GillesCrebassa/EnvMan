<?php

/* :product:list.html.twig */
class __TwigTemplate_87891788ff0527ad33eafbdc1b223fc3eb46b0129570c9bb2a35e04139a03b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":product:list.html.twig", 1);
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
        $__internal_4d8fe3d43491a462dedc86b2798f8a6fcb96d22517539c28d1c246e5b9294191 = $this->env->getExtension("native_profiler");
        $__internal_4d8fe3d43491a462dedc86b2798f8a6fcb96d22517539c28d1c246e5b9294191->enter($__internal_4d8fe3d43491a462dedc86b2798f8a6fcb96d22517539c28d1c246e5b9294191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8fe3d43491a462dedc86b2798f8a6fcb96d22517539c28d1c246e5b9294191->leave($__internal_4d8fe3d43491a462dedc86b2798f8a6fcb96d22517539c28d1c246e5b9294191_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a4643991a006d7fc2cc69b5435a0c25392465414f4efbf5000164cfa1fb22e = $this->env->getExtension("native_profiler");
        $__internal_b5a4643991a006d7fc2cc69b5435a0c25392465414f4efbf5000164cfa1fb22e->enter($__internal_b5a4643991a006d7fc2cc69b5435a0c25392465414f4efbf5000164cfa1fb22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Products Summary";
        
        $__internal_b5a4643991a006d7fc2cc69b5435a0c25392465414f4efbf5000164cfa1fb22e->leave($__internal_b5a4643991a006d7fc2cc69b5435a0c25392465414f4efbf5000164cfa1fb22e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4740137fcfa49ff9a22cd2d767d425b1b64680906f5e1fe7ac9061414a5b0939 = $this->env->getExtension("native_profiler");
        $__internal_4740137fcfa49ff9a22cd2d767d425b1b64680906f5e1fe7ac9061414a5b0939->enter($__internal_4740137fcfa49ff9a22cd2d767d425b1b64680906f5e1fe7ac9061414a5b0939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <br>
    <br>
    <div class=\"row\">
        <div class=\"col-xs-8 col-md-8 col-lg-8 centered\">
            <table class=\"table table-bordered\">
              <caption>
                <strong>Product List</strong></em>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            if ($context["product"]) {
                // line 24
                echo "                     <tr>
                         <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</td>
                         <td>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-edit glyphicon-align-left\"></span><a href=\"/product/edit/";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\">Edit</a></button>
                         </td>
                     </tr>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      
              </tbody>
       </table>
    </div><!-- end col-lg-8 -->
  </div><!-- end row -->
</div><!-- end container -->
";
        
        $__internal_4740137fcfa49ff9a22cd2d767d425b1b64680906f5e1fe7ac9061414a5b0939->leave($__internal_4740137fcfa49ff9a22cd2d767d425b1b64680906f5e1fe7ac9061414a5b0939_prof);

    }

    public function getTemplateName()
    {
        return ":product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  89 => 28,  84 => 26,  80 => 25,  77 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}Products Summary{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <br>*/
/*     <br>*/
/*     <div class="row">*/
/*         <div class="col-xs-8 col-md-8 col-lg-8 centered">*/
/*             <table class="table table-bordered">*/
/*               <caption>*/
/*                 <strong>Product List</strong></em>*/
/*               </caption>*/
/*              <thead>*/
/*                 <tr>*/
/*                   <th>Name</th>*/
/*                   <th>Description</th>*/
/*                   <th>Action</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>             */
/*         {% for product in products if product %}*/
/*                      <tr>*/
/*                          <td>{{ product.name }}</td>*/
/*                          <td>{{ product.description }}</td>*/
/*                          <td>*/
/*                              <button type="button" class="btn btn-default"/><span class="glyphicon glyphicon-edit glyphicon-align-left"></span><a href="/product/edit/{{ product.id }}">Edit</a></button>*/
/*                          </td>*/
/*                      </tr>*/
/*         {% endfor %}      */
/*               </tbody>*/
/*        </table>*/
/*     </div><!-- end col-lg-8 -->*/
/*   </div><!-- end row -->*/
/* </div><!-- end container -->*/
/* {%  endblock body %}*/
