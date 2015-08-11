<?php

/* FactureBundle::layoutadmin.html.twig */
class __TwigTemplate_9ba6df86896b9cd16af64b2217328eac30e199c480f276eb144ed2e06602aeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
                   
                        ";
        // line 39
        if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == null)) {
            // line 40
            echo "                     
                        <li>    
                            <a id=\"loginlink\" href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("facture_homepage");
            echo "\"> Login</a>
                        </li>  


                    ";
        } else {
            // line 47
            echo "                       
                        <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("medicalist");
            echo "\">Gestion Medicament</a></li>
                        <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("logoutadmin");
            echo "\" id=\"contactlink\">logout</a></li>";
        }
        // line 50
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                <li><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                <li><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
    ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    <script>

        var uri = window.location.pathname;

        if (uri == \"/GestionHopital/web/app_dev.php/admin\")
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

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FactureBundle::layoutadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  175 => 22,  170 => 5,  141 => 66,  139 => 65,  132 => 61,  128 => 60,  124 => 59,  113 => 50,  109 => 49,  105 => 48,  102 => 47,  94 => 42,  90 => 40,  88 => 39,  78 => 32,  65 => 23,  63 => 22,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
