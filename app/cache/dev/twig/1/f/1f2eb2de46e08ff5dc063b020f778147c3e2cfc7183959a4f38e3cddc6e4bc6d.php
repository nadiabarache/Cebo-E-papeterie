<?php

/* EPEpapetrieBundle:Products:produit.html.twig */
class __TwigTemplate_1f2eb2de46e08ff5dc063b020f778147c3e2cfc7183959a4f38e3cddc6e4bc6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EPEpapetrieBundle:Products:produit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                  ";
        // line 12
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EPEpapetrieBundle:Products:produit.html.twig", 12)->display($context);
        // line 13
        echo "                   ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EPEpapetrieBundle:Panier:menu"), array());
        // line 14
        echo "            </div>
            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "alt", array()), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5> Categorie : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo " </h5>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€</h4>
                        ";
        // line 26
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 27
            echo "                            <form action=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ep_epapetrie_ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <select name=\"qte\" class=\"span1\">
                                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                                </select>
                                <div>
                                    <button class=\"btn btn-primary\">Ajouter au panier</button>
                                </div>
                            </form>
                        ";
        } else {
            // line 38
            echo "                            <div>
                              <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("ep_epapetrie_panier");
            echo "\" class=\"btn btn-primary\"> Le produit est déjà dans le panier </a>
                            </div>
                        ";
        }
        // line 42
        echo "                    </div>
                </div>


            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Products:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  117 => 39,  114 => 38,  106 => 32,  95 => 30,  91 => 29,  85 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  58 => 18,  52 => 14,  49 => 13,  47 => 12,  40 => 7,  37 => 6,  29 => 3,  11 => 1,);
    }
}
