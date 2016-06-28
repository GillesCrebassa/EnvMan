<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fda1843bf6ceb558d4449620076cc2874e86dd59767387a76a079592b56b948c extends Twig_Template
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
        $__internal_beef80af71994df1620b6cc8f79df195c10f9ac13d3398cf046b836b25567710 = $this->env->getExtension("native_profiler");
        $__internal_beef80af71994df1620b6cc8f79df195c10f9ac13d3398cf046b836b25567710->enter($__internal_beef80af71994df1620b6cc8f79df195c10f9ac13d3398cf046b836b25567710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_beef80af71994df1620b6cc8f79df195c10f9ac13d3398cf046b836b25567710->leave($__internal_beef80af71994df1620b6cc8f79df195c10f9ac13d3398cf046b836b25567710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
