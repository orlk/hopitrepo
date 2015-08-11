<?php

/* UsersUsersBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b97b1efa12bf2d737a151ba8579f34585933d637ce38d979172387d71a7a5241 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'acceuil' => array($this, 'block_acceuil'),
            'nav' => array($this, 'block_nav'),
            'login' => array($this, 'block_login'),
            'inscription' => array($this, 'block_inscription'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('acceuil', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 7
        $this->displayBlock('login', $context, $blocks);
        echo " 
";
        // line 8
        $this->displayBlock('inscription', $context, $blocks);
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    // line 5
    public function block_acceuil($context, array $blocks = array())
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
    }

    // line 8
    public function block_inscription($context, array $blocks = array())
    {
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>

    <div class=\"container\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("users_users_Acceuil");
        echo "\" style=\" width: 10%;position: relative;left: -1%;margin-top: 2%;\" class=\"btn btn btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Aceuil\" >Aceuil</a>
    </div>
    ";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 16
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 17
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 18
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "UsersUsersBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  102 => 17,  99 => 16,  97 => 15,  92 => 13,  85 => 10,  82 => 9,  77 => 8,  72 => 7,  66 => 6,  60 => 5,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  11 => 1,);
    }
}
