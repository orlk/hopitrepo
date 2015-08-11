<?php

/* FactureBundle::layoutclient.html.twig */
class __TwigTemplate_a65b1740940fe88a9d8c4b96572656075a5442a2bf8d6776971e64e20455c478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title1' => array($this, 'block_title1'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets1' => array($this, 'block_stylesheets1'),
            'body' => array($this, 'block_body'),
            'body1' => array($this, 'block_body1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        $this->displayBlock('title1', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font/css.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsiveslides.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            // You can also use \"\$(window).load(function() {\"
            \$(function () {

                // Slideshow 1
                \$(\"#slider1\").responsiveSlides({
                    maxwidth: 1600,
                    speed: 600
                });
            });
        </script>
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "  ";
        $this->displayBlock('stylesheets1', $context, $blocks);
        // line 23
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

    <div class=\"wrap\">
        <!---start-header--->
        <div class=\"header\" id=\"header\">
            <!---start-logo--->
            <div class=\"logo\">
                <a href=\"\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" /></a>
            </div>
            <!---start-logo--->
            <!---start-top-nav--->
            <div class=\"top-nav\">
                <ul>
                    <li ><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("facture_homepage");
        echo "\">Home</a></li>
                        ";
        // line 39
        if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == null)) {
            // line 40
            echo "                        <li><a href=\"\">About</a></li>
                        <li><a href=\"\">Staff</a></li>
                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("Contact");
            echo "\" id=\"contactlink\">Contact</a></li>
                        <li>    
                            <a id=\"loginlink\" href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("facture_homepage");
            echo "\"> Login</a>
                        </li>  


                    ";
        } else {
            // line 49
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("facture_list");
            echo "\" id=\"facturelink\">Facture</a></li>
                        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("Dossier");
            echo "\" id=\"dossierlink\">Dossier Médicale</a></li>
                        <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("Contact");
            echo "\" id=\"contactlink\">Contact</a></li>

                        <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"contactlink\">logout</a></li>";
        }
        // line 54
        echo "                    </ul>
                </div>
                <div class=\"clear\"> </div>
                <!---End-top-nav--->
            </div>
        </div>
        <div class=\"image-slider\">
            <!-- Slideshow 1 -->
            <ul class=\"rslides\" id=\"slider1\">
                <li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                <li><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                <li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
    ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "     ";
        $this->displayBlock('body1', $context, $blocks);
        // line 71
        echo "
    <script>

        var uri = window.location.pathname;

        if (uri == \"/GestionHopital/web/app_dev.php/\")
        {

            \$(\"#loginlink\").click(function (e) {
                // Prevent a page reload when a link is pressed
                e.preventDefault();
                // Call the scroll function
                \$('html,body').animate({
                    scrollTop: \$(\"#loginform\").offset().top},
                'slow');
            });
        }
    </script>
    <script>
        

    </script>

</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    public function block_title1($context, array $blocks = array())
    {
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_stylesheets1($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FactureBundle::layoutclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  212 => 69,  203 => 22,  194 => 5,  165 => 71,  162 => 70,  160 => 69,  153 => 65,  149 => 64,  145 => 63,  134 => 54,  130 => 53,  125 => 51,  121 => 50,  116 => 49,  108 => 44,  103 => 42,  99 => 40,  97 => 39,  93 => 38,  84 => 32,  71 => 23,  67 => 22,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 5,  25 => 1,);
    }
}
