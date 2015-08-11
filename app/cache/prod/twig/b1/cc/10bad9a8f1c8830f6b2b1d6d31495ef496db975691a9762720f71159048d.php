<?php

/* UsersUsersBundle:Acceuil:Index.html.twig */
class __TwigTemplate_b1cc10bad9a8f1c8830f6b2b1d6d31495ef496db975691a9762720f71159048d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'login' => array($this, 'block_login'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Login ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_login($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_inscription($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersUsersBundle:Acceuil:Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  58 => 7,  52 => 6,  46 => 5,  40 => 4,  11 => 2,);
    }
}
