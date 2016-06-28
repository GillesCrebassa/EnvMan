<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1ba5299baee4fdfd54d9a940e723b77fc469e943f74cddbd4bc61db4c56f3370 extends Twig_Template
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
        $__internal_4157b97dbec075b758c82296d364fe10242724dacc4ad3cbddfcd5d40eff8964 = $this->env->getExtension("native_profiler");
        $__internal_4157b97dbec075b758c82296d364fe10242724dacc4ad3cbddfcd5d40eff8964->enter($__internal_4157b97dbec075b758c82296d364fe10242724dacc4ad3cbddfcd5d40eff8964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4157b97dbec075b758c82296d364fe10242724dacc4ad3cbddfcd5d40eff8964->leave($__internal_4157b97dbec075b758c82296d364fe10242724dacc4ad3cbddfcd5d40eff8964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
