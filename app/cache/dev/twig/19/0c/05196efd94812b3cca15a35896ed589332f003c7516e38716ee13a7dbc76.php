<?php

/* FactureBundle:Contact:contact.html.twig */
class __TwigTemplate_190c05196efd94812b3cca15a35896ed589332f003c7516e38716ee13a7dbc76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FactureBundle::layoutclient.html.twig");
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
        return "FactureBundle::layoutclient.html.twig";
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
            <h3 style=\"left: 135px;position: relative\">Contacter Votre Médecin</h3>";
        // line 14
        if (((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == null)) {
            echo " <h4 style=\"color:rgba(123, 124, 126, 0.53);left: 135px;position: relative\">envoyer un email ..</h4>";
        } elseif (((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == "true")) {
            echo "<h4 style=\"color:rgba(0, 128, 0, 0.53);left: 135px;position: relative\">Votre Email A Eté Envoyé Avec Succés ...</h4> </h4>";
        } else {
            echo "<h4 style=\"color:red;left: 135px;position: relative\">Echec...</h4>  ";
        }
        // line 15
        echo "            </div>
            <form method=\"POST\" >
                ";
        // line 17
        if (((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")) == null)) {
            // line 18
            echo "                    <div>
                        <span><label>NAME</label></span>
                        <span><input name=\"name\" type=\"text\" class=\"textbox\"></span>
                    </div>
                    <div>
                        <span><label>E-MAIL</label></span>
                        <span><input name=\"email\" type=\"text\" class=\"textbox\" required=\"true\"></span>
                    </div>
                ";
        }
        // line 27
        echo "                <div>
                    <span><label>Email Medecin</label></span>
                    <span><select class=\"textbox\" name=\"emailto\">
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) ? $context["medecins"] : $this->getContext($context, "medecins")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                                <option >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </select></span>
                </div>
                <div>
                    <span><label>Subject</label></span>
                    <span><input name=\"subject\" type=\"text\" class=\"textbox\" required=\"true\"></span>
                </div>
                <div>
                    <span><label>Message</label></span>
                    <span><textarea name=\"message\" required> </textarea></span>
                </div>
                        <div >
                    <span><input type=\"submit\" value=\"Envoyer\" id=\"sub\" style=\"position: relative;left: 346px\"></span>
                </div>
            </form>
            <div style=\"bottom: 10px;position: fixed;right: 60px\">
                <a href=\"#\" id=\"back\"><img  src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow-up.png"), "html", null, true);
        echo "\" /> </a>
            </div>
        </div>

    </div>

    <script>

        \$(\"#contactlink\").click(function (e) {
            // Prevent a page reload when a link is pressed
            e.preventDefault();
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#contactform\").offset().top},
            'slow');
        });
    </script> 
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
        return "FactureBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 48,  101 => 33,  92 => 31,  88 => 30,  83 => 27,  72 => 18,  70 => 17,  66 => 15,  58 => 14,  53 => 11,  50 => 10,  40 => 3,  37 => 2,  11 => 1,);
    }
}
