<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8ed29c10e4a3a594cd553e154d21c94f980d0951be8dee125aff4d3fdf045dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'acceuil' => array($this, 'block_acceuil'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'resseting' => array($this, 'block_resseting'),
            'inscription' => array($this, 'block_inscription'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Login ";
    }

    // line 3
    public function block_acceuil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block_resseting($context, array $blocks = array())
    {
    }

    // line 7
    public function block_inscription($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  65 => 6,  59 => 5,  53 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
