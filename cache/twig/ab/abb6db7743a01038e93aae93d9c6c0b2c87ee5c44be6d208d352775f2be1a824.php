<?php

/* partials/base.html.twig */
class __TwigTemplate_702d4cfd6d867f8771243e05ec1666cb8bf14ebf41bcc90e063f268ffec79d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('bottom', $context, $blocks);
        // line 68
        echo "
</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/ico\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "http://yui.yahooapis.com/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 20
        echo "
    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.bxslider.js"), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/custom.js"), "method");
        // line 28
        echo "    ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo\" href=\"";
        // line 38
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <img src=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/kinandco.png");
        echo "\" class=\"kin-logo\"/>
            </a>
            ";
        // line 41
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "        </div>
    </div>
";
    }

    // line 41
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 42
        echo "            <nav class=\"main-nav\">
                ";
        // line 43
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "            </nav>
            ";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
    </section>
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
        </div>
    </div>
";
    }

    // line 65
    public function block_bottom($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 66,  221 => 65,  213 => 59,  210 => 58,  205 => 53,  199 => 54,  197 => 53,  193 => 51,  190 => 50,  185 => 44,  183 => 43,  180 => 42,  177 => 41,  171 => 46,  169 => 41,  164 => 39,  160 => 38,  156 => 36,  153 => 35,  149 => 28,  146 => 27,  143 => 26,  140 => 25,  137 => 24,  132 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  112 => 29,  110 => 24,  104 => 22,  102 => 16,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  65 => 68,  63 => 65,  60 => 64,  58 => 58,  55 => 57,  53 => 50,  50 => 49,  48 => 35,  43 => 33,  40 => 32,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/ico\" href=\"{{ url('theme://images/favicon.ico') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}

    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/jquery.bxslider.js') %}
        {% do assets.addJs('theme://js/custom.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <img src=\"{{ url('theme://images/kinandco.png') }}\" class=\"kin-logo\"/>
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/kin-grav/user/themes/kin/templates/partials/base.html.twig");
    }
}
