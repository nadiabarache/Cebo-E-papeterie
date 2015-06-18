<?php

/* PagesPagesBundle:Pages:index.html.twig */
class __TwigTemplate_f3b253740f1ffeba6cd691b6b6072d8068da5a32cf86014658b7003952b56e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesPagesBundle:Pages:index.html.twig", 1);
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
        echo "<h2>Les listes des pages ajoutées</h2>

   <table class=\"table table-striped table-hover\">

        <thead>
            <tr>
               
                <th>Titre</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
              
                <td>
                <ul>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i  class=\"icon-eye-open\"></i></a>
                      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i  class=\"icon-edit\"></i></a>    
                </ul>
                </td>
            </tr>
          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

        <ul>
       
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("adminPages_new");
        echo "\">
            <i  class=\" icon-plus-sign\"></i>      Créer une nouvelle page
            </a>
       
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  76 => 30,  64 => 24,  60 => 23,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
