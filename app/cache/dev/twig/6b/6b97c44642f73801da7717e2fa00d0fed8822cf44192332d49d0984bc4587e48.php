<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9be4d987b6819142215160a71bf94ad7220d739bd5ada674b995c28b3298480c extends Twig_Template
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
        $__internal_d8def03788d1e798919d13f005b3162802cfefc6f2cdcd31fad61eb9df633f6e = $this->env->getExtension("native_profiler");
        $__internal_d8def03788d1e798919d13f005b3162802cfefc6f2cdcd31fad61eb9df633f6e->enter($__internal_d8def03788d1e798919d13f005b3162802cfefc6f2cdcd31fad61eb9df633f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d8def03788d1e798919d13f005b3162802cfefc6f2cdcd31fad61eb9df633f6e->leave($__internal_d8def03788d1e798919d13f005b3162802cfefc6f2cdcd31fad61eb9df633f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
