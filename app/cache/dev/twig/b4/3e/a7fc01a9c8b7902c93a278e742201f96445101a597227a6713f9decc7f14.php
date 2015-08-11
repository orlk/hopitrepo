<?php

/* FactureBundle:Admin:index.html.twig */
class __TwigTemplate_b43ea7fc01a9c8b7902c93a278e742201f96445101a597227a6713f9decc7f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FactureBundle::layoutadmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FactureBundle::layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
";
        // line 4
        if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == null)) {
            // line 5
            echo "<div id=\"loginform\">
        <div class=\"col span_2_of_3\">
            <div class=\"login-form\">
                <form action=\"\" method=\"POST\" >
                    <span> <label>Login </label>";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget', array("id" => "logininput"));
            echo "</span>
                    <span> <label>Password </label>";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("id" => "passwordinput"));
            echo "</span>
                    <input type=\"submit\" value=\"Login\" id=\"loginsubmit\"/>
                </form>
            </div>
        </div>
                               <div style=\"bottom: 10px;position: fixed;right: 60px\">
            <a href=\"#\" id=\"back\"><img onclick=\"break;\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow-up.png"), "html", null, true);
            echo "\" /> </a>
</div>
    </div>
                  
";
        } else {
        }
        // line 22
        echo "
<script>
         \$(\"#back\").click(function (e) {
            // Prevent a page reload when a link is pressed
            e.preventDefault();
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#header\").offset().top},
            'slow');
        });
        
    </script>
    
     <script>

        window.onload = function ()
        {
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#loginform\").offset().top},
            'slow');
        };
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "FactureBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  69 => 16,  60 => 10,  56 => 9,  50 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
