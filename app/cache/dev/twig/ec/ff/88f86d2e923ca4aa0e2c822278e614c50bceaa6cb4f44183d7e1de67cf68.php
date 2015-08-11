<?php

/* MedecinIBundle:Rendezvous:show.html.twig */
class __TwigTemplate_ecff88f86d2e923ca4aa0e2c822278e614c50bceaa6cb4f44183d7e1de67cf68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MedecinIBundle::RendezVous.html.twig");
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
        return "MedecinIBundle::RendezVous.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenent($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"titre_d\">Rendez-vous ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()), "html", null, true);
        echo " </h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Cin de patient :</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinP", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date :</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d "), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heure :</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heure", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire :</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat :</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validation", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr class=\"bttnL\">
                 <td><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_accepte", array("code" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()))), "html", null, true);
        echo "\">
            Accepter
        </a></td>
        <td><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_refuse", array("code" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array()))), "html", null, true);
        echo "\">
            Refuser 
        </a></td>
        <td><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("rendezvous");
        echo "\">
            Back </td>
            </tr>
        </tbody>
    </table>

      
";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Rendezvous:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  89 => 32,  83 => 29,  77 => 26,  70 => 22,  63 => 18,  56 => 14,  49 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
