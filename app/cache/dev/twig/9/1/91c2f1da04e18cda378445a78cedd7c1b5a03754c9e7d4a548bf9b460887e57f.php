<?php

/* PagesPagesBundle:Pages:new.html.twig */
class __TwigTemplate_91c2f1da04e18cda378445a78cedd7c1b5a03754c9e7d4a548bf9b460887e57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesPagesBundle:Pages:new.html.twig", 1);
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
        echo "<h2>Ajout d'une page</h2>
<div class=\"span9\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
<div class=\"span12\">
        <ul class=\"record_actions\">

        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">
           <i  class=\"icon-circle-arrow-left\"></i>  Retour
        </a>
    
</ul>
 </div>
";
    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Pages:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
