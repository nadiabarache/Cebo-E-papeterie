<?php

/* EPEpapetrieBundle:Panier:validation.html.twig */
class __TwigTemplate_3bca9df6d0246db862c6d5f8315d36d01e5e956feb95964bca1baddeb2e294a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EPEpapetrieBundle:Panier:validation.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EPEpapetrieBundle:Panier:validation.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
        
        <div class=\"span9\">
            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
                
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 43
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ep_epapetrie_validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\"  type=\"hidden\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\" />
                <input name=\"prix\"  type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                <input name=\"date\"  type=\"hidden\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\"  class=\"btn btn-success pull-right\">Payer</button>
            </form>
            
            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_achat");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Panier:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 76,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  159 => 63,  155 => 62,  149 => 61,  135 => 54,  131 => 53,  125 => 52,  116 => 46,  113 => 45,  102 => 43,  98 => 42,  93 => 40,  87 => 36,  78 => 33,  74 => 32,  69 => 30,  64 => 28,  61 => 27,  57 => 26,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  11 => 1,);
    }
}
