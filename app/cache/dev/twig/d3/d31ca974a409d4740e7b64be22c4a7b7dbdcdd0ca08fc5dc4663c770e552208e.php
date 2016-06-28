<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_48bd63da96b6c029bcd58999dabb3ad0df679e5d2f077dc3fc08105644a0dc99 extends Twig_Template
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
        $__internal_481e15abe53a46d180113985386bd8769ac156ff5072e81953a1f41f7c406526 = $this->env->getExtension("native_profiler");
        $__internal_481e15abe53a46d180113985386bd8769ac156ff5072e81953a1f41f7c406526->enter($__internal_481e15abe53a46d180113985386bd8769ac156ff5072e81953a1f41f7c406526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_481e15abe53a46d180113985386bd8769ac156ff5072e81953a1f41f7c406526->leave($__internal_481e15abe53a46d180113985386bd8769ac156ff5072e81953a1f41f7c406526_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
