<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8ce8dd2dbfbedf849fbbd1e7b04a86776ebe28ce5994c5f4fd37ad086b86adb2 extends Twig_Template
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
        $__internal_ca2b39c812fcd938f7407d0af2d594bab3b9bafcf06ef175ffdbe22c21ed268b = $this->env->getExtension("native_profiler");
        $__internal_ca2b39c812fcd938f7407d0af2d594bab3b9bafcf06ef175ffdbe22c21ed268b->enter($__internal_ca2b39c812fcd938f7407d0af2d594bab3b9bafcf06ef175ffdbe22c21ed268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ca2b39c812fcd938f7407d0af2d594bab3b9bafcf06ef175ffdbe22c21ed268b->leave($__internal_ca2b39c812fcd938f7407d0af2d594bab3b9bafcf06ef175ffdbe22c21ed268b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
