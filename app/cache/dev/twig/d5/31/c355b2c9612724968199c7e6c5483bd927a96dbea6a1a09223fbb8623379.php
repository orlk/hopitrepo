<?php

/* MedecinIBundle:Dossiermedical:index.html.twig */
class __TwigTemplate_d531c355b2c9612724968199c7e6c5483bd927a96dbea6a1a09223fbb8623379 extends Twig_Template
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
    <h1 class=\"titre_d\">liste des dossiers medicaux</h1>

    <table>
        <thead>
             <tr> <th>
            <form action=\"\" method=\"POST\">
                Code de patient:  <input type=\"text\" name=\"search\"/>
                  </th>
                  <th  > <input class=\"bttn\" type=\"submit\" value=\"Recherche\" ></th>
</form>     
                            
           </tr>
            <tr>
                <th >Code de dossier</th>
                <th >Date de creation</th>
                 <th>Cin de Patient</th>
             
            </tr>
           
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "            <tr>
                <td >";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codedm", array()), "html", null, true);
            echo "</td>
                <td >";
            // line 31
            if ($this->getAttribute($context["entity"], "datecreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                 <td > ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "codepatient", array()), "cin", array()), "html", null, true);
            echo "</td>
                <td >
                <ul>
                    <li>
                      \t<div class=\"bttnL\"><span> <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_show", array("codeDm" => $this->getAttribute($context["entity"], "codedm", array()))), "html", null, true);
            echo "\">show</a></span></div>
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
            <td class=\"bttnL\">   <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("dossiermedical_new");
        echo "\">
                Nouveau dossier
            </a></td>
        </tr>
        </tbody>
    </table>

   ";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Dossiermedical:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  105 => 43,  92 => 36,  85 => 32,  79 => 31,  75 => 30,  72 => 29,  68 => 28,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
