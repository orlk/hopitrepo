<?php

/* ::base.html.twig */
class __TwigTemplate_7f25fcdf9572a2a35ae66ea8eec9acdd0887a58d436c611878c262475040e9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'acceuil' => array($this, 'block_acceuil'),
            'nav' => array($this, 'block_nav'),
            'login' => array($this, 'block_login'),
            'inscription' => array($this, 'block_inscription'),
            'resseting' => array($this, 'block_resseting'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " -hopital</title>
        <meta name=\"viewport\" content=\"width-device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\"/>
        <script href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsiveslides.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscription.css"), "html", null, true);
        echo "\"/>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 21
        $this->displayBlock('acceuil', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 23
        echo "    ";
        $this->displayBlock('login', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('inscription', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('resseting', $context, $blocks);
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "<script src=\"//code.jquery.com/jquery.min.js\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inscription.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_acceuil($context, array $blocks = array())
    {
        $this->env->loadTemplate("::acceuil.html.twig")->display($context);
        echo " ";
    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::nav.html.twig")->display($context);
        echo " ";
    }

    // line 23
    public function block_login($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::login.html.twig")->display($context);
        echo " ";
    }

    // line 24
    public function block_inscription($context, array $blocks = array())
    {
        $this->env->loadTemplate("::register_content.html.twig")->display($context);
    }

    // line 25
    public function block_resseting($context, array $blocks = array())
    {
        $this->env->loadTemplate("::ressetting_pass.html.twig")->display($context);
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 27,  155 => 26,  149 => 25,  143 => 24,  135 => 23,  127 => 22,  120 => 21,  115 => 16,  110 => 7,  102 => 30,  98 => 29,  95 => 28,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  77 => 21,  71 => 18,  68 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  41 => 9,  36 => 7,  28 => 1,);
    }
}
