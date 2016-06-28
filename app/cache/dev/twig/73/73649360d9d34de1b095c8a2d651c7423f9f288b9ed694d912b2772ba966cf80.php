<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3311e1c3d39b578a454a69c172d9d11c54f8dc65333e18332bdf14c51fa02b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_079691b392ce1618c340db8cf3db42df282c4765f013662e8c489cf3c34972a8 = $this->env->getExtension("native_profiler");
        $__internal_079691b392ce1618c340db8cf3db42df282c4765f013662e8c489cf3c34972a8->enter($__internal_079691b392ce1618c340db8cf3db42df282c4765f013662e8c489cf3c34972a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_079691b392ce1618c340db8cf3db42df282c4765f013662e8c489cf3c34972a8->leave($__internal_079691b392ce1618c340db8cf3db42df282c4765f013662e8c489cf3c34972a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf6b9ef5fc738c9c640224b87049ab124ac44b81af193538666f78a8a87a9793 = $this->env->getExtension("native_profiler");
        $__internal_cf6b9ef5fc738c9c640224b87049ab124ac44b81af193538666f78a8a87a9793->enter($__internal_cf6b9ef5fc738c9c640224b87049ab124ac44b81af193538666f78a8a87a9793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf6b9ef5fc738c9c640224b87049ab124ac44b81af193538666f78a8a87a9793->leave($__internal_cf6b9ef5fc738c9c640224b87049ab124ac44b81af193538666f78a8a87a9793_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
