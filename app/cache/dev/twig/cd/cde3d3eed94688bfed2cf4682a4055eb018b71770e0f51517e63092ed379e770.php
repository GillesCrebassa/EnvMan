<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_eca611a75ccfc28ac4fdc8cef7ae4247e10519adedf7cde8a62952672d68e94f extends Twig_Template
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
        $__internal_dc513c3a3451fdeb97dcb9c7dff4d8bcde8676e831d90d58eb0d2177928b5e95 = $this->env->getExtension("native_profiler");
        $__internal_dc513c3a3451fdeb97dcb9c7dff4d8bcde8676e831d90d58eb0d2177928b5e95->enter($__internal_dc513c3a3451fdeb97dcb9c7dff4d8bcde8676e831d90d58eb0d2177928b5e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dc513c3a3451fdeb97dcb9c7dff4d8bcde8676e831d90d58eb0d2177928b5e95->leave($__internal_dc513c3a3451fdeb97dcb9c7dff4d8bcde8676e831d90d58eb0d2177928b5e95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
