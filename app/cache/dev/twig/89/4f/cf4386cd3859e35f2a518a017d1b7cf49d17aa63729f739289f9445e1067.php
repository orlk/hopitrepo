<?php

/* FactureBundle:Admin:ajout.html.twig */
class __TwigTemplate_894fcf4386cd3859e35f2a518a017d1b7cf49d17aa63729f739289f9445e1067 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        .contact-form{
            left: 320px;
            margin-bottom: 40px;
        }
    </style>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"col span_2_of_3\">
        <div class=\"contact-form\" id=\"contactform\">
            <div>
            <h3 style=\"left: 135px;position: relative\">Ajouter un Medicament</h3>
            </div>
            <form method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("medicapersist");
        echo "\">
                    <div>
                        <span><label>Nom Medicament</label></span>
                        <span><input name=\"nom\" type=\"text\" class=\"textbox\" required></span>
                    </div>
                    <div>
                        <span><label>Type Medicament</label></span>
                        <span><input name=\"type\" type=\"text\" class=\"textbox\" required></span>
                    </div>
              
               
                <div>
                    <span><label>Quantité Medicament</label></span>
                    <span><input name=\"quantite\" type=\"number\" class=\"textbox\" required ></span>
                </div>
                <div>
                    <span><label>Prix Medicament</label></span>
                    <span><input name=\"prix\" type=\"number\" step=\"0.01\"class=\"textbox\" required></span>
                </div>
                 <div>
                        <span><label> Medicament Libelle</label></span>
                        <span><input name=\"libelle\" type=\"text\" class=\"textbox\" size=\"8\" required></span>
                    </div>
                        <div >
                    <span><input type=\"submit\" value=\"Ajouter\" id=\"sub\" style=\"position: relative;left: 346px\"></span>
                </div>
                    
            </form>
            <div style=\"bottom: 10px;position: fixed;right: 60px\">
                <a href=\"#\" id=\"back\"><img  src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow-up.png"), "html", null, true);
        echo "\" /> </a>
            </div>
        </div>

    </div>


    <script>

        window.onload = function ()
        {
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#contactform\").offset().top},
            'slow');
        };
    </script>


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
";
    }

    public function getTemplateName()
    {
        return "FactureBundle:Admin:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 45,  60 => 16,  53 => 11,  50 => 10,  40 => 3,  37 => 2,  11 => 1,);
    }
}
