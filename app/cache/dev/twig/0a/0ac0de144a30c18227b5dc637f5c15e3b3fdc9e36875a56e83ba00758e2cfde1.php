<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3850c3454f5b5de0ce1439a4a94f1e3b7e2f32f7e5ece153881e13fd99046f8d extends Twig_Template
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
        $__internal_89b225bb74ada9b3615c9b14a3a150f5ff9d78f1a683d288925e8100082eb26b = $this->env->getExtension("native_profiler");
        $__internal_89b225bb74ada9b3615c9b14a3a150f5ff9d78f1a683d288925e8100082eb26b->enter($__internal_89b225bb74ada9b3615c9b14a3a150f5ff9d78f1a683d288925e8100082eb26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_89b225bb74ada9b3615c9b14a3a150f5ff9d78f1a683d288925e8100082eb26b->leave($__internal_89b225bb74ada9b3615c9b14a3a150f5ff9d78f1a683d288925e8100082eb26b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
