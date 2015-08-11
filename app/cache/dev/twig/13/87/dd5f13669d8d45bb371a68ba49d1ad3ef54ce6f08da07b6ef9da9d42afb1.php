<?php

/* ::register_content.html.twig */
class __TwigTemplate_1387dd5f13669d8d45bb371a68ba49d1ad3ef54ce6f08da07b6ef9da9d42afb1 extends Twig_Template
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
        // line 2
        echo "<div class=\"container\" style=\" margin-top: 4%;\">

    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
            <form  role=\"form\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                <h2 style=\"font-size: 30PX;margin-left: 10%;color: rgb(51, 122, 183);\" > Inscrivez-Vous<small  style=\"font-size: 18px;margin-left: 9px;\">C'est gratuit et le sera toujours.</small></h2>
                <hr class=\"colorgraph\">




                <div class=\"form-group\">
                    ";
        // line 15
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "inputEmail", "placeholder" => "Email Address", "tabindex" => "4")));
        echo "
                    ";
        // line 17
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                </div>


                <div class=\"form-group\">

                    ";
        // line 24
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "id" => "display_name", "placeholder" => "Nom d'utilisateur", "tabindex" => "4")));
        echo "
                    ";
        // line 26
        echo "
                    <span class=\"help-inline\">    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "   </span>

                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6\">

                        <div class=\"form-group\">

                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Mot de passe ", "tabindex" => "6")));
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        </div>



                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "confirmer Mot de passe ", "tabindex" => "6")));
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-4 col-sm-3 col-md-3\">
                        <span class=\"button-checkbox\">
                            <button type=\"button\" class=\"btn\" data-color=\"info\" tabindex=\"7\">I Agree</button>
                            <input type=\"checkbox\" name=\"t_and_c\" id=\"t_and_c\" class=\"hidden\" value=\"1\">
                        </span>
                    </div>
                    <div class=\"col-xs-8 col-sm-9 col-md-9\">
                        By clicking <strong class=\"label label-primary\">Register</strong>, you agree to the <a href=\"#\" data-toggle=\"modal\" data-target=\"#t_and_c_m\">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>
                <hr class=\"colorgraph\">


                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-6\">  <input type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-lg\" tabindex=\"7\"/>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  </div>
                    <div class=\"col-xs-12 col-md-6\"><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-success btn-block btn-lg\">Sign In</a></div>
                </div>

            </form>
        </div>
    </div>      
    <div class=\"modal fade\" id=\"t_and_c_m\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Terms & Conditions</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



";
    }

    public function getTemplateName()
    {
        return "::register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 67,  115 => 66,  92 => 46,  88 => 45,  77 => 37,  73 => 36,  61 => 27,  58 => 26,  53 => 24,  43 => 17,  38 => 15,  25 => 6,  19 => 2,);
    }
}
