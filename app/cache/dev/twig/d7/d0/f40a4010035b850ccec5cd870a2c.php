<?php

/* EchecspageBundle:Articles:show.html.twig */
class __TwigTemplate_d7d0f40a4010035b850ccec5cd870a2c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
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
        echo "        <div class=\"article\">
            <span  class=\"entry-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</span>
            <br>
            <span id=\"article_date\">Publié le ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "AuteurId"), "html", null, true);
        echo " </span>
            <hr>
                <br>
                ";
        // line 31
        echo $this->getAttribute($this->getContext($context, "article"), "contenu");
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "EchecspageBundle:Articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  102 => 28,  97 => 26,  94 => 25,  91 => 24,  86 => 20,  75 => 17,  72 => 16,  68 => 15,  65 => 14,  62 => 13,  57 => 10,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
