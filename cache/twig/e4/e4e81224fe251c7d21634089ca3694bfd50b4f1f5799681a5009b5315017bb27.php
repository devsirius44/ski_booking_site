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

/* partials/header.search.short.html.twig */
class __TwigTemplate_98ef29ca955bf02394e9f53677229c42f48a3fdc3d8e3768ceec25e3c6335a8d extends \Twig\Template
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
        echo "<!-- SECTION IMAGE FULLSCREEN -->
<section class=\"fullscreen\">
    <div class=\"fullscreen-image short\">
        <img src=\"";
        // line 4
        if ($this->getAttribute(($context["header"] ?? null), "image", [])) {
            echo "/user/themes/skigulmarg";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "image", []), "html");
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/slider/1/background-large.jpg");
        }
        echo "\" alt=\"Skigulmarg.com\" srcset=\"";
        if ($this->getAttribute(($context["header"] ?? null), "imageSmall", [])) {
            echo "/user/themes/skigulmarg";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "imageSmall", []), "html");
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/slider/1/background-small.jpg");
        }
        echo " 480w,";
        if ($this->getAttribute(($context["header"] ?? null), "imageMedium", [])) {
            echo "/user/themes/skigulmarg";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "imageMedium", []), "html");
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/slider/1/background-medium.jpg");
        }
        echo " 992w,";
        if ($this->getAttribute(($context["header"] ?? null), "image", [])) {
            echo "/user/themes/skigulmarg";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "image", []), "html");
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/slider/1/background-large.jpg");
        }
        echo " 1281w\" sizes=\"(max-width: 480px) 480px,(max-width: 991px) 992px,1281px\">
    </div>
    <div class=\"container\"> <!--  style=\"height:1px\" -->
        <div class=\"search short\">
            <div class=\"search-content\">
                <h3 data-animation=\"fadeInUp\" data-animation-delay=\"200\" style=\"font-size:1em;line-height:1.5em;text-transform:uppercase\">
                    ";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "HEADER_SEARCH.P_BOTTOM");
        echo "
                </h3>

                ";
        // line 13
        $this->loadTemplate("partials/searchbox.html.twig", "partials/header.search.short.html.twig", 13)->display(twig_array_merge($context, ["placeholder" => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SEARCH.PLACEHOLDER")]));
        // line 14
        echo "            </div>
        </div>
    </div>
</section>
<!-- end: SECTION IMAGE FULLSCREEN -->
";
    }

    public function getTemplateName()
    {
        return "partials/header.search.short.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  76 => 13,  70 => 10,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- SECTION IMAGE FULLSCREEN -->
<section class=\"fullscreen\">
    <div class=\"fullscreen-image short\">
        <img src=\"{% if header.image %}/user/themes/skigulmarg{{ header.image|e('html') }}{% else %}{{ url('theme://images/slider/1/background-large.jpg') }}{% endif %}\" alt=\"Skigulmarg.com\" srcset=\"{% if header.imageSmall %}/user/themes/skigulmarg{{ header.imageSmall|e('html') }}{% else %}{{ url('theme://images/slider/1/background-small.jpg') }}{% endif %} 480w,{% if header.imageMedium %}/user/themes/skigulmarg{{ header.imageMedium|e('html') }}{% else %}{{ url('theme://images/slider/1/background-medium.jpg') }}{% endif %} 992w,{% if header.image %}/user/themes/skigulmarg{{ header.image|e('html') }}{% else %}{{ url('theme://images/slider/1/background-large.jpg') }}{% endif %} 1281w\" sizes=\"(max-width: 480px) 480px,(max-width: 991px) 992px,1281px\">
    </div>
    <div class=\"container\"> <!--  style=\"height:1px\" -->
        <div class=\"search short\">
            <div class=\"search-content\">
                <h3 data-animation=\"fadeInUp\" data-animation-delay=\"200\" style=\"font-size:1em;line-height:1.5em;text-transform:uppercase\">
                    {{ \"HEADER_SEARCH.P_BOTTOM\"|t }}
                </h3>

                {% include 'partials/searchbox.html.twig' with {'placeholder': \"SEARCH.PLACEHOLDER\"|t} %}
            </div>
        </div>
    </div>
</section>
<!-- end: SECTION IMAGE FULLSCREEN -->
", "partials/header.search.short.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\header.search.short.html.twig");
    }
}
