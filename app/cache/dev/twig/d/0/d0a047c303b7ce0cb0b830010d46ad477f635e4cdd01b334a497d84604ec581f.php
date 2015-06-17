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
                    <a class=\"brand\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ep_epapetrie_allProducts");
        echo "\">Sogip CEBO</a>
                    <div class=\"nav-collapse collapse\">      
                         
                        <div class=\"nav-collapse collapse\">
                           ";
        // line 31
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EPEpapetrieBundle:Produits:recherche"), array());
        // line 32
        echo "
                    </div>
         
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">

                             ";
        // line 49
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesPagesBundle:Pages:menu"), array());
        // line 50
        echo "
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre Magasin </h4>
                        
                        ";
        // line 57
        echo " 
                        <p><i class=\"icon-map-marker\"></i>&nbsp; ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Sogip CEBO</p>
                    </div>
                </div>
            </div>
        </footer>
       <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
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

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 77
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
        return array (  189 => 77,  184 => 39,  178 => 7,  172 => 6,  166 => 5,  160 => 78,  158 => 77,  154 => 76,  150 => 75,  142 => 70,  133 => 64,  129 => 63,  121 => 58,  118 => 57,  109 => 50,  107 => 49,  96 => 40,  94 => 39,  85 => 32,  83 => 31,  76 => 27,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
