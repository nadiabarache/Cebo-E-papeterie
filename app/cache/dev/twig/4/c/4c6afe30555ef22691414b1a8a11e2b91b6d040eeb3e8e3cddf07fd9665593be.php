<?php

/* EPEpapetrieBundle:Produits:index.html.twig */
class __TwigTemplate_4c6afe30555ef22691414b1a8a11e2b91b6d040eeb3e8e3cddf07fd9665593be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EPEpapetrieBundle:Produits:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Listes des produits</h1>
   <table class=\"table table-striped table-hover\">
 
        <thead>
            <tr>
        
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
               
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponible", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
              
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i  class=\"icon-eye-open\"> Voir</i></a>
                   
                    
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> |  <i  class=\"icon-edit\"> Editer</i></a>
                    
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
     
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("adminProduits_new");
        echo "\">
              <i  class=\" icon-plus-sign\"></i>      Ajouter une nouveau produit
            </a>
        
    </ul>
  
    ";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Produits:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  92 => 37,  80 => 31,  74 => 28,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
