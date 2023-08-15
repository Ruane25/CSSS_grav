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

/* partials/navigation.html.twig */
class __TwigTemplate_3e1f56979d96697d9dac2f2fa03b06f341ccca1b953aa787600fc8307973e343 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
<div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
        <img src=\"/user/themes/cleantest/images/csssNewLogo.png\" alt=\"\" width=\"70\" height=\"70\" class=\"d-inline-block align-text-top\">
        
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            ";
        // line 39
        echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null), 1 => 0], "method");
        echo "
        </ul>
    </div>
</div>";
    }

    // line 1
    public function getloop($__page__ = null, $__num__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "num" => $__num__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "                <li class=\"has-children ";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                    echo " nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li class=\"nav-item\">
                            <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\" class=\" dropdown-item\">
                                ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                            </a>
                        </li>
                        ";
                    // line 15
                    echo $this->getAttribute($this, "loop", [0 => $context["p"], 1 => 1], "method");
                    echo "
                    </ul>
                </li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"nav-item\">
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []));
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null));
                    echo " ";
                    if ((($context["num"] ?? null) == 1)) {
                        echo "dropdown-item";
                    } else {
                        echo "nav-link";
                    }
                    echo "\">
                        ";
                    // line 21
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []));
                        echo "\"></i>";
                    }
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []));
                    echo "
                    </a>
                </li>
            ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  126 => 22,  120 => 21,  108 => 20,  105 => 19,  98 => 15,  92 => 12,  88 => 11,  81 => 7,  75 => 5,  72 => 4,  69 => 3,  64 => 2,  51 => 1,  43 => 39,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page, num) %}
    {% for p in page.children.visible %}
            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
            {% if p.children.visible.count > 0 %}
                <li class=\"has-children {{ current_page|e }} nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{ p.menu|e }}
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li class=\"nav-item\">
                            <a href=\"{{ p.url|e }}\" class=\" dropdown-item\">
                                {{ p.menu|e }}
                            </a>
                        </li>
                        {{ _self.loop(p, 1) }}
                    </ul>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a href=\"{{ p.url|e }}\" class=\"{{ current_page|e }} {% if num == 1 %}dropdown-item{% else %}nav-link{% endif %}\">
                        {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon|e }}\"></i>{% endif %}
                        {{ p.menu|e }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
{% endmacro %}

<div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
        <img src=\"/user/themes/cleantest/images/csssNewLogo.png\" alt=\"\" width=\"70\" height=\"70\" class=\"d-inline-block align-text-top\">
        
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            {{ _self.loop(pages, 0) }}
        </ul>
    </div>
</div>", "partials/navigation.html.twig", "/var/www/html/grav-admin/user/themes/cleantest/templates/partials/navigation.html.twig");
    }
}
