<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_95ee6f7f41860587b4959e9e3d412730363c6c8aa7c51631b4ef9d70d0d8e1cd extends Twig_Template
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
        $__internal_3248114899d2de2e2f032d2f5e71b76279bd9613f9ad47d301e7e522c56a8913 = $this->env->getExtension("native_profiler");
        $__internal_3248114899d2de2e2f032d2f5e71b76279bd9613f9ad47d301e7e522c56a8913->enter($__internal_3248114899d2de2e2f032d2f5e71b76279bd9613f9ad47d301e7e522c56a8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3248114899d2de2e2f032d2f5e71b76279bd9613f9ad47d301e7e522c56a8913->leave($__internal_3248114899d2de2e2f032d2f5e71b76279bd9613f9ad47d301e7e522c56a8913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
