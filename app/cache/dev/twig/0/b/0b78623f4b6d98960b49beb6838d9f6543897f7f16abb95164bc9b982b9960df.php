<?php

/* PagesPagesBundle:Pages:show.html.twig */
class __TwigTemplate_0b78623f4b6d98960b49beb6838d9f6543897f7f16abb95164bc9b982b9960df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "PagesPagesBundle:Pages:show.html.twig", 1);
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
        echo "<h1>Pages</h1>

    <table class=\"record_properties\">
        <tbody>
            
            <tr>
                <th>Titre</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
   
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">
           <i  class=\"icon-circle-arrow-left\"></i>
        </a>
    
    
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
          <i  class=\"icon-edit\"></i>
        </a>
    
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "PagesPagesBundle:Pages:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  65 => 27,  57 => 22,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
