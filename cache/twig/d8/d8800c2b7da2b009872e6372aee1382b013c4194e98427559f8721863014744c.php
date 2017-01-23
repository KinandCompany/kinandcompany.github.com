<?php

/* home.html.twig */
class __TwigTemplate_219c0f0a97f0c2dd0342abcd9c3aa449b544bb57e186263e69ad9ff8bf2749ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "

<div class=\"slider-container\">
\t<span id=\"slider-next\"></span>
\t<span id=\"slider-prev\"></span>
\t<div class=\"bxslider\">
\t\t ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("hierarchy" => array(0 => "homepage"))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "\t\t\t\t ";
                if ((((((((((((($context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage.png", array(), "array")) || (                // line 13
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage.jpg", array(), "array"))) || (                // line 14
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage1.png", array(), "array"))) || (                // line 15
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage1.jpg", array(), "array"))) || (                // line 16
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage2.png", array(), "array"))) || (                // line 17
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage2.jpg", array(), "array"))) || (                // line 18
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage3.png", array(), "array"))) || (                // line 19
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage3.jpg", array(), "array"))) || (                // line 20
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage4.png", array(), "array"))) || (                // line 21
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage4.jpg", array(), "array"))) || (                // line 22
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage5.png", array(), "array"))) || (                // line 23
$context["image"] == $this->getAttribute($this->getAttribute($context["page"], "media", array()), "homepage5.jpg", array(), "array")))) {
                    // line 24
                    echo "\t

\t\t\t\t\t <div class=\"slide-item\">
\t\t\t\t\t \t";
                    // line 27
                    if (($context["page"] != $this->getAttribute($context["page"], "find", array(0 => "/"), "method"))) {
                        // line 28
                        echo "\t\t\t\t   \t\t<a href=\"";
                        echo $this->getAttribute($context["page"], "url", array());
                        echo "\">";
                        echo $this->getAttribute($context["image"], "html", array());
                        echo "</a>
\t\t\t\t   \t\t";
                        // line 30
                        echo "\t\t\t\t   \t\t";
                    } else {
                        // line 31
                        echo "\t\t\t\t   \t\t";
                        echo $this->getAttribute($context["image"], "html", array());
                        echo "
\t\t\t\t   \t\t";
                    }
                    // line 33
                    echo "\t\t\t\t   \t</div>
\t   \t\t\t";
                }
                // line 35
                echo "\t   \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>
\t<span class=\"home-next\">Next</span>
\t<span class=\"home-prev\">Prev</span>
\t";
        // line 45
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 45,  101 => 37,  95 => 36,  89 => 35,  85 => 33,  79 => 31,  76 => 30,  69 => 28,  67 => 27,  62 => 24,  60 => 23,  59 => 22,  58 => 21,  57 => 20,  56 => 19,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 14,  50 => 13,  48 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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


<div class=\"slider-container\">
\t<span id=\"slider-next\"></span>
\t<span id=\"slider-prev\"></span>
\t<div class=\"bxslider\">
\t\t {% for page in taxonomy.findTaxonomy({'hierarchy':['homepage']}) %}
\t\t\t {% for image in page.media.images %}
\t\t\t\t {% if \timage == page.media['homepage.png'] or
\t\t\t\t \t\timage == page.media['homepage.jpg'] or
\t\t\t\t \t\timage == page.media['homepage1.png'] or
\t\t\t\t \t\timage == page.media['homepage1.jpg'] or
\t\t\t\t \t\timage == page.media['homepage2.png'] or
\t\t\t\t \t\timage == page.media['homepage2.jpg'] or
\t\t\t\t \t\timage == page.media['homepage3.png'] or
\t\t\t\t \t\timage == page.media['homepage3.jpg'] or
\t\t\t\t \t\timage == page.media['homepage4.png'] or
\t\t\t\t \t\timage == page.media['homepage4.jpg'] or
\t\t\t\t \t\timage == page.media['homepage5.png'] or
\t\t\t\t \t\timage == page.media['homepage5.jpg']
\t\t\t\t  %}\t

\t\t\t\t\t <div class=\"slide-item\">
\t\t\t\t\t \t{% if page != page.find('/') %}
\t\t\t\t   \t\t<a href=\"{{ page.url }}\">{{image.html}}</a>
\t\t\t\t   \t\t{# <div class=\"slide-caption\">{{ page.title }}</div> #}
\t\t\t\t   \t\t{% else %}
\t\t\t\t   \t\t{{image.html}}
\t\t\t\t   \t\t{% endif %}
\t\t\t\t   \t</div>
\t   \t\t\t{% endif %}
\t   \t\t{% endfor %}
\t\t{% endfor %}
\t</div>
\t<span class=\"home-next\">Next</span>
\t<span class=\"home-prev\">Prev</span>
\t{#
\t<div class=\"slider-controls\">
\t\t<div class=\"slider-pager\"></div>
\t</div>
\t#}
</div>


{% endblock %}


", "home.html.twig", "/Applications/MAMP/htdocs/kin-grav/user/themes/kin/templates/home.html.twig");
    }
}
