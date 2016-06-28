<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cb52f89d56db9afee42ab0b0488c0953f32a5650099d9500038e7e2c48d873b7 extends Twig_Template
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
        $__internal_335a0027038a21c85584cf5f002dea591909c9742f657015ae842c918788bd62 = $this->env->getExtension("native_profiler");
        $__internal_335a0027038a21c85584cf5f002dea591909c9742f657015ae842c918788bd62->enter($__internal_335a0027038a21c85584cf5f002dea591909c9742f657015ae842c918788bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_335a0027038a21c85584cf5f002dea591909c9742f657015ae842c918788bd62->leave($__internal_335a0027038a21c85584cf5f002dea591909c9742f657015ae842c918788bd62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
