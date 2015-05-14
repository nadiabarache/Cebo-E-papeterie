<?php

/* PagesPagesBundle:Pages:page.html.twig */
class __TwigTemplate_594b9e64dba22ca21465a36165a2c7cac696deaad1988febd0708c85baf6243f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesPagesBundle:Pages:page.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "

    <div class=\"container\">
        <div class=\"row\">
                     <h1>
                        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "
                    </h1>
            <div class=\"span12\">

                ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
            </div>
        </div>
    </div>
 ";
    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Pages:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
