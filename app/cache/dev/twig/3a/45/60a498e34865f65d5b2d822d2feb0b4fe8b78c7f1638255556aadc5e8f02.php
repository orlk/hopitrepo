<?php

/* FactureBundle:Facture:Facture.html.twig */
class __TwigTemplate_3a4560a498e34865f65d5b2d822d2feb0b4fe8b78c7f1638255556aadc5e8f02 extends Twig_Template
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
        echo " List des Factures";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <style>

        .search{

            width:  900px;
          
        }
        table{
           
            margin-bottom: 40px;
        }
    </style>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        echo " 
                         <div id=\"factureform\" >
                 <label class=\"titretable\">Liste des Factures</label>
                 <div class=\"search\"> <input type=\"search\" class=\"light-table-filter\" data-table=\"order-table\" placeholder=\"Search .....\"/></div>
                 <table class=\"order-table\">
                     <thead>
                     <tr><th>ID FACTURE</th>
                     <th>prix consultation</th>
                     <th>prix chambre</th>
                     <th>prix traitement</th>
                     <th>prix examn laboratoire</th>
                     <th>prix total</th>
                     <th>date facture</th>
              
                     </tr></thead>
                     <tbody>
                 ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                     <tr>
                         <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idfacture", array()), "html", null, true);
            echo "</td>   
                         <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prixConsultation", array()), "html", null, true);
            echo "</td>  
                         <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prixChambre", array()), "html", null, true);
            echo "</td>  
                         <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prixTrait", array()), "html", null, true);
            echo "</td>  
                         <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prixExamLabo", array()), "html", null, true);
            echo "</td>  
                         <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prixTotal", array()), "html", null, true);
            echo "</td>  
                          <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dateFacture", array()), "html", null, true);
            echo "</td> 
                     
                         
                     </tr>
                 </tbody>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                 </table>
                 
                 <div style=\"bottom: 10px;position: fixed;right: 60px\">
            <a href=\"#\" id=\"back\"><img onclick=\"break;\" src=\"";
        // line 50
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
    
    (function(document) {
\t'use strict';

\tvar LightTableFilter = (function(Arr) {

\t\tvar _input;

\t\tfunction _onInputEvent(e) {
\t\t\t_input = e.target;
\t\t\tvar tables = document.getElementsByClassName(_input.getAttribute('data-table'));
\t\t\tArr.forEach.call(tables, function(table) {
\t\t\t\tArr.forEach.call(table.tBodies, function(tbody) {
\t\t\t\t\tArr.forEach.call(tbody.rows, _filter);
\t\t\t\t});
\t\t\t});
\t\t}

\t\tfunction _filter(row) {
\t\t\tvar text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
\t\t\trow.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
\t\t}

\t\treturn {
\t\t\tinit: function() {
\t\t\t\tvar inputs = document.getElementsByClassName('light-table-filter');
\t\t\t\tArr.forEach.call(inputs, function(input) {
\t\t\t\t\tinput.oninput = _onInputEvent;
\t\t\t\t});
\t\t\t}
\t\t};
\t})(Array.prototype);

\tdocument.addEventListener('readystatechange', function() {
\t\tif (document.readyState === 'complete') {
\t\t\tLightTableFilter.init();
\t\t}
\t});

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
        return "FactureBundle:Facture:Facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  126 => 47,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  87 => 34,  83 => 33,  63 => 17,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
