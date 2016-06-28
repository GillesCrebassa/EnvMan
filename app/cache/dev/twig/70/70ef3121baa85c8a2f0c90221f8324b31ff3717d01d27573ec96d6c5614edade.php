<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc1fcef9e5c921826ca088e692730bcfa72e988c5a7388e4dae3ffd77ee9bab0 extends Twig_Template
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
        $__internal_ed4e4d320b50110bcf08f28ca6ffaae1c1915e76f71195a01f7549b4beb83c10 = $this->env->getExtension("native_profiler");
        $__internal_ed4e4d320b50110bcf08f28ca6ffaae1c1915e76f71195a01f7549b4beb83c10->enter($__internal_ed4e4d320b50110bcf08f28ca6ffaae1c1915e76f71195a01f7549b4beb83c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed4e4d320b50110bcf08f28ca6ffaae1c1915e76f71195a01f7549b4beb83c10->leave($__internal_ed4e4d320b50110bcf08f28ca6ffaae1c1915e76f71195a01f7549b4beb83c10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
