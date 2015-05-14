<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_3663b593636cf4f84397b892681c43c2b2c5adf9c2af27d4aa246f30aaa22d67 extends Twig_Template
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

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Mot de passe perdu</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <h4>Récupération du mot de passe ?</h4>
                            <em>
                                Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                                Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                            </em>
                        </div>

                        <div class=\"span4 offset2\">

                            <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <div>
                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                            </form>
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
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  45 => 21,  39 => 20,  19 => 2,);
    }
}
