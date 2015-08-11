<?php

/* FactureBundle:Admin:Medica.html.twig */
class __TwigTemplate_460c15352d168bb270bc465d8c4d13f58ff94a27befa81b757710bd89fcf595c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FactureBundle::layoutadmin.html.twig");
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
        return "FactureBundle::layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " List des Medicament";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <style>

        .search{

            width:  900px;
            left: 340px;

        }
        table{
            margin-left: 201px;
            margin-right: 201px;
            margin-bottom: 40px;
        }
        .newmedica
        {
            position: relative;
            bottom:48px ;
            margin-left: 320px;
        }
        .newmedica label
        {
            bottom: 18px;
            position: relative;
            margin-left: 18px;
        }
    </style>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div id=\"factureform\" >
        <label class=\"titretable\">Liste des Medicaments</label>
        <div class=\"search\"> <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Search .....\"/>
            <div class=\"newmedica\"> <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("medicaajout");
        echo "\" title=\"Ajouter\" ><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/new.png"), "html", null, true);
        echo "\" /><label>Nouveau Medicament</label></a></div>
        </div>
        <table class=\"order-table\">
            <thead>
                <tr><th>Nom Medicament</th>
                    <th>Type Medicament</th>
                    <th>Quantité Medicament</th>
                    <th>Prix</th>
                    <th>Libelle</th>
                    <th>Action</th>
                </tr></thead>
            <tbody>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medicas"]) ? $context["medicas"] : $this->getContext($context, "medicas")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nommedica", array()), "html", null, true);
            echo "</td>   
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "typemedica", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantitemedica", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
            echo "</td>  
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "libelle", array()), "html", null, true);
            echo "</td>  
                        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicadelete", array("id" => $this->getAttribute($context["item"], "idmedica", array()))), "html", null, true);
            echo "\" title=\"Supprimer\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/DeleteButton.png"), "html", null, true);
            echo "\" /></a>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medicaupdate", array("id" => $this->getAttribute($context["item"], "idmedica", array()))), "html", null, true);
            echo "\" title=\"Modifier\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/update.png"), "html", null, true);
            echo "\" /></a>
                        </td>
                    </tr>
                </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
        </table>

        <div style=\"bottom: 10px;position: fixed;right: 60px\">
            <a href=\"#\" id=\"back\"><img onclick=\"break;\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/arrow-up.png"), "html", null, true);
        echo "\" /> </a>
        </div>
    </div>
    <script>

        \$(\"#facturelink\").click(function (e) {
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
        return "FactureBundle:Admin:Medica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 64,  148 => 60,  135 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  106 => 48,  102 => 47,  85 => 35,  77 => 31,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
