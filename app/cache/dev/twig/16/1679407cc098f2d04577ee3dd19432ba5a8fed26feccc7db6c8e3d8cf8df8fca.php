<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_64be0298d39b66cd153f2052f4422122aa252915416009ffc11390f02700d9e6 extends Twig_Template
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
        $__internal_13db71ee7fceb41e286305a2110a6c8090c4d1f0352b3682b210d0d173980759 = $this->env->getExtension("native_profiler");
        $__internal_13db71ee7fceb41e286305a2110a6c8090c4d1f0352b3682b210d0d173980759->enter($__internal_13db71ee7fceb41e286305a2110a6c8090c4d1f0352b3682b210d0d173980759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_13db71ee7fceb41e286305a2110a6c8090c4d1f0352b3682b210d0d173980759->leave($__internal_13db71ee7fceb41e286305a2110a6c8090c4d1f0352b3682b210d0d173980759_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
