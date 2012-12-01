<?php

/* EchecspageBundle:Pages:index.html.twig */
class __TwigTemplate_20eda8880e8bc9b31bbeab246f94bcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EchecspageBundle::layout.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'entryTitle' => array($this, 'block_entryTitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EchecspageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo "Echecs de Montpellier - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nomPage"), "html", null, true);
    }

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "navigation"));
        foreach ($context['_seq'] as $context["_key"] => $context["unepage"]) {
            // line 8
            echo "
        ";
            // line 9
            if (($this->getAttribute($this->getContext($context, "unepage"), "nomPage") == $this->getAttribute($this->getContext($context, "page"), "nomPage"))) {
                // line 10
                echo "            <li class=\"current\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index", array("name" => $this->getAttribute($this->getContext($context, "unepage"), "nomPage"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unepage"), "nomPage"), "html", null, true);
                echo "</a></li>
        ";
            } else {
                // line 12
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index", array("name" => $this->getAttribute($this->getContext($context, "unepage"), "nomPage"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unepage"), "nomPage"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unepage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "            
";
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["unecat"]) {
            // line 21
            echo "
        <li><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_articles_cat", array("name" => $this->getAttribute($this->getContext($context, "unecat"), "nom"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unecat"), "nom"), "html", null, true);
            echo "</a></li>
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unecat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        echo $this->getAttribute($this->getContext($context, "page"), "contenu");
        echo "
";
    }

    // line 33
    public function block_entryTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nomPage"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EchecspageBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  111 => 30,  108 => 29,  103 => 25,  92 => 22,  89 => 21,  85 => 20,  82 => 19,  79 => 18,  74 => 15,  68 => 14,  60 => 12,  52 => 10,  50 => 9,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  30 => 3,);
    }
}
