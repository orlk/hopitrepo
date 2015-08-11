<?php

/* MedecinIBundle:Dossiermedical:new.html.twig */
class __TwigTemplate_cd8cebc81e4e5f40de1f402297cdfd7ece33c3cc5c24dc31101dd9ecd390ca0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MedecinIBundle::DossierMedical.html.twig");
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
        return "MedecinIBundle::DossierMedical.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenent($context, array $blocks = array())
    {
        // line 5
        echo "    <head>
<link  rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/css/style.css"), "html", null, true);
        echo " />
</head>
 <h1 class=\"titre_d\">création d'un dossier médical </h1>
   <form action=\"\" method=\"POST\">
            <table >
                <tr>
                    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datecreation", array()), 'label', array("label" => "Date de creation: "));
        echo "</td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datecreation", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepatient", array()), 'label', array("label" => "Code de patient: "));
        echo "</td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepatient", array()), 'widget');
        echo "</td>
                </tr>
                
                <tr><td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "bttn")));
        echo "</td>
                 <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo "\">
            Back
        </a>
   </td></tr>
                <tr>
                    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codemedecin", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))));
        echo "</td>
                </tr>
             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </table>
        </form>
";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Dossiermedical:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  86 => 29,  78 => 24,  71 => 20,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  42 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}
