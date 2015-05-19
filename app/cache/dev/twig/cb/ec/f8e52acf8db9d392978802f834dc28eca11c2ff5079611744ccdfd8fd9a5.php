<?php

/* EPEpapetrieBundle:Products:allProducts.html.twig */
class __TwigTemplate_cbecf8e52acf8db9d392978802f834dc28eca11c2ff5079611744ccdfd8fd9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 1);
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

        <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/panier.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 9)->display($context);
        // line 10
        echo "                       ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "                       ";
            $this->loadTemplate("::modulesUsed/navigation.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 11)->display($context);
            // line 12
            echo "                       ";
            $this->loadTemplate("::modulesUsed/infoUser.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 12)->display($context);
            // line 13
            echo "                ";
        } else {
            // line 14
            echo "                      ";
            $this->loadTemplate("::modulesUsed/navigation.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 14)->display($context);
            // line 15
            echo "                       ";
            $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "EPEpapetrieBundle:Products:allProducts.html.twig", 15)->display($context);
            // line 16
            echo "                ";
        }
        // line 17
        echo "        </div>
        <div class=\"span9\">
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 20
            echo "            <ul class=\"thumbnails\">

                ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 23
                echo "
                 <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                            <p>";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo "</p>
                            <a class=\"btn btn-primary\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ep_epapetrie_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ep_epapetrie_ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>
                
                ";
        } else {
            // line 53
            echo "                     Aucun produit
                
                ";
        }
        // line 56
        echo "
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Products:allProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  129 => 53,  111 => 37,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  80 => 26,  75 => 23,  71 => 22,  67 => 20,  65 => 19,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
