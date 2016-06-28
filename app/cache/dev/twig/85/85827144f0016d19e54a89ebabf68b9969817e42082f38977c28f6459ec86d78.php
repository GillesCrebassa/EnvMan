<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f38355b2ec6c1411a937683b14e96a46b489fdc9e354926a9fd3a20a52949009 extends Twig_Template
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
        $__internal_30a0fb6097d5d736184e12345a8e1b70b2d42d1585efbc241b9a11162b0ab63d = $this->env->getExtension("native_profiler");
        $__internal_30a0fb6097d5d736184e12345a8e1b70b2d42d1585efbc241b9a11162b0ab63d->enter($__internal_30a0fb6097d5d736184e12345a8e1b70b2d42d1585efbc241b9a11162b0ab63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_30a0fb6097d5d736184e12345a8e1b70b2d42d1585efbc241b9a11162b0ab63d->leave($__internal_30a0fb6097d5d736184e12345a8e1b70b2d42d1585efbc241b9a11162b0ab63d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
