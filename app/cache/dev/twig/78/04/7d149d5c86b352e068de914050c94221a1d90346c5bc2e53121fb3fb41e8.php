<?php

/* MedecinIBundle:Fichepatient:index.html.twig */
class __TwigTemplate_78047d149d5c86b352e068de914050c94221a1d90346c5bc2e53121fb3fb41e8 extends Twig_Template
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
        echo "    <h1 class=\"titre_d\">liste des fiches</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Numero de fiche</th>
               
                <th>Datecreation</th>
               
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichepatient_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
               
                <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "datecreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                <ul>
                    <li class=\"bttnL\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichepatient_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    
                </ul>
                </td>
            </tr>
       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "             <tr>
              <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("dossiermedical");
        echo "\">
            Back
        </a>
   </td>
            </tr>
        </tbody>
        
    </table>

       
  ";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Fichepatient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  92 => 34,  78 => 26,  68 => 21,  61 => 19,  58 => 18,  54 => 17,  39 => 4,  36 => 3,  11 => 1,);
    }
}
