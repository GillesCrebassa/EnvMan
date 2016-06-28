<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43b020cec8f622242eb254129c37e2152da33d3f252bf83ffb647ea26e179494 extends Twig_Template
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
        $__internal_434dab79ffd7596c3726d904aff52571c04a150b8e256aa26a0b17460a80bcb2 = $this->env->getExtension("native_profiler");
        $__internal_434dab79ffd7596c3726d904aff52571c04a150b8e256aa26a0b17460a80bcb2->enter($__internal_434dab79ffd7596c3726d904aff52571c04a150b8e256aa26a0b17460a80bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_434dab79ffd7596c3726d904aff52571c04a150b8e256aa26a0b17460a80bcb2->leave($__internal_434dab79ffd7596c3726d904aff52571c04a150b8e256aa26a0b17460a80bcb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
