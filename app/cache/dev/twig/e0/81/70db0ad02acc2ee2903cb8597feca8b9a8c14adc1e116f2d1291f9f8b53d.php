<?php

/* MedecinIBundle:Rdvdisponible:new.html.twig */
class __TwigTemplate_e08170db0ad02acc2ee2903cb8597feca8b9a8c14adc1e116f2d1291f9f8b53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MedecinIBundle::CalendrierM.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenent' => array($this, 'block_contenent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MedecinIBundle::CalendrierM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenent($context, array $blocks = array())
    {
        // line 4
        echo "    <head>
<link  rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/style.css"), "html", null, true);
        echo " />
</head>
 <h1 class=\"titre_d\">Votre calendrier </h1>
   <form action=\"\" method=\"POST\">
            <table >
                <tr>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dater", array()), 'label', array("label" => "Date disponible: "));
        echo "</td>
                    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dater", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heurer", array()), 'label', array("label" => "Heure disponible: "));
        echo "</td>
                    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heurer", array()), 'widget');
        echo "</td>
                </tr>
                
                <tr><td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "bttn")));
        echo "</td>
                 <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("rdvdisponible");
        echo "\">
            Back
        </a>
   </td></tr>
                <tr>
                    <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinm", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))));
        echo "</td>
                </tr>
             ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </table>
        </form>
";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Rdvdisponible:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  86 => 28,  78 => 23,  71 => 19,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
