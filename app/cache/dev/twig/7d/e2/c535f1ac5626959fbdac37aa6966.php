<?php

/* EchecspageBundle::layout.html.twig */
class __TwigTemplate_7de2c535f1ac5626959fbdac37aa6966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'entryTitle' => array($this, 'block_entryTitle'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 3
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    
          
    
        <header id=\"master-header\" class=\"clearfix\" role=\"banner\">

\t\t<hgroup>
\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index", array("name" => "Accueil")), "html", null, true);
        echo "\" title=\"Your Site Name\"><img src=\"http://ladiagonaledusud.free.fr/fresh/templates/beez/images/ECM-RVB_249x97.png\"/></a>
\t\t\t<h2 id=\"site-description\">Le grand club de la ville bleue !</h2>
\t\t</hgroup>

\t</header>
\t
           <nav class=\"main-navigation clearfix span12\" role=\"navigation\">
           
                <ul>
\t\t  ";
        // line 33
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "\t\t</ul>
                      
           </nav>
       
       
       <div id=\"content\">
        

            <header class=\"entry-header\">

                <h1 class=\"entry-title\">";
        // line 44
        $this->displayBlock('entryTitle', $context, $blocks);
        echo "</h1>

             </header> 

             <div id=\"hentry\">
                     ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        echo "\t
             </div>
\t
        </div>
        <div id=\"sidebar\">
            <ul>
               ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        echo "\t
            </ul>
        </div>

        <div id=\"footer\" role=\"contentinfo\">
\tCopyrights C.Maibeche & D.Dominguez 
        </div>

</body>
</html>
";
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" media=\"screen,projection\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/echecs/css/style.css"), "html", null, true);
        echo "\" />
        
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/echecs/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/echecs/js/script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/echecs/js/modernizr-2.6.1.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
    }

    // line 33
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 44
    public function block_entryTitle($context, array $blocks = array())
    {
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EchecspageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  156 => 49,  151 => 44,  146 => 33,  139 => 12,  135 => 11,  131 => 10,  125 => 8,  122 => 7,  116 => 6,  96 => 55,  87 => 49,  67 => 34,  65 => 33,  53 => 24,  38 => 7,  34 => 6,  29 => 3,  27 => 2,  24 => 1,  118 => 33,  111 => 2,  108 => 29,  103 => 25,  92 => 22,  89 => 21,  85 => 20,  82 => 19,  79 => 44,  74 => 15,  68 => 14,  60 => 12,  52 => 10,  50 => 9,  47 => 8,  43 => 7,  40 => 15,  37 => 5,  30 => 3,);
    }
}
