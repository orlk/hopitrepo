<?php

/* MedecinIBundle:Dossiermedical:show.html.twig */
class __TwigTemplate_2154b85530480c3a37511d52cd22ee2d9c7a9480d14f40b4821d059939e24c8e extends Twig_Template
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
    <h1 class=\"titre_d\">Dossier medical n°";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codedm", array()), "html", null, true);
        echo "</h1>

    <table >
        <tbody>
            
            <tr>
                <th>Nom :</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codepatient", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom :</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codepatient", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
              <tr>
                <th>Date de creation :</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
              
<td class=\"bttnL\">
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_edit", array("codeDm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codedm", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
      </td>
     <td class=\"bttnL\">
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichepatient_recherche", array("codeDm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codedm", array()))), "html", null, true);
        echo "\">
            Fiches
        </td>
          <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo "\">
            Back
        </a>
   </td>
  <td class=\"dc-profile\">   
    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        
        

                </td>
            </tr>
            
        </tbody>
    </table>

       

   ";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Dossiermedical:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  96 => 39,  87 => 33,  79 => 28,  71 => 23,  64 => 19,  57 => 15,  47 => 8,  42 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}
