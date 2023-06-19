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

/* nosidebar.html.twig */
class __TwigTemplate_35442cadddb413e86a19e70f7c6fc15d9d68065b2f89cf1a41b8d79d1d8739b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
            'customScripts' => [$this, 'block_customScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "nosidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
<!-- Header Search -->
";
        // line 6
        $this->loadTemplate("partials/header.search.short.html.twig", "nosidebar.html.twig", 6)->display($context);
        // line 7
        echo "<!-- end: Search -->

<!-- Breadcrumbs -->
";
        // line 10
        $this->loadTemplate("partials/breadcrumbs.html.twig", "nosidebar.html.twig", 10)->display($context);
        // line 11
        echo "<!-- end: Breadcrumbs -->

<!-- Content -->
<section id=\"page-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-push-0 col-md-push-2 col-lg-push-1 col-md-8 col-lg-10\">
                ";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                <!-- AddToAny BEGIN -->
                <h5 class=\"m-t-40\">";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SHARE");
        echo "</h5>
\t\t\t\t<div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
\t\t\t\t\t<a class=\"a2a_dd\" href=\"https://www.addtoany.com/share\"></a>
\t\t\t\t\t<a class=\"a2a_button_facebook\"></a>
\t\t\t\t\t<a class=\"a2a_button_facebook_messenger\"></a>
\t\t\t\t\t<a class=\"a2a_button_whatsapp\"></a>
\t\t\t\t\t<a class=\"a2a_button_email\"></a>
\t\t\t\t\t<a class=\"a2a_button_copy_link\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- AddToAny END -->
            </div>
        </div>
    </div>
</section>
<!-- end: Content -->

";
    }

    // line 38
    public function block_scripts($context, array $blocks = [])
    {
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//static.addtoany.com/menu/page.js"], "method");
        // line 40
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//www.cheapflights.com/api/v1"], "method");
        // line 41
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/international-telephone-input.js"], "method");
        // line 42
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/yanformact.js"], "method");
        // line 43
        echo "
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a6e5e2d8-bfbb-4a7f-9bfb-c9c0d5e48f3d', f: true }); done = true; } }; })();</script>

";
    }

    // line 48
    public function block_customScripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "nosidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  107 => 43,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  92 => 38,  71 => 20,  66 => 18,  57 => 11,  55 => 10,  50 => 7,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}

<!-- Header Search -->
{% include 'partials/header.search.short.html.twig' %}
<!-- end: Search -->

<!-- Breadcrumbs -->
{% include 'partials/breadcrumbs.html.twig' %}
<!-- end: Breadcrumbs -->

<!-- Content -->
<section id=\"page-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-push-0 col-md-push-2 col-lg-push-1 col-md-8 col-lg-10\">
                {{ page.content }}
                <!-- AddToAny BEGIN -->
                <h5 class=\"m-t-40\">{{ \"SHARE\"|t }}</h5>
\t\t\t\t<div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
\t\t\t\t\t<a class=\"a2a_dd\" href=\"https://www.addtoany.com/share\"></a>
\t\t\t\t\t<a class=\"a2a_button_facebook\"></a>
\t\t\t\t\t<a class=\"a2a_button_facebook_messenger\"></a>
\t\t\t\t\t<a class=\"a2a_button_whatsapp\"></a>
\t\t\t\t\t<a class=\"a2a_button_email\"></a>
\t\t\t\t\t<a class=\"a2a_button_copy_link\"></a>
\t\t\t\t</div>
\t\t\t\t<!-- AddToAny END -->
            </div>
        </div>
    </div>
</section>
<!-- end: Content -->

{% endblock %}

{% block scripts %}
    {% do assets.addJs('//static.addtoany.com/menu/page.js') %}
    {% do assets.addJs('//www.cheapflights.com/api/v1') %}
    {% do assets.addJs('theme://js/international-telephone-input.js') %}
    {% do assets.addJs('theme://js/yanformact.js') %}

    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a6e5e2d8-bfbb-4a7f-9bfb-c9c0d5e48f3d', f: true }); done = true; } }; })();</script>

{% endblock %}

{% block customScripts %}{% endblock %}
", "nosidebar.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\nosidebar.html.twig");
    }
}
