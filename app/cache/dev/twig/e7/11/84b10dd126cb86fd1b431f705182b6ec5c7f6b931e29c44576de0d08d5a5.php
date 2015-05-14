<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_e71184b10dd126cb86fd1b431f705182b6ec5c7f6b931e29c44576de0d08d5a5 extends Twig_Template
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
        // line 7
        $this->loadTemplate("::modulesUsed/infoUser.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("::modulesUsed/panier.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 8)->display($context);
        // line 9
        echo "
    </div>
    <div class=\"span9\">
        <h2>Modifier mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">

                    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <div>
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  48 => 19,  42 => 18,  31 => 9,  28 => 8,  26 => 7,  19 => 2,);
    }
}
