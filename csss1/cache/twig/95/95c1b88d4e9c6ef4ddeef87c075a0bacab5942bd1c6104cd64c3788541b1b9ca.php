<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_4947722f7155bb6650c1a5f0eabf43f0c25d1c6b555f9e250ca4dade97659f1f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('assets', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('bottom', $context, $blocks);
        // line 65
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 28
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 30
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        $this->displayBlock('header_navigation', $context, $blocks);
    }

    public function block_header_navigation($context, array $blocks = [])
    {
        // line 37
        echo "        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
                ";
        // line 39
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "            </nav>
        </div>
    ";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        // line 46
        echo "    <section id=\"body\" class=\"pt-4\">
        <div class=\"wrapper padding container\">
        ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "        </div>
    </section>
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        // line 54
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            ";
        // line 57
        echo "            <p>Developed by Ruan Erasmus</p>
        </div>
    </div>
";
    }

    // line 62
    public function block_bottom($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
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
        return array (  234 => 63,  231 => 62,  224 => 57,  220 => 54,  217 => 53,  212 => 48,  206 => 49,  204 => 48,  200 => 46,  197 => 45,  191 => 40,  189 => 39,  185 => 37,  178 => 36,  175 => 35,  168 => 30,  163 => 29,  160 => 28,  150 => 25,  147 => 24,  142 => 21,  139 => 20,  136 => 19,  133 => 18,  125 => 13,  121 => 12,  118 => 11,  116 => 10,  105 => 6,  102 => 5,  99 => 4,  91 => 65,  89 => 62,  86 => 61,  84 => 53,  81 => 52,  79 => 45,  76 => 44,  74 => 35,  69 => 33,  66 => 32,  64 => 28,  61 => 27,  59 => 24,  56 => 23,  54 => 18,  51 => 17,  49 => 4,  44 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
    {% do assets.addCss('theme://css/custom.css', 98) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes|e }}\">

{% block header %}
    {% block header_navigation %}
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
                {% include 'partials/navigation.html.twig' %}
            </nav>
        </div>
    {% endblock %}
{% endblock %}

{% block body %}
    <section id=\"body\" class=\"pt-4\">
        <div class=\"wrapper padding container\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            {# <p><a href=\"https://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"https://trilby.media\">Trilby Media, LLC</a>.</p> #}
            <p>Developed by Ruan Erasmus</p>
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav-admin/user/themes/cleantest/templates/partials/base.html.twig");
    }
    private $deferred;
}
