<?php

/* MedecinIBundle:Fichepatient:show.html.twig */
class __TwigTemplate_c0ec96850756838de0f455235ac4b6bc36a7e32dc1075744855e7ca90ad3e1a6 extends Twig_Template
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
        echo "    <h1 class=\"titre_d\">Fiche patient n°";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo " </h1>

    <table class=\"record_properties\">
        <tbody>
           
            <tr>
                <th>Taille</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "taille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poid</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tension</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tension", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Temperature</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "temperature", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Perimetre</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "perimetre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Groupesanguin</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupeSanguin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarque</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "remarque", array()), "html", null, true);
        echo "</td>
            </tr>
      

            <tr class=\"bttnL\">
                <td> <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fichepatient");
        echo "\">
         liste
        </a>
                </td>
                <td>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichepatient_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
                </td>
                <td>
    ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                </td>
    <tr>
   </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Fichepatient:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  115 => 49,  107 => 44,  99 => 39,  92 => 35,  85 => 31,  78 => 27,  71 => 23,  64 => 19,  57 => 15,  50 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
