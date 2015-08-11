<?php

/* UsersUsersBundle:Registration:register_content.html.twig */
class __TwigTemplate_0b35acad4bae52951fbe8fc25d45244cc9f2a34016d7b7b76cb090ca5b347823 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'acceuil' => array($this, 'block_acceuil'),
            'nav' => array($this, 'block_nav'),
            'login' => array($this, 'block_login'),
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
        echo " inscription ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

";
        // line 7
        $this->displayBlock('acceuil', $context, $blocks);
        // line 8
        $this->displayBlock('nav', $context, $blocks);
        // line 9
        echo " ";
        $this->displayBlock('login', $context, $blocks);
        echo " 




";
    }

    // line 7
    public function block_acceuil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 8
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_login($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersUsersBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  74 => 8,  68 => 7,  57 => 9,  55 => 8,  53 => 7,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
