<?php

/* PagesPagesBundle:Pages:edit.html.twig */
class __TwigTemplate_eb3c7d947ddc5bd78b4c9f7693c63837ddcf600f6eb5bf681981a7e8626c4ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesPagesBundle:Pages:edit.html.twig", 1);
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
        echo "<h1>Editer la page </h1>
<div class=\"span9\">
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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

";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</ul>
 </div>   
";
    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Pages:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
