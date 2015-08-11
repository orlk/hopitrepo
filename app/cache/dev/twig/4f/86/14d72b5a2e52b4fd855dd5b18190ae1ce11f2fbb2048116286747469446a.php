<?php

/* MedecinIBundle:Fichepatient:new.html.twig */
class __TwigTemplate_4f8614d72b5a2e52b4fd855dd5b18190ae1ce11f2fbb2048116286747469446a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MedecinIBundle::FichePatient.html.twig");
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
        return "MedecinIBundle::FichePatient.html.twig";
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
 <h1 class=\"titre_d\">création d'une fiche </h1>
   <form action=\"\" method=\"POST\">
            <table >
                <tr>
                    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille", array()), 'label', array("label" => "Taille: "));
        echo "</td>
                    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taille", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'label', array("label" => "Poids: "));
        echo "</td>
                    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poid", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tension", array()), 'label', array("label" => "Tension: "));
        echo "</td>
                    <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tension", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperature", array()), 'label', array("label" => "Temperature: "));
        echo "</td>
                    <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperature", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetre", array()), 'label', array("label" => "Perimetre: "));
        echo "</td>
                    <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perimetre", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groupeSanguin", array()), 'label', array("label" => "groupe Sanguin: "));
        echo "</td>
                    <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groupeSanguin", array()), 'widget');
        echo "</td>
                </tr>
                 <tr> 
                    <td> ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datecreation", array()), 'label', array("label" => "Date de creation: "));
        echo "</td>
                    <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datecreation", array()), 'widget');
        echo "</td>
                </tr>
                 <tr> 
                    <td> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remarque", array()), 'label', array("label" => "Remarque: "));
        echo "</td>
                    <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remarque", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codedm", array()), 'label', array("label" => "Code de dossier: "));
        echo "</td>
                    <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codedm", array()), 'widget');
        echo "</td>
                </tr>
                <tr><td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "bttn")));
        echo "</td>
                 <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo "\">
            Back
        </a>
   </td></tr>
             ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </table>
        </form>
";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Fichepatient:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  147 => 50,  140 => 46,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  115 => 36,  111 => 35,  105 => 32,  101 => 31,  95 => 28,  91 => 27,  85 => 24,  81 => 23,  75 => 20,  71 => 19,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
