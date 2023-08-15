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
class __TwigTemplate_a140b7fc7cd361046a6759d0186ca1117d4967d2063be42f219c8b9436448c32 extends \Twig\Template
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
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('assets', $context, $blocks);
        // line 33
        echo "</head>
<body id=\"top\" class=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('bottom', $context, $blocks);
        // line 67
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
    ";
        // line 7
        echo "    <title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo "CSSS</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/csssNewLogo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 29
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $this->displayBlock('header_navigation', $context, $blocks);
    }

    public function block_header_navigation($context, array $blocks = [])
    {
        // line 38
        echo "        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light \">
                ";
        // line 40
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "            </nav>
        </div>
    ";
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        // line 47
        echo "    <section id=\"body\" class=\"pt-4\">
        <div class=\"wrapper padding container\" id=\"wrap\" style=\"background-color: #ffffffb0;\">
        ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        </div>
    </section>
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"footer text-center\">
        <hr />
        <div class=\"wrapper padding\">
            ";
        // line 59
        echo "            <p>Computer Science Students Society</p>
        </div>
    </div>
";
    }

    // line 64
    public function block_bottom($context, array $blocks = [])
    {
        // line 65
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
        return array (  235 => 65,  232 => 64,  225 => 59,  220 => 55,  217 => 54,  212 => 49,  206 => 50,  204 => 49,  200 => 47,  197 => 46,  191 => 41,  189 => 40,  185 => 38,  178 => 37,  175 => 36,  168 => 31,  163 => 30,  160 => 29,  150 => 26,  147 => 25,  142 => 22,  139 => 21,  136 => 20,  133 => 19,  125 => 14,  121 => 13,  118 => 12,  116 => 11,  105 => 7,  102 => 5,  99 => 4,  91 => 67,  89 => 64,  86 => 63,  84 => 54,  81 => 53,  79 => 46,  76 => 45,  74 => 36,  69 => 34,  66 => 33,  64 => 29,  61 => 28,  59 => 25,  56 => 24,  54 => 19,  51 => 18,  49 => 4,  44 => 2,  41 => 1,);
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
    {# <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title> #}
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}CSSS</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/csssNewLogo.png')|e }}\" />
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
        <div class=\"wrapper padding container\" id=\"wrap\" style=\"background-color: #ffffffb0;\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <hr />
        <div class=\"wrapper padding\">
            {# <p><a href=\"https://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"https://trilby.media\">Trilby Media, LLC</a>.</p> #}
            <p>Computer Science Students Society</p>
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/html/csss1/user/themes/cleantest/templates/partials/base.html.twig");
    }
    private $deferred;
}
