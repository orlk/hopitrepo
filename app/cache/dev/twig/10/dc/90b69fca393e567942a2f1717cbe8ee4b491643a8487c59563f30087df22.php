<?php

/* mailBundle:mail:new.html.twig */
class __TwigTemplate_10dc90b69fca393e567942a2f1717cbe8ee4b491643a8487c59563f30087df22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("mailBundle::MailT.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'contenent' => array($this, 'block_contenent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mailBundle::MailT.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenent($context, array $blocks = array())
    {
        // line 5
        echo "<body>
<h2 class=\"titre_d\"> <strong> Formulaire De Contact</strong> </h2>


<p>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>

<form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <table >
                <tr>
                    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom: "));
        echo "</td>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom: "));
        echo "</td>
                    <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "from", array()), 'label', array("label" => " À: "));
        echo "</td>
                    <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "from", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label', array("label" => "Text: "));
        echo "</td>
                    <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                   <td class=\"bttnL\"> <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("patient");
        echo "\">
            Back
        </a> </td>
                    <td><input class=\"bttn\" type=\"submit\"/></td>
                   
                </tr>
                
                
                
             ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </table>

</form>
</body>
";
    }

    public function getTemplateName()
    {
        return "mailBundle:mail:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  98 => 30,  92 => 27,  88 => 26,  82 => 23,  78 => 22,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  50 => 11,  45 => 9,  39 => 5,  36 => 4,  11 => 2,);
    }
}
