<?php

/* UsersUsersBundle:Acceuil:Index.html.twig */
class __TwigTemplate_fd7daf0f6dac25e321f0dc8d2b5f0640fd876f786964df0c274f87ed990ce725 extends Twig_Template
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
            'resseting' => array($this, 'block_resseting'),
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

    // line 9
    public function block_resseting($context, array $blocks = array())
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
        return array (  70 => 9,  65 => 8,  59 => 7,  53 => 6,  47 => 5,  41 => 4,  11 => 2,);
    }
}
