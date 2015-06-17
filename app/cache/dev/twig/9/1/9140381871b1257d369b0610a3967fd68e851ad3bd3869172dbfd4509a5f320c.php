<?php

/* :modulesUsed:panier.html.twig */
class __TwigTemplate_9140381871b1257d369b0610a3967fd68e851ad3bd3869172dbfd4509a5f320c extends Twig_Template
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
        echo "  <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-shopping-cart\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>
            </a>
            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_panier");
        echo "\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
