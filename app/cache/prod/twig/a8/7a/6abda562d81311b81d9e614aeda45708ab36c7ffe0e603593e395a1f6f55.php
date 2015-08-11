<?php

/* ::acceuil.html.twig */
class __TwigTemplate_a87a6abda562d81311b81d9e614aeda45708ab36c7ffe0e603593e395a1f6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head >
        <title></title>

        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>

        <script>
            \$('#myCarousel').carousel({
                interval: 5000
            });

            \$('#carousel-text').html(\$('#slide-content-0').html());

// When the carousel slides, auto update the text
            \$('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = \$('.item.active').data('slide-number');
                \$('#carousel-text').html(\$('#slide-content-' + id).html());
            });</script>




    </head>
    <body>
        <!---start-wrap--->
        <div class=\"wrap\">
            <!---start-header--->
            <div class=\"header\">
                <!---start-logo--->
                <div class=\"logo\">
                    <a href=\"index.html\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <!---start-logo--->
                <!---start-top-nav--->
                <div class=\"top-nav\">
                    <ul>
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"staff.html\">Staff</a></li>
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"clear\"> </div>
                <!---End-top-nav--->
            </div>
        </div>
        <!---End-header--->
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        ...
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        ...
                    </div>
                </div>
                ...
                <div class=\"item\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        ...
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>

        <!---start-content---->
        <div class=\"wrap\">
            <div class=\"content\">
                <div class=\"content-slogan\">
                    <p>Lorem ipsum dolor sit amet, <a href=\"#\">consectetur</a> adipisicing elit. sed  incididunt ut <a href=\"#\">labore</a> et dolore magna aliqua. Ut enim ad <a href=\"#\">minim veniam.</a> </p>
                </div>
                <div class=\"slogan-sub\">
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
                <div class=\"clear\"> </div>
                <div class=\"grids\">
                    <div class=\"section group\">
                        <div class=\"grid_1_of_3 images_1_of_3\">
                            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/g1.png"), "html", null, true);
        echo "\">
                            <h3>our profile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class=\"button\"><span><a href=\"#\">Read More</a></span></div>
                        </div>
                        <div class=\"grid_1_of_3 images_1_of_3\">
                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/g2.png"), "html", null, true);
        echo "\">
                            <h3>Care advices</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class=\"button\"><span><a href=\"#\">Read More</a></span></div>
                        </div>
                        <div class=\"grid_1_of_3 images_1_of_3\">
                            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/g3.png"), "html", null, true);
        echo "\">
                            <h3>Emergency</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class=\"button\"><span><a href=\"#\">Read More</a></span></div>
                        </div>
                    </div>
                </div>
                <div  class=\"dc-grids\">
                    <div class=\"dc-para\">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit <a href=\"#\">voluptatem accusantium</a> doloremque laudantium, totam rem aperiam,</p>
                    </div>
                    <div class=\"dc-head\">
                        <div class=\"dc-head-img\">
                            <a href=\"#\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/dc1.jpg"), "html", null, true);
        echo "\" title=\"dc-name\" /></a>
                        </div>
                        <div class=\"dc-head-info\">
                            <h3>Perspiciatis</h3>
                            <span>totam rem aperiam</span>
                        </div>
                        <div class=\"clear\"> </div>
                        <div class=\"dc-profile\">
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href=\"#\">Read care study</a>
                        </div>
                    </div>
                    <div class=\"dc-head\">
                        <div class=\"dc-head-img\">
                            <a href=\"#\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/dc2.jpg"), "html", null, true);
        echo "\" title=\"dc-name\" /></a>
                        </div>
                        <div class=\"dc-head-info\">
                            <h3>Voluptate</h3>
                            <span>totam rem aperiam</span>
                        </div>
                        <div class=\"clear\"> </div>
                        <div class=\"dc-profile\">
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href=\"#\">Read care study</a>
                        </div>
                    </div>
                    <div class=\"dc-head\">
                        <div class=\"dc-head-img\">
                            <a href=\"#\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/dc3.jpg"), "html", null, true);
        echo "\" title=\"dc-name\" /></a>
                        </div>
                        <div class=\"dc-head-info\">
                            <h3>Architecto</h3>
                            <span>totam rem aperiam</span>
                        </div>
                        <div class=\"clear\"> </div>
                        <div class=\"dc-profile\">
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href=\"#\">Read care study</a>
                        </div>
                    </div>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"clear\"> </div>
                <div class=\"our-clients\">
                    <h3>Our-clients</h3>
                    
                   <!---End-content---->
                   <div class=\"container\">
 
  <div class=\"row\">
    <div class=\"col-xs-3\">
        <a href=\"#\" class=\"thumbnail\">
             <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c01.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        </a>
    </div>
     <div class=\"col-xs-3\">
        <a href=\"#\" class=\"thumbnail\">
             <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c02.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        </a>
    </div>
    <div class=\"col-xs-3\">
        <a href=\"#\" class=\"thumbnail\">
             <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c03.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        </a>
    </div>
    <div class=\"col-xs-3\">
        <a href=\"#\" class=\"thumbnail\">
             <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c05.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        </a>
    </div>
    <div class=\"col-xs-3\">
        <a href=\"#\" class=\"thumbnail\">
             <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c06.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        </a>
    </div>
  
      
                   
                    <!---End-content---->



                </div>
                <div class=\"clear\"> </div>
                <div class=\"footer\">
                    <div class=\"footer-left\">
                        <a href=\"index.html\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" title=\"logo\" /></a>
                    </div>
                    <div class=\"footer-right\">

                    </div>
                    <div class=\"clear\"> </div>
                </div>
            </div>
            <!---End-content---->
        </div>

        <!---start-wrap--->
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "::acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 218,  266 => 204,  258 => 199,  250 => 194,  242 => 189,  234 => 184,  207 => 160,  190 => 146,  173 => 132,  157 => 119,  148 => 113,  139 => 107,  104 => 75,  94 => 68,  85 => 62,  54 => 34,  19 => 1,);
    }
}
