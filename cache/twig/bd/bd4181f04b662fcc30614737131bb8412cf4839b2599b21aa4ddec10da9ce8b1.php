<?php

/* index2.html.twig */
class __TwigTemplate_9f8ab8e6e8c543743fe16c2c53c78e24d8f3995c15e5c6382d2875c3223a5423 extends Twig_Template
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
        $this->loadTemplate("index2.html.twig", "index2.html.twig", 1, "482867412")->display($context);
        // line 21
        echo "

";
    }

    public function getTemplateName()
    {
        return "index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 21,  19 => 1,);
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

\t\t<div class=\"project-index all\">
\t\t{% for p in page.collection %}
\t\t\t\t<div class=\"project-teaser {%if p.taxonomy.tag != custom %}custom{% endif %}\">
\t\t\t\t\t<a class=\"project-thumb\" href=\"{{ p.url }}\">{{ p.media['thumb.jpg'] }}</a>
\t\t\t\t\t<span class=\"project-title\"><a href=\"{{ p.url }}\">{{ p.title }}</a></span>
\t\t\t\t</div>
\t\t{% endfor %}
\t\t</div>
\t\t

\t{% endblock %}
\t

{% endembed %}


", "index2.html.twig", "/home/lleigha/kin.leigha.tv/user/themes/kin/templates/index2.html.twig");
    }
}


/* index2.html.twig */
class __TwigTemplate_9f8ab8e6e8c543743fe16c2c53c78e24d8f3995c15e5c6382d2875c3223a5423_482867412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "index2.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t<div class=\"project-index all\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "\t\t\t\t<div class=\"project-teaser ";
            if (($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()) != (isset($context["custom"]) ? $context["custom"] : null))) {
                echo "custom";
            }
            echo "\">
\t\t\t\t\t<a class=\"project-thumb\" href=\"";
            // line 10
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute($context["p"], "media", array()), "thumb.jpg", array(), "array");
            echo "</a>
\t\t\t\t\t<span class=\"project-title\"><a href=\"";
            // line 11
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></span>
\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</div>
\t\t

\t";
    }

    public function getTemplateName()
    {
        return "index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 14,  127 => 11,  121 => 10,  114 => 9,  110 => 8,  106 => 6,  103 => 5,  86 => 1,  21 => 21,  19 => 1,);
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

\t\t<div class=\"project-index all\">
\t\t{% for p in page.collection %}
\t\t\t\t<div class=\"project-teaser {%if p.taxonomy.tag != custom %}custom{% endif %}\">
\t\t\t\t\t<a class=\"project-thumb\" href=\"{{ p.url }}\">{{ p.media['thumb.jpg'] }}</a>
\t\t\t\t\t<span class=\"project-title\"><a href=\"{{ p.url }}\">{{ p.title }}</a></span>
\t\t\t\t</div>
\t\t{% endfor %}
\t\t</div>
\t\t

\t{% endblock %}
\t

{% endembed %}


", "index2.html.twig", "/home/lleigha/kin.leigha.tv/user/themes/kin/templates/index2.html.twig");
    }
}
