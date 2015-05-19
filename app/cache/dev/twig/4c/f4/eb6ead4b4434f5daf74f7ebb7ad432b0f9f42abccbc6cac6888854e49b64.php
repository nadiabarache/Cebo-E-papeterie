<?php

/* ::modulesUsed/utilisateur.html.twig */
class __TwigTemplate_4cf4eb6ead4b4434f5daf74f7ebb7ad432b0f9f42abccbc6cac6888854e49b64 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo " \">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
