<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4710295d93ad5650e657d2f07febdad3c38294325d32ca3c210773bdeefd6b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef83f05547708bdc3f3df4677ca0142223de4b58bf31bf7614d5ff060c50ebf7 = $this->env->getExtension("native_profiler");
        $__internal_ef83f05547708bdc3f3df4677ca0142223de4b58bf31bf7614d5ff060c50ebf7->enter($__internal_ef83f05547708bdc3f3df4677ca0142223de4b58bf31bf7614d5ff060c50ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ef83f05547708bdc3f3df4677ca0142223de4b58bf31bf7614d5ff060c50ebf7->leave($__internal_ef83f05547708bdc3f3df4677ca0142223de4b58bf31bf7614d5ff060c50ebf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
