<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6ee59d9a015076856e11e6d888909799d90965e9a6cd5fa0513d71264b150abf extends Twig_Template
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
        $__internal_ed3eb4fdd21496a5532b5b7d2ffefc745d94cbd918a21856cf4b41dd43989622 = $this->env->getExtension("native_profiler");
        $__internal_ed3eb4fdd21496a5532b5b7d2ffefc745d94cbd918a21856cf4b41dd43989622->enter($__internal_ed3eb4fdd21496a5532b5b7d2ffefc745d94cbd918a21856cf4b41dd43989622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ed3eb4fdd21496a5532b5b7d2ffefc745d94cbd918a21856cf4b41dd43989622->leave($__internal_ed3eb4fdd21496a5532b5b7d2ffefc745d94cbd918a21856cf4b41dd43989622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
