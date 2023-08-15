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

/* partials/userinfo-avatar.html.twig */
class __TwigTemplate_7700058cd7928e4da7a5ff8bb809f0c76d9946697b9a8f1c959c880739eb01b8 extends \Twig\Template
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
        // line 1
        $context["user_avatar"] = $this->getAttribute(($context["data"] ?? null), "getAvatarUrl", [], "method");
        // line 2
        echo "<label><img referrerpolicy=\"no-referrer\" src=\"";
        echo twig_escape_filter($this->env, (($context["user_avatar"] ?? null) . "?s=200"), "html", null, true);
        echo "\" /></label>
";
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set user_avatar = data.getAvatarUrl() %}
<label><img referrerpolicy=\"no-referrer\" src=\"{{ user_avatar ~ '?s=200' }}\" /></label>
", "partials/userinfo-avatar.html.twig", "/var/www/html/csss1/user/plugins/admin/themes/grav/templates/partials/userinfo-avatar.html.twig");
    }
}
