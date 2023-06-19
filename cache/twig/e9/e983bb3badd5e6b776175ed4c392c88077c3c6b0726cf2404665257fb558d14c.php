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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_ba6a4406291b154b0fe0d4c6e073b8fdd114a6f10337d720d715b148676b9676 extends \Twig\Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", []))) {
            // line 6
            echo "<div class=\"container\">
    <div id=\"breadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 9
                echo "            ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 10
                    echo "                ";
                    if ($this->getAttribute($context["crumb"], "routable", [])) {
                        // line 11
                        echo "                    ";
                        if ($this->getAttribute($context["loop"], "first", [])) {
                            // line 12
                            echo "                        <a href=\"";
                            echo $this->getAttribute($context["crumb"], "url", []);
                            echo "\" itemprop=\"url\"><span itemprop=\"title\">Home</span></a>
                    ";
                        } else {
                            // line 14
                            echo "                        ";
                            if ((twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($context["crumb"], "url", []), "/")) == twig_lower_filter($this->env, $this->getAttribute($context["crumb"], "menu", [])))) {
                                // line 15
                                echo "                            <span itemprop=\"title\">";
                                echo twig_join_filter(twig_split_filter($this->env, $this->getAttribute($context["crumb"], "menu", []), "-"), " ");
                                echo "</span>
                        ";
                            } else {
                                // line 17
                                echo "                            <a href=\"";
                                echo $this->getAttribute($context["crumb"], "url", []);
                                echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                                echo $this->getAttribute($context["crumb"], "menu", []);
                                echo "</span></a>
                        ";
                            }
                            // line 19
                            echo "                    ";
                        }
                        // line 20
                        echo "                ";
                    } else {
                        // line 21
                        echo "                    <span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                ";
                    }
                    // line 23
                    echo "                <i class=\"";
                    echo ($context["divider"] ?? null);
                    echo "\"></i>
            ";
                } else {
                    // line 25
                    echo "                ";
                    if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "link_trailing", [])) {
                        // line 26
                        echo "                    <a href=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span></a>
                ";
                    } else {
                        // line 28
                        echo "                    <span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
                ";
                    }
                    // line 30
                    echo "            ";
                }
                // line 31
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 32,  132 => 31,  129 => 30,  123 => 28,  115 => 26,  112 => 25,  106 => 23,  100 => 21,  97 => 20,  94 => 19,  86 => 17,  80 => 15,  77 => 14,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<div class=\"container\">
    <div id=\"breadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
        {% for crumb in crumbs %}
            {% if not loop.last %}
                {% if crumb.routable %}
                    {% if loop.first %}
                        <a href=\"{{ crumb.url }}\" itemprop=\"url\"><span itemprop=\"title\">Home</span></a>
                    {% else  %}
                        {% if crumb.url|split('/')|last == crumb.menu|lower %}
                            <span itemprop=\"title\">{{ crumb.menu|split('-')|join(' ') }}</span>
                        {% else  %}
                            <a href=\"{{ crumb.url }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a>
                        {% endif %}
                    {% endif %}
                {% else  %}
                    <span itemprop=\"title\">{{ crumb.menu }}</span>
                {% endif %}
                <i class=\"{{ divider }}\"></i>
            {% else %}
                {% if breadcrumbs_config.link_trailing %}
                    <a href=\"{{ crumb.url }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a>
                {% else %}
                    <span itemprop=\"title\">{{ crumb.menu }}</span>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
</div>
{% endif %}
", "partials/breadcrumbs.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\breadcrumbs.html.twig");
    }
}
