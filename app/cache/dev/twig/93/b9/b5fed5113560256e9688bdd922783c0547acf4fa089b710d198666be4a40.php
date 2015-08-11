<?php

/* mailBundle::MailT.html.twig */
class __TwigTemplate_93b9b5fed5113560256e9688bdd922783c0547acf4fa089b710d198666be4a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenent' => array($this, 'block_contenent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE HTML>
<html>
\t<head>
\t<title>Medical Website Template | Home :: W3layouts</title>
  
\t\t<link  rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/style.css"), "html", null, true);
        echo " />
\t\t<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/responsiveslides.css"), "html", null, true);
        echo ">
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
\t\t<script src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/js/responsiveslides.min.js"), "html", null, true);
        echo "></script>
\t\t  <script>
\t\t    // You can also use \"\$(window).load(function() {\"
\t\t\t    \$(function () {
\t\t\t
\t\t\t      // Slideshow 1
\t\t\t      \$(\"#slider1\").responsiveSlides({
\t\t\t        maxwidth: 1600,
\t\t\t        speed: 600
\t\t\t      });
\t\t\t});
\t\t  </script>
\t</head>
\t<body>
\t\t<!---start-wrap--->
\t\t<div class=\"wrap\">
\t\t\t<!---start-header--->
\t\t\t<div class=\"header\">
\t\t\t\t<!---start-logo--->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/logo.png"), "html", null, true);
        echo " /></a>
\t\t\t\t</div>
\t\t\t\t<!---start-logo--->
\t\t\t\t<!---start-top-nav--->
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li ><a href=";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo ">Home</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=";
        // line 38
        echo $this->env->getExtension('routing')->getPath("patient");
        echo ">Patients</a></li>
\t\t\t\t\t\t<li ><a href=";
        // line 39
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo ">Dossier Médicaux</a></li>
\t\t\t\t\t\t<li><a href=";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fichepatient_new");
        echo ">Fiches Médicaux</a></li>
                                                <li><a href=";
        // line 41
        echo $this->env->getExtension('routing')->getPath("rendezvous");
        echo ">Rendez-Vous</a></li>
                                                <li><a href=";
        // line 42
        echo $this->env->getExtension('routing')->getPath("rdvdisponible");
        echo ">Votre calendrier</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
                                               
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t<!---End-top-nav--->
                                 <br />
                                <div class=\"project-top-patination\">
                                
\t\t\t\t<ul>
                                   <li><a href=";
        // line 52
        echo $this->env->getExtension('routing')->getPath("patient");
        echo ">Liste des patients</a></li>
\t\t\t\t<li><a href=";
        // line 53
        echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
        echo ">Contacter un patient</a></li>
\t\t\t\t</ul>
\t\t\t</div><br />
\t\t\t</div>
\t\t</div>
                                                
\t\t\t<!---End-header--->
\t\t\t<!--start-image-slider---->
                         ";
        // line 61
        $this->displayBlock('contenent', $context, $blocks);
        // line 73
        echo "\t\t\t\t\t<!--End-image-slider---->
\t\t<!---start-content---->
\t\t<div class=\"wrap\">
\t\t<div class=\"content\">
\t\t\t
\t\t
\t\t\t<div class=\"clear\"> </div>
                     
\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"footer-left\">
\t\t\t\t\t<a href=\"index.html\"><img src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/logo1.png"), "html", null, true);
        echo " title=\"logo\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-right\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<!---End-content---->
\t\t</div>
\t\t<!---start-wrap--->
\t</body>
</html>

";
    }

    // line 61
    public function block_contenent($context, array $blocks = array())
    {
        // line 62
        echo "    
\t\t\t\t\t<div class=\"image-slider\">
\t\t\t\t\t\t<!-- Slideshow 1 -->
\t\t\t\t\t    <ul class=\"rslides\" id=\"slider1\">
\t\t\t\t\t      <li><img src=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/slider3.jpg"), "html", null, true);
        echo " alt=\"\"></li>
\t\t\t\t\t      <li><img src=";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/slider2.jpg"), "html", null, true);
        echo " alt=\"\"></li>
\t\t\t\t\t      <li><img src=";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/images/slider1.jpg"), "html", null, true);
        echo " alt=\"\"></li>
\t\t\t\t\t    </ul>
\t\t\t\t\t\t <!-- Slideshow 2 -->
\t\t\t\t\t</div>
                          ";
    }

    public function getTemplateName()
    {
        return "mailBundle::MailT.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 68,  164 => 67,  160 => 66,  154 => 62,  151 => 61,  132 => 83,  120 => 73,  118 => 61,  107 => 53,  103 => 52,  90 => 42,  86 => 41,  82 => 40,  78 => 39,  74 => 38,  70 => 37,  61 => 31,  38 => 11,  33 => 9,  28 => 7,  20 => 1,);
    }
}
