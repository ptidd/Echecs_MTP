<?php

/* EchecspageBundle:Articles:index.html.twig */
class __TwigTemplate_3fcf296ecfd25a5476156494a2a48455 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "categorie"), "html", null, true);
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
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index", array("name" => $this->getAttribute($this->getContext($context, "unepage"), "nomPage"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unepage"), "nomPage"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unepage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "
";
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["unecat"]) {
            // line 16
            echo "
        <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_articles_cat", array("name" => $this->getAttribute($this->getContext($context, "unecat"), "nom"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unecat"), "nom"), "html", null, true);
            echo "</a></li>
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unecat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "        <div class=\"article\">
            <span  class=\"entry-title\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></span>
            <br>
            <span id=\"article_date\">Publié le ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "html", null, true);
            echo "</span>
            <hr>
                <br>
                ";
            // line 32
            echo $this->getAttribute($this->getContext($context, "article"), "contenu");
            echo "
        </div>
        <div class=\"separator\">&nbsp;</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "EchecspageBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  109 => 29,  102 => 27,  99 => 26,  94 => 25,  91 => 24,  86 => 20,  75 => 17,  72 => 16,  68 => 15,  65 => 14,  62 => 13,  57 => 10,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
