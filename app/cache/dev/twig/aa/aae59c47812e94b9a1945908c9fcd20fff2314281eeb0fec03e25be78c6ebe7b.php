<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ebb589776665c9a657563749a68cef61ece810697c5e25948525ab4f13e1709f extends Twig_Template
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
        $__internal_03980e29beb7cbdd83751c8a35515dc2fb377b2f6b1f5e029bff2ad521202c12 = $this->env->getExtension("native_profiler");
        $__internal_03980e29beb7cbdd83751c8a35515dc2fb377b2f6b1f5e029bff2ad521202c12->enter($__internal_03980e29beb7cbdd83751c8a35515dc2fb377b2f6b1f5e029bff2ad521202c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_03980e29beb7cbdd83751c8a35515dc2fb377b2f6b1f5e029bff2ad521202c12->leave($__internal_03980e29beb7cbdd83751c8a35515dc2fb377b2f6b1f5e029bff2ad521202c12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
