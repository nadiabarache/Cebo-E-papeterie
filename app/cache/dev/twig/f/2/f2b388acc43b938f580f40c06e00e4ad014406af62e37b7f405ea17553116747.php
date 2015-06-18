<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_f2b388acc43b938f580f40c06e00e4ad014406af62e37b7f405ea17553116747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'motsCles' => array($this, 'block_motsCles'),
            'Description' => array($this, 'block_Description'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\"> 
         <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('Description', $context, $blocks);
        echo "\"> 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button type=\"button\"class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" >
                            
                       

                        <span class=\"icon-bar\">  </span>
                        <span class=\"icon-bar\"> </span>
                        <span class=\"icon-bar\"> </span>
                    </button>
                    <a class=\"brand\" href=\"\">Administartion</a>
                    
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 34
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 34)->display($context);
        // line 35
        echo "                <div class=\"span9\">
                    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                </div>
            </div>
        </div>

        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 \">
                       <p>&copy; Copyright ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Sogip CEBO</p>
                    </div>
                </div>   
            </div>
        </footer>
       <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Cebo Sogip 75011";
    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_Description($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  143 => 36,  137 => 7,  131 => 6,  125 => 5,  119 => 54,  117 => 53,  113 => 52,  109 => 51,  101 => 46,  90 => 37,  88 => 36,  85 => 35,  83 => 34,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
