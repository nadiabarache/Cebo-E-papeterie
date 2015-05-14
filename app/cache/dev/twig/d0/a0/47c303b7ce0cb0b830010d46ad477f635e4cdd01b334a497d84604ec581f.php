<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_d0a047c303b7ce0cb0b830010d46ad477f635e4cdd01b334a497d84604ec581f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
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
                    <a class=\"brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_allProducts");
        echo "\">Sogip CEBO</a>
                    <div class=\"nav-collapse collapse\">      
                         
                        <div class=\"nav-collapse collapse\">
                           ";
        // line 30
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EPEpapetrieBundle:Produits:recherche"), array());
        // line 31
        echo "
                    </div>
         
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">

                             ";
        // line 48
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesPagesBundle:Pages:menu"), array());
        // line 49
        echo "
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre Magasin </h4>
                        
                        ";
        // line 56
        echo " 
                        <p><i class=\"icon-map-marker\"></i>&nbsp; ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Sogip CEBO</p>
                    </div>
                </div>
            </div>
        </footer>
       <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "E-papeterie";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 76,  171 => 38,  166 => 6,  160 => 5,  154 => 77,  152 => 76,  148 => 75,  144 => 74,  136 => 69,  127 => 63,  123 => 62,  115 => 57,  112 => 56,  103 => 49,  101 => 48,  90 => 39,  88 => 38,  79 => 31,  77 => 30,  70 => 26,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
