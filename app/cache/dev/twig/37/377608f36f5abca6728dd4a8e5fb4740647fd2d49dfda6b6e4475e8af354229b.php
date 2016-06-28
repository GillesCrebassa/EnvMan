<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bf5658a069262c4ffd1cfa34c7d076300e3010eb985beb6174f062b8fb7bc54c extends Twig_Template
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
        $__internal_e3ff8046e4739718cc6c3d722d13158f4f2f45e7e3b7ad2041562126ea6a768b = $this->env->getExtension("native_profiler");
        $__internal_e3ff8046e4739718cc6c3d722d13158f4f2f45e7e3b7ad2041562126ea6a768b->enter($__internal_e3ff8046e4739718cc6c3d722d13158f4f2f45e7e3b7ad2041562126ea6a768b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e3ff8046e4739718cc6c3d722d13158f4f2f45e7e3b7ad2041562126ea6a768b->leave($__internal_e3ff8046e4739718cc6c3d722d13158f4f2f45e7e3b7ad2041562126ea6a768b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
