<?php

/* info.html.twig */
class __TwigTemplate_0cff5b1e3a835ca5f9e80594b56ee578b61d007df3120d9f8fbb87460e54e9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "info.html.twig", 1);
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
        echo "<div class=\"project-wrapper\">
\t<div class=\"info-content\">
    ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"project-wrapper\">
\t<div class=\"info-content\">
    {{ page.content }}
\t</div>
</div>
{% endblock %}
", "info.html.twig", "/Applications/MAMP/htdocs/kin-grav/user/themes/kin/templates/info.html.twig");
    }
}
