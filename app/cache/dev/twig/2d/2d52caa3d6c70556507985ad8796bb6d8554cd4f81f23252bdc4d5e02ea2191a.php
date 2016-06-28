<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f6ce867357cbbde611134463d81e1f92923b0dda94f48f233adb74df807c04e1 extends Twig_Template
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
        $__internal_a17546bb8334aef6cb69b37c922b008de2e12e98c2712f1809f87fc3b0a94793 = $this->env->getExtension("native_profiler");
        $__internal_a17546bb8334aef6cb69b37c922b008de2e12e98c2712f1809f87fc3b0a94793->enter($__internal_a17546bb8334aef6cb69b37c922b008de2e12e98c2712f1809f87fc3b0a94793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a17546bb8334aef6cb69b37c922b008de2e12e98c2712f1809f87fc3b0a94793->leave($__internal_a17546bb8334aef6cb69b37c922b008de2e12e98c2712f1809f87fc3b0a94793_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
