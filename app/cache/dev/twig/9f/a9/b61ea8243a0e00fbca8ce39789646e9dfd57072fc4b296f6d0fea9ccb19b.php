<?php

/* FactureBundle:DossierMed:DossMed.html.twig */
class __TwigTemplate_9fa9b61ea8243a0e00fbca8ce39789646e9dfd57072fc4b296f6d0fea9ccb19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FactureBundle::layoutclient.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FactureBundle::layoutclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " List des Fiches ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .search{width:  900px;
                left: 340px;}
        table{
            margin-left: 201px;
            margin-right: 201px;
            margin-bottom: 40px;}
        .dossform
        {  border-bottom-style: groove;
           border-bottom-left-radius: 5%;
           border-bottom-right-radius:  5%;
           border-bottom-color: rgba(160, 134, 211, 0.5);
           border-bottom-width: 5px;
           margin-left: 280px;
           margin-right: 146px;
           margin-top: 40px;
        }
        .dossform label
        {padding: 5px;
         text-align: center;
         color: rgba(75, 22, 163, 0.92);
         text-transform: uppercase;
         font-size: 1em;
         font-family: \"Roboto\",sans-serif;
         text-shadow: 5px 5px 5px rgba(118, 118, 118, 0.77);
        }
        label.detail{
          font-size: 0.82em;
          margin-left: 60px;
          color: rgba(75, 22, 163, 0.56);
        }
        label.valeurdetail{
          font-size: 0.82em;
          margin-left: 5px;
          color: #7B7C7E;
        }
    </style>
";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div id=\"factureform\" >
        <label class=\"titretable\">Suivie du Dossier médical</label>
        <div class=\"dossform\"><label>Dossier Medical :</label><label class=\"detail\">Date de Création :</label><label class=\"valeurdetail\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dos"]) ? $context["dos"] : $this->getContext($context, "dos")), "datecreation", array()), "d-m-Y"), "html", null, true);
        echo "</label><label class=\"detail\">Medecin :</label><label class=\"valeurdetail\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "nom", array()), "html", null, true);
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medecin"]) ? $context["medecin"] : $this->getContext($context, "medecin")), "prenom", array()), "html", null, true);
        echo "</label><label class=\"detail\">Patient :</label><label class=\"valeurdetail\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "nom", array()), "html", null, true);
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "prenom", array()), "html", null, true);
        echo "</label></div>
        <div class=\"search\"> <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Search .....\"/></div>
        <table class=\"order-table\">
            <thead>
                <tr><th>Date de Creation</th>
                    <th>Taille</th>
                    <th>Poids</th>
                    <th>Tension</th>
                    <th>Température</th>
                    <th>Périmétre</th>
                    <th>Groupe Sanguin</th>
                </tr></thead>
            <tbody>
                ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "datecreation", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "taille", array()), "html", null, true);
            echo "</td>   
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "poid", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tension", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "temperature", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "perimetre", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "groupeSanguin", array()), "html", null, true);
            echo "</td>  

                    </tr>
                </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </table>

        <div style=\"bottom: 10px;position: fixed;right: 60px\">
            <a href=\"#\" id=\"back\"><img onclick=\"break;\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow-up.png"), "html", null, true);
        echo "\" /> </a>
        </div>
    </div>
    <script>

        \$(\"#dossierlink\").click(function (e) {
            // Prevent a page reload when a link is pressed
            e.preventDefault();
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#factureform\").offset().top},
            'slow');
        });
    </script>
    <script>
        \$(\"#back\").click(function (e) {
            // Prevent a page reload when a link is pressed
            e.preventDefault();
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#header\").offset().top},
            'slow');
        });

    </script>


    <script>

        (function (document) {
            'use strict';

            var LightTableFilter = (function (Arr) {

                var _input;

                function _onInputEvent(e) {
                    _input = e.target;
                    var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                    Arr.forEach.call(tables, function (table) {
                        Arr.forEach.call(table.tBodies, function (tbody) {
                            Arr.forEach.call(tbody.rows, _filter);
                        });
                    });
                }

                function _filter(row) {
                    var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                    row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                }

                return {
                    init: function () {
                        var inputs = document.getElementsByClassName('light-table-filter');
                        Arr.forEach.call(inputs, function (input) {
                            input.oninput = _onInputEvent;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function () {
                if (document.readyState === 'complete') {
                    LightTableFilter.init();
                }
            });

        })(document);
    </script>
    <script>

        window.onload = function ()
        {
            // Call the scroll function
            \$('html,body').animate({
                scrollTop: \$(\"#factureform\").offset().top},
            'slow');
        };
    </script>
";
    }

    public function getTemplateName()
    {
        return "FactureBundle:DossierMed:DossMed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 73,  159 => 70,  148 => 65,  144 => 64,  140 => 63,  136 => 62,  132 => 61,  128 => 60,  123 => 59,  119 => 58,  95 => 45,  88 => 42,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
