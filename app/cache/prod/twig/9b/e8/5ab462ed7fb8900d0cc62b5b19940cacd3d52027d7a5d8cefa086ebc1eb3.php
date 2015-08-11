<?php

/* UsersUsersBundle:Security:login.html.twig */
class __TwigTemplate_9be85ab462ed7fb8900d0cc62b5b19940cacd3d52027d7a5d8cefa086ebc1eb3 extends Twig_Template
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

    // line 7
    public function block_inscription($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersUsersBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  58 => 5,  52 => 4,  46 => 3,  40 => 2,  11 => 1,);
    }
}
