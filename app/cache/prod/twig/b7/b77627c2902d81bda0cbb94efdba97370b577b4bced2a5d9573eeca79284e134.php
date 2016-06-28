<?php

/* :product:list.html.twig */
class __TwigTemplate_e59a056a8f0c81bf058dad1ccb744c10b9b84f1508237dca6546e5e7231ff8aa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Products Summary";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
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
        return array (  85 => 31,  74 => 28,  69 => 26,  65 => 25,  62 => 24,  57 => 23,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
