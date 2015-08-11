<?php

/* MedecinIBundle:Dossiermedical:edit.html.twig */
class __TwigTemplate_1beee1e7585ac96dda460c7fc4749f23f88961a403ddc9079dc07280de2fbfc5 extends Twig_Template
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
    <h1 class=\"titre_d\">Dossiermedical edit</h1>
     <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_edit", array("codeDm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codedm", array()))), "html", null, true);
        echo "\" method=\"POST\">
            <table >
                <tr>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datecreation", array()), 'label', array("label" => "Date de creation: "));
        echo "</td>
                    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datecreation", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codepatient", array()), 'label', array("label" => "Code de patient: "));
        echo "</td>
                    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codepatient", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                   
                    <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codemedecin", array()), 'widget');
        echo "</td>
                </tr>
                <tr><td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Valider", array()), 'widget', array("attr" => array("class" => "bttn")));
        echo "</td>
                <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo "\">
            Back
        </a>
   </td>
                </tr>
               ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
               
            </table>
        </form>
    

";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Dossiermedical:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  87 => 26,  80 => 22,  75 => 20,  68 => 16,  64 => 15,  58 => 12,  54 => 11,  48 => 8,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
