<?php

/* EPEpapetrieBundle:Products:addproduit.html.twig */
class __TwigTemplate_294369a2b8a0b8958e0093070c5402b07a5faa02a03d491576454a703ea5f1ea extends Twig_Template
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
<html lang=\"en\">
<body>


<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_ajoutproduit");
        echo "\" method=\"post\">

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</form>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EPEpapetrieBundle:Products:addproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  26 => 6,  19 => 1,);
    }
}
