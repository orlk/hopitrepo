<?php

/* MedecinIBundle:Patient:index.html.twig */
class __TwigTemplate_133850d9a0f9b2d75bd5e0c9ea0d2a53ef7c3fa806917d8d0b20307daecb4aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MedecinIBundle::Patients.html.twig");
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
        return "MedecinIBundle::Patients.html.twig";
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
    <h1 class=\"titre_d\">liste des Patients</h1>

    <table>
        <thead>
            <tr> <th>
            <form action=\"\" method=\"POST\">
               Cin de patient:  <input type=\"text\" name=\"search\"/>
                  </th>
                  <th  > <input class=\"bttn\" type=\"submit\" value=\"Recherche\" ></th>
</form>     
                            
           </tr>
            <tr>
                <th >Cin</th>
                <th >Nom</th>
                 <th>Prenom</th>
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td >";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cin", array()), "html", null, true);
            echo "</td>
                 <td >";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                 <td >";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                 
                <td>
                
                      \t<div class=\"bttnL\"><span> <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("patient_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a></span></div>
                
                </td>
            </tr>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "         <tr>
              <td class=\"bttnL\">   
                 
  
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("patient");
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
        return "MedecinIBundle:Patient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  101 => 41,  89 => 35,  82 => 31,  78 => 30,  74 => 29,  71 => 28,  67 => 27,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
