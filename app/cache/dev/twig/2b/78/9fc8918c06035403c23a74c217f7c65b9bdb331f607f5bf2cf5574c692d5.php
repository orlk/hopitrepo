<?php

/* ::ressetting_pass.html.twig */
class __TwigTemplate_2b789fc8918c06035403c23a74c217f7c65b9bdb331f607f5bf2cf5574c692d5 extends Twig_Template
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
        echo "

";
        // line 4
        echo "<br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        <div class=\"text-center\">
                            <h3 class=\"text-center\">Mot De Passe Oublié?</h3>
                            <p>Si vous avez oublié votre mot de passe - réinitialiser ici.</p>
                            <div class=\"panel-body\">

                                <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user color-blue\"></i></span>
                                                <!--EMAIL ADDRESS-->

                                                <input  type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"Nom de l'utilisateur\" class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"btn btn-lg btn-primary btn-block\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"submit\">
                                        </div>
                                    </fieldset>
                                </form><!--/end form-->
                                 ";
        // line 31
        if (array_key_exists("invalid_username", $context)) {
            // line 32
            echo "                                    <div class=\"alert alert-warning\">
                                       
                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                                        <strong>Warning!</strong> ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "
                                  
                                    </div>

                                 ";
        }
        // line 40
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






";
    }

    public function getTemplateName()
    {
        return "::ressetting_pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 40,  65 => 35,  60 => 32,  58 => 31,  51 => 27,  37 => 16,  23 => 4,  19 => 1,);
    }
}
