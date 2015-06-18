<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_372ed0f0317b8ab5d2de48ed4c84c7ce0eaa824ba7d389def9e10e53573c95d5 extends Twig_Template
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
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>

                ";
        // line 6
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EPEpapetrieBundle:Categories:menu"), array());
        // line 7
        echo "
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }
}
