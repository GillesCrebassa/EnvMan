<?php

/* :envdetails:list.html.twig */
class __TwigTemplate_d8affef745873a2c11d4124307bc59152c402622292ebacee3093ee485b69f7d extends Twig_Template
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
        $__internal_4e83557cbfd03027643b55e808d1d50d0b86d53a9a497428d83b776c6681aa2a = $this->env->getExtension("native_profiler");
        $__internal_4e83557cbfd03027643b55e808d1d50d0b86d53a9a497428d83b776c6681aa2a->enter($__internal_4e83557cbfd03027643b55e808d1d50d0b86d53a9a497428d83b776c6681aa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":envdetails:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e83557cbfd03027643b55e808d1d50d0b86d53a9a497428d83b776c6681aa2a->leave($__internal_4e83557cbfd03027643b55e808d1d50d0b86d53a9a497428d83b776c6681aa2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_322c6e9df7762deaecc64f407a4183d9d2048fb221d7a6d6257d4d9e49ff7f7d = $this->env->getExtension("native_profiler");
        $__internal_322c6e9df7762deaecc64f407a4183d9d2048fb221d7a6d6257d4d9e49ff7f7d->enter($__internal_322c6e9df7762deaecc64f407a4183d9d2048fb221d7a6d6257d4d9e49ff7f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Environment Details Summary";
        
        $__internal_322c6e9df7762deaecc64f407a4183d9d2048fb221d7a6d6257d4d9e49ff7f7d->leave($__internal_322c6e9df7762deaecc64f407a4183d9d2048fb221d7a6d6257d4d9e49ff7f7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_823853b4f4eea4c22062d3e2063618c7049ecc9f6390e9e54ba7cd22dc8dc453 = $this->env->getExtension("native_profiler");
        $__internal_823853b4f4eea4c22062d3e2063618c7049ecc9f6390e9e54ba7cd22dc8dc453->enter($__internal_823853b4f4eea4c22062d3e2063618c7049ecc9f6390e9e54ba7cd22dc8dc453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "name", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["envdetails"]) ? $context["envdetails"] : $this->getContext($context, "envdetails")));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "id", array()), "html", null, true);
                echo "\">View</a></button>
                             <button type=\"button\" class=\"btn btn-default\"/><span class=\"glyphicon glyphicon-search glyphicon-align-left\"></span><a href=\"/envdetails/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "id", array()), "html", null, true);
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
        
        $__internal_823853b4f4eea4c22062d3e2063618c7049ecc9f6390e9e54ba7cd22dc8dc453->leave($__internal_823853b4f4eea4c22062d3e2063618c7049ecc9f6390e9e54ba7cd22dc8dc453_prof);

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
        return array (  118 => 37,  106 => 33,  102 => 32,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  82 => 26,  77 => 25,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
