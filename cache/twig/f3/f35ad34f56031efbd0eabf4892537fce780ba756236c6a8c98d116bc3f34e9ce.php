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

/* partials/searchbox.html.twig */
class __TwigTemplate_70c9450d7f6548b2e442c629930c24701182e697f01d5a4deaeba13b251baed3 extends \Twig\Template
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
        // line 2
        echo " <div class=\"search-form\">
    <form name=\"search\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            ";
        // line 9
        echo "            required
            placeholder=\"";
        // line 10
        echo ($context["placeholder"] ?? null);
        echo "\"
            onfocus=\"this.placeholder = ''\"
            onblur=\"this.placeholder = '";
        // line 12
        echo ($context["placeholder"] ?? null);
        echo "'\"
            value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\"
            ";
        // line 15
        echo "            data-search-separator=\"";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "\"
            data-search-input=\"";
        // line 16
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", [])))));
        echo "/query\"
        />
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "display_button", [])) {
            // line 19
            echo "            <button type=\"submit\">
                <i class=\"fa fa-search\"></i>
            </button>
        ";
        }
        // line 23
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  67 => 19,  65 => 18,  59 => 16,  54 => 15,  50 => 13,  46 => 12,  41 => 10,  38 => 9,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# {% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %} #}
 <div class=\"search-form\">
    <form name=\"search\" data-simplesearch-form>
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            {# {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %} #}
            required
            placeholder=\"{{- placeholder -}}\"
            onfocus=\"this.placeholder = ''\"
            onblur=\"this.placeholder = '{{- placeholder -}}'\"
            value=\"{{ query|e }}\"
            {# data-search-invalid=\"{{ \"SEARCH.FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\" #}
            data-search-separator=\"{{ config.system.param_sep }}\"
            data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button type=\"submit\">
                <i class=\"fa fa-search\"></i>
            </button>
        {% endif %}
    </form>
</div>
", "partials/searchbox.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\searchbox.html.twig");
    }
}
