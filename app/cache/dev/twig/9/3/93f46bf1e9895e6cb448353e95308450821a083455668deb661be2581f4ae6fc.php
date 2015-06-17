<?php

/* ::modulesUsed/infoUser.html.twig */
class __TwigTemplate_93f46bf1e9895e6cb448353e95308450821a083455668deb661be2581f4ae6fc extends Twig_Template
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
        echo "<div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo " \">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes information </a>
            </li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo " \">Changer mon mot de passe</a></li>
            <li>
                <a href=\"\">Mes Factures</a>
            </li>
            <li>
                <a href=\"\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/infoUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  35 => 9,  30 => 7,  24 => 4,  19 => 1,);
    }
}
