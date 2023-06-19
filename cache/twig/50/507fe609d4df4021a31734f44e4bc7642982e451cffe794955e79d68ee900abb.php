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

/* partials/langswitcher.html.twig */
class __TwigTemplate_2e0f601708d2a6afa88df49c480789bdf45764394caf11c869ae0b55b872f389 extends \Twig\Template
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
        echo "<span class=\"language-label\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LANGUAGE");
        echo ": </span>
<div class=\"dropdown\">
    <button type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
        // line 4
        $context["current_lang"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []);
        // line 5
        echo "        ";
        if ((($context["current_lang"] ?? null) == "")) {
            // line 6
            echo "            English
        ";
        } elseif ((        // line 7
($context["current_lang"] ?? null) == "fr")) {
            // line 8
            echo "            Français
        ";
        } elseif ((        // line 9
($context["current_lang"] ?? null) == "zh-tw")) {
            // line 10
            echo "        繁體中文
        ";
        } elseif ((        // line 11
($context["current_lang"] ?? null) == "zh-cn")) {
            // line 12
            echo "        简体中文
        ";
        } elseif ((        // line 13
($context["current_lang"] ?? null) == "es")) {
            // line 14
            echo "            Español
        ";
        }
        // line 16
        echo "    </button>

    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 20
            echo "
            ";
            // line 21
            $context["show_language"] = true;
            // line 22
            echo "            ";
            if (($context["language"] == $this->getAttribute(($context["langswitcher"] ?? null), "current", []))) {
                // line 23
                echo "                ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
                // line 24
                echo "                ";
                $context["active_class"] = " active";
                // line 25
                echo "            ";
            } else {
                // line 26
                echo "                ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 27
                echo "                ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 28
                echo "                ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "langswitcher", []), "untranslated_pages_behavior", []);
                // line 29
                echo "                ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 30
                    echo "                    ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_pages", []), $context["language"], [], "array");
                    // line 31
                    echo "                    ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", []))) {
                        // line 32
                        echo "                        ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 33
                            echo "                            ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 34
                            echo "                        ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 35
                            echo "                            ";
                            $context["show_language"] = false;
                            // line 36
                            echo "                        ";
                        }
                        // line 37
                        echo "                    ";
                    }
                    // line 38
                    echo "                ";
                }
                // line 39
                echo "                ";
                $context["active_class"] = "";
                // line 40
                echo "            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if (($context["show_language"] ?? null)) {
                // line 43
                echo "                ";
                if ((($context["language"] == "en") && (($context["current_lang"] ?? null) != ""))) {
                    // line 44
                    echo "                    <a class=\"dropdown-item\" href=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                    echo "\" title=\"";
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "\">
                        ";
                    // line 45
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "
                    </a>
                ";
                } elseif (((                // line 47
$context["language"] == "fr") && (($context["current_lang"] ?? null) != "fr"))) {
                    // line 48
                    echo "                    <a class=\"dropdown-item\" href=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                    echo "\" title=\"";
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "\">
                        ";
                    // line 49
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "
                    </a>
                ";
                } elseif (((                // line 51
$context["language"] == "zh-tw") && (($context["current_lang"] ?? null) != "zh-tw"))) {
                    // line 52
                    echo "                    <a class=\"dropdown-item\" href=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                    echo "\" title=\"";
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "\">
                        繁體中文
                    </a>
                ";
                } elseif (((                // line 55
$context["language"] == "zh-cn") && (($context["current_lang"] ?? null) != "zh-cn"))) {
                    // line 56
                    echo "                    <a class=\"dropdown-item\" href=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                    echo "\" title=\"";
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "\">
                        简体中文
                    </a>
                ";
                } elseif (((                // line 59
$context["language"] == "es") && (($context["current_lang"] ?? null) != "es"))) {
                    // line 60
                    echo "                    <a class=\"dropdown-item\" href=\"/es\" title=\"";
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "\">
                        ";
                    // line 61
                    echo call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]);
                    echo "
                    </a>
                ";
                }
                // line 64
                echo "            ";
            }
            // line 65
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 67,  209 => 65,  206 => 64,  200 => 61,  195 => 60,  193 => 59,  184 => 56,  182 => 55,  173 => 52,  171 => 51,  166 => 49,  159 => 48,  157 => 47,  152 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 20,  71 => 19,  66 => 16,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"language-label\">{{ \"LANGUAGE\"|t }}: </span>
<div class=\"dropdown\">
    <button type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        {% set current_lang = grav.language.getActive %}
        {% if current_lang == '' %}
            English
        {% elseif current_lang == 'fr' %}
            Français
        {% elseif current_lang == 'zh-tw' %}
        繁體中文
        {% elseif current_lang == 'zh-cn' %}
        简体中文
        {% elseif current_lang == 'es' %}
            Español
        {% endif %}
    </button>

    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        {% for language in langswitcher.languages %}

            {% set show_language = true %}
            {% if language == langswitcher.current %}
                {% set lang_url = page.url %}
                {% set active_class = ' active' %}
            {% else %}
                {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
                {% set lang_url = base_lang_url ~ langswitcher.page_route ~ page.urlExtension %}
                {% set untranslated_pages_behavior = grav.config.plugins.langswitcher.untranslated_pages_behavior %}
                {% if untranslated_pages_behavior != 'none' %}
                    {% set translated_page = langswitcher.translated_pages[language] %}
                    {% if (not translated_page) or (not translated_page.published) %}
                        {% if untranslated_pages_behavior == 'redirect' %}
                            {% set lang_url = base_lang_url ~ '/' %}
                        {% elseif untranslated_pages_behavior == 'hide' %}
                            {% set show_language = false %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                {% set active_class = '' %}
            {% endif %}

            {% if show_language %}
                {% if language == 'en' and current_lang != '' %}
                    <a class=\"dropdown-item\" href=\"{{ lang_url ~ uri.params }}\" title=\"{{ native_name(language) }}\">
                        {{ native_name(language) }}
                    </a>
                {% elseif language == 'fr' and current_lang != 'fr' %}
                    <a class=\"dropdown-item\" href=\"{{ lang_url ~ uri.params }}\" title=\"{{ native_name(language) }}\">
                        {{ native_name(language) }}
                    </a>
                {% elseif language == 'zh-tw' and current_lang != 'zh-tw' %}
                    <a class=\"dropdown-item\" href=\"{{ lang_url ~ uri.params }}\" title=\"{{ native_name(language) }}\">
                        繁體中文
                    </a>
                {% elseif language == 'zh-cn' and current_lang != 'zh-cn' %}
                    <a class=\"dropdown-item\" href=\"{{ lang_url ~ uri.params }}\" title=\"{{ native_name(language) }}\">
                        简体中文
                    </a>
                {% elseif language == 'es' and current_lang != 'es' %}
                    <a class=\"dropdown-item\" href=\"/es\" title=\"{{ native_name(language) }}\">
                        {{ native_name(language) }}
                    </a>
                {% endif %}
            {% endif %}

        {% endfor %}
    </div>
</div>
", "partials/langswitcher.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\langswitcher.html.twig");
    }
}
