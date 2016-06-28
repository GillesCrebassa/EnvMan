<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ece6e7127e85bd0cd9e1902990120bdc9ce295db5b25f23d35fcd43aa342fae7 extends Twig_Template
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
        $__internal_09bdea2ed0d597f2f55e3c576976e23f1ff2d493671692b8f1fc150ad48151f4 = $this->env->getExtension("native_profiler");
        $__internal_09bdea2ed0d597f2f55e3c576976e23f1ff2d493671692b8f1fc150ad48151f4->enter($__internal_09bdea2ed0d597f2f55e3c576976e23f1ff2d493671692b8f1fc150ad48151f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_09bdea2ed0d597f2f55e3c576976e23f1ff2d493671692b8f1fc150ad48151f4->leave($__internal_09bdea2ed0d597f2f55e3c576976e23f1ff2d493671692b8f1fc150ad48151f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
