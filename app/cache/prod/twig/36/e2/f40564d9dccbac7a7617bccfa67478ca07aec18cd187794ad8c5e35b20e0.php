<?php

/* ::base.html.twig */
class __TwigTemplate_36e2f40564d9dccbac7a7617bccfa67478ca07aec18cd187794ad8c5e35b20e0 extends Twig_Template
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
        echo "    
";
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
        return array (  153 => 27,  148 => 26,  142 => 24,  134 => 23,  126 => 22,  119 => 21,  114 => 16,  109 => 7,  101 => 30,  97 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  78 => 22,  76 => 21,  70 => 18,  67 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  40 => 9,  35 => 7,  27 => 1,);
    }
}
