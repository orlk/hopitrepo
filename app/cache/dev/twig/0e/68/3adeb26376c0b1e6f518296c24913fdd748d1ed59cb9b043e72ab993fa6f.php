<?php

/* MedecinIBundle:Rdvdisponible:show.html.twig */
class __TwigTemplate_0e683adeb26376c0b1e6f518296c24913fdd748d1ed59cb9b043e72ab993fa6f extends Twig_Template
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
        echo "    <h1 class=\"titre_d\">Date ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo " </h1>

    <table class=\"record_properties\">
        <tbody>
           
            <tr>
                <th>Date</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dater", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heurer", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilité</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dispo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr> <td class=\"bttnL\"> <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdvdisponible_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
                     </a> 
                </td>
                <td class=\"bttnL\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("rdvdisponible");
        echo "\">
            Back 
        </a>  </td>
            
                <td class=\"dc-profile\">";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " </td>
            </tr>
        </tbody>
    </table>

       
 
";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Rdvdisponible:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  76 => 25,  69 => 21,  64 => 19,  57 => 15,  50 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
