<?php

/* MedecinIBundle:Patient:mail.html.twig */
class __TwigTemplate_5382e42b1c3261ff43086b2ee9d0814964d68d064b520e6f430805894839ee61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenent($context, array $blocks = array())
    {
        // line 4
        echo "
    <head>
        <title>Envoyer un mail</title>
    </head>
    <form action =\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("patient_mailsend");
        echo "\" methode='POST'>
    <table>
        <tr>
            <td> Sujet:</td>
            <td> <input type =\"text\" name=\"Subject\"> </td>
        </tr>
        <tr>
            <td>email:</td>
            <td> <input type =\"text\" name=\"email\"> </td>
        </tr>
        <tr>
            <td> text:</td>
            <td> <textarea  name=\"message\"></textarea> </td>
        </tr>
        <tr>
            
            <td>  <input type=\"submit\" value=\"send\"/> </td>
        </tr>
    </table>
    
        
    </form>

";
    }

    public function getTemplateName()
    {
        return "MedecinIBundle:Patient:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
