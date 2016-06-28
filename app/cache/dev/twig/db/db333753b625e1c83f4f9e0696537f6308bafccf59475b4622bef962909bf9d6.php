<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b60fb54ce50e94100218a10118f6cf69684635d553855709058493539fc76b5d extends Twig_Template
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
        $__internal_e87eab1244dbc34744644e745c60f32a158c85a9bb2f093c0817cec66e37f564 = $this->env->getExtension("native_profiler");
        $__internal_e87eab1244dbc34744644e745c60f32a158c85a9bb2f093c0817cec66e37f564->enter($__internal_e87eab1244dbc34744644e745c60f32a158c85a9bb2f093c0817cec66e37f564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e87eab1244dbc34744644e745c60f32a158c85a9bb2f093c0817cec66e37f564->leave($__internal_e87eab1244dbc34744644e745c60f32a158c85a9bb2f093c0817cec66e37f564_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
