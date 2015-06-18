<?php

/* :modulesUsed:navigationAdmin.html.twig */
class __TwigTemplate_379e624b3e3acb6b50bbbd1e5a647eda0dcbf22e1c114f1547053eea81daa991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"\">Produits</a>
            </li>
            <li>
                <a href=\"\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"\">Clients</a>
            </li>
            <li>
                <a href=\"\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 29,  19 => 1,);
    }
}
