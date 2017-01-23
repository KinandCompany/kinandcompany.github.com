<?php

/* news.html.twig */
class __TwigTemplate_1c6727ed4b1572f1299301a9028a81c27be0e26870e9a778a49a844cfe8fb736 extends Twig_Template
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
        $this->loadTemplate("news.html.twig", "news.html.twig", 1, "904130441")->display($context);
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t<div class=\"project-wrapper\">

\t\t{% for p in page.collection %}
\t\t\t<div class=\"news-content\">

\t\t\t\t<div class=\"news-title\">{{ p.title }}</div>
\t\t\t\t{{ p.content }}

\t\t\t</div>
\t\t{% endfor %}
\t\t</div>

\t{% endblock %}

{% endembed %}", "news.html.twig", "/home/lleigha/kin.leigha.tv/user/themes/kin/templates/news.html.twig");
    }
}


/* news.html.twig */
class __TwigTemplate_1c6727ed4b1572f1299301a9028a81c27be0e26870e9a778a49a844cfe8fb736_904130441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "news.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"project-wrapper\">

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            echo "\t\t\t<div class=\"news-content\">

\t\t\t\t<div class=\"news-title\">";
            // line 9
            echo $this->getAttribute($context["p"], "title", array());
            echo "</div>
\t\t\t\t";
            // line 10
            echo $this->getAttribute($context["p"], "content", array());
            echo "

\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 14,  107 => 10,  103 => 9,  99 => 7,  95 => 6,  91 => 4,  88 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% block content %}
\t\t<div class=\"project-wrapper\">

\t\t{% for p in page.collection %}
\t\t\t<div class=\"news-content\">

\t\t\t\t<div class=\"news-title\">{{ p.title }}</div>
\t\t\t\t{{ p.content }}

\t\t\t</div>
\t\t{% endfor %}
\t\t</div>

\t{% endblock %}

{% endembed %}", "news.html.twig", "/home/lleigha/kin.leigha.tv/user/themes/kin/templates/news.html.twig");
    }
}
