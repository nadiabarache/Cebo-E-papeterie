<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b55dbe8141edf035e0e68304b8da2548b6ceaee4b4b47967940d5a7ee27c5335 extends Twig_Template
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
        // line 2
        echo "
 <div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("::modulesUsed/infoUser.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->loadTemplate("::modulesUsed/panier.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 7)->display($context);
        // line 8
        echo "
    </div>

    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  41 => 17,  30 => 8,  27 => 7,  25 => 6,  19 => 2,);
    }
}
