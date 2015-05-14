<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_b9ce23859ba1b7f64ad1984d064dd9b606500d6b330f0fc35c606622d40349fc extends Twig_Template
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                                <div>
                                    ";
        // line 21
        if (array_key_exists("invalid_username", $context)) {
            // line 22
            echo "                                        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 24
        echo "                                    <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                                </div>
                                <div>
                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 28,  51 => 24,  45 => 22,  43 => 21,  38 => 19,  19 => 2,);
    }
}
