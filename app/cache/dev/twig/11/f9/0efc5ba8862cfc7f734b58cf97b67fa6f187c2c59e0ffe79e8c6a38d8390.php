<?php

/* EPEpapetrieBundle:Panier:achat.html.twig */
class __TwigTemplate_11f90efc5ba8862cfc7f734b58cf97b67fa6f187c2c59e0ffe79e8c6a38d8390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EPEpapetrieBundle:Panier:achat.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_validation");
        echo "\">
                            <h4>Adresse de livraison</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                               56 rue molière , 94000 ivry sur seine <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                9ter rue boulevard du Montparnasse , 75 006 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>

                            <br /><br />

                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                9 bis rue boulevard du Montparnasse , 75 006 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4 rue boulevard du Montparnasse , 75 006 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>


                                <div class=\"span4 offset2\">
                                    <h4>Ajouter une nouvelle adresse</h4>
                                    <form>
                                        <label>Nom</label>
                                        <input type=\"text\">

                                        <label>Prénom</label>
                                        <input type=\"text\">

                                        <label>Adresse</label>
                                        <input type=\"text\">

                                        <label>Ville</label>
                                        <input type=\"text\">

                                        <label>Code postal</label>
                                        <input type=\"text\">

                                        <label>Ville</label>
                                        <input type=\"text\">

                                        <label>Téléphone</label>
                                        <input type=\"text\">

                                        <br />
                                        <button class=\"btn btn-primary\">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Panier:achat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
