<?php

/* MedecinIBundle:Rendezvous:index.html.twig */
class __TwigTemplate_56d07365c2904fd798cf00025abb0c3006f7d9c77127e3ffd482661f6734482f extends Twig_Template
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
        echo "    <h1 class=\"titre_d\"> liste des Rendez-vous </h1>

    <table class=\"records_list\">
        <thead>
             <tr> <th>
            <form action=\"\" method=\"POST\">
                Date :  <input type=\"text\" name=\"search\"/>
                  </th>
                  <th  > <input class=\"bttn\" type=\"submit\" value=\"Recherche\" ></th>
</form>     
                            
           </tr>
            <tr>
               
                <th>Cin de patient :</th>
                <th>Date :</th>
                
                <th>Etat :</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
              
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cinP", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "validation", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li class=\"bttnL\">
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rendezvous_show", array("id" => $this->getAttribute($context["entity"], "code", array()))), "html", null, true);
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
        // line 43
        echo "        <tr>
        <td class=\"bttnL\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("rendezvous");
        echo "\">
           Liste
            </a></td></tr>
        </tbody>
    </table>

        
    ";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Rendezvous:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  102 => 43,  89 => 36,  82 => 32,  75 => 30,  71 => 29,  67 => 27,  63 => 26,  39 => 4,  36 => 3,  11 => 1,);
    }
}
