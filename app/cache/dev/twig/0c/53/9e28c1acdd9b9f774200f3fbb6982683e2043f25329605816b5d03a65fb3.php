<?php

/* MedecinIBundle:Rdvdisponible:index.html.twig */
class __TwigTemplate_0c539e28c1acdd9b9f774200f3fbb6982683e2043f25329605816b5d03a65fb3 extends Twig_Template
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
        echo "    <h1 class=\"titre_d\">Votre calendrier</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
               
                <th>Date</th>
                <th>Heure</th>
                <th>Disponibilité</th>
                
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
               
                <td>";
            // line 20
            if ($this->getAttribute($context["entity"], "dater", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dater", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "heurer", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dispo", array()), "html", null, true);
            echo "</td>
                <td>
                <ul class=\"bttnL\">
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdvdisponible_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 33
        echo "        <tr>
            <td class=\"bttnL\">   <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("rdvdisponible_new");
        echo "\">
                Nouveau 
            </a></td>
        </tr>
        </tbody>
    </table>

      
    ";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Rdvdisponible:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  92 => 33,  79 => 26,  72 => 22,  68 => 21,  62 => 20,  58 => 18,  54 => 17,  39 => 4,  36 => 3,  11 => 1,);
    }
}
