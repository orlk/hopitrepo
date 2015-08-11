<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_950e82f9471d25acc721dd52bc301678afd2a9547d75d917a2c65dcf756be92e extends Twig_Template
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
            'resseting' => array($this, 'block_resseting'),
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
        // line 6
        $this->displayBlock('resseting', $context, $blocks);
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

    // line 6
    public function block_resseting($context, array $blocks = array())
    {
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  81 => 8,  75 => 7,  70 => 6,  59 => 9,  57 => 8,  55 => 7,  53 => 6,  50 => 5,  47 => 4,  41 => 2,  11 => 1,);
    }
}
