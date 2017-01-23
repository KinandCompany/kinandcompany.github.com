<?php

/* default.html.twig */
class __TwigTemplate_6642ec6c60041c1e74a04fa1b6d07467df508772e952adb7a78f21621120fed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        echo "\t
<div class=\"project-wrapper\">
\t";
        // line 7
        echo "\t<div class=\"project-content\">
    ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t</div>
\t<div class=\"project-pager\">
\t";
        // line 14
        echo "\t\t";
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 15
            echo "\t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\">Next</a>
\t\t";
        }
        // line 17
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  47 => 15,  44 => 14,  38 => 8,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t
<div class=\"project-wrapper\">
\t{# <h2>{{page.title}}</h2> #}
\t<div class=\"project-content\">
    {{ page.content }}
\t</div>
\t<div class=\"project-pager\">
\t{#\t{% if not page.isFirst %}
\t\t<a href=\"{{ page.nextSibling.url }}\">Previous</a>
\t\t{% endif %} #}
\t\t{% if not page.isLast %}
\t\t<a href=\"{{ page.prevSibling.url }}\">Next</a>
\t\t{% endif %}

\t</div>
</div>
{% endblock %}
", "default.html.twig", "/Applications/MAMP/htdocs/kin-grav/user/themes/kin/templates/default.html.twig");
    }
}
