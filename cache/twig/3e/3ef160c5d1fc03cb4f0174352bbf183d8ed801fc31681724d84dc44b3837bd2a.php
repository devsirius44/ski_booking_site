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
class __TwigTemplate_e44c9298695937eb773573371a00a30edb045d9bf4c770e58eac66a41274909e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'customStyles' => [$this, 'block_customStyles'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"ie ie6 ie7 ie-lt10 ie-lt9 ie-lt8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8 ie-lt10 ie-lt9 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9 ]><html class=\"ie ie9 ie-lt10 no-js\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--[if IE]> <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> <![endif]-->
    <meta name=\"robots\" content=\"index,follow\">
    <meta name=\"google-site-verification\" content=\"x_Hf0Q-RLfReYruJjnthcI7J-b9gsdtpbdqz2ojUt8k\">
    <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
    <meta name=\"author\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html");
        echo "\">
    <meta name=\"description\" content=\"";
        // line 16
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", []), "html");
        }
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "KEYWORDS");
        if ($this->getAttribute(($context["header"] ?? null), "keywords", [])) {
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "keywords", []), "html");
        }
        echo "\">
    <meta name=\"copyright\" content=\"Skigulmarg.com\"/>

    <!-- Document title -->
    <title>";
        // line 21
        if (($context["search_results"] ?? null)) {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SEARCH.RESULTS", "html");
            echo " | ";
        } elseif ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "TITLE");
        echo "</title>

    <!-- Links -->
    <link rel=\"canonical\" href=\"";
        // line 24
        echo ($context["base_url"] ?? null);
        if ($this->getAttribute(($context["header"] ?? null), "canonical", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "canonical", []), "html");
        }
        echo "\">
    <link rel=\"alternate\" href=\"";
        // line 25
        echo ($context["base_url"] ?? null);
        if ($this->getAttribute(($context["header"] ?? null), "alternate", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "alternate", []), "html");
        }
        echo "\" hreflang=\"";
        if ($this->getAttribute(($context["header"] ?? null), "alternateHrefLang", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "alternateHrefLang", []), "html");
        }
        echo "\">
    <link rel=\"alternate\" href=\"";
        // line 26
        echo ($context["base_url"] ?? null);
        if ($this->getAttribute(($context["header"] ?? null), "alternate2", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "alternate2", []), "html");
        }
        echo "\" hreflang=\"";
        if ($this->getAttribute(($context["header"] ?? null), "alternateHrefLang2", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "alternateHrefLang2", []), "html");
        }
        echo "\">
    <link rel=\"author\" href=\"https://plus.google.com/u/2/113991432665232479994/about\" title=\"Yanik Turgeon on Google+\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />

    <!-- Stylesheets & Fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,600%7CMontserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-53152277-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-53152277-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TR8FBDP');</script>
    <!-- End Google Tag Manager -->

    ";
        // line 63
        $this->displayBlock('customStyles', $context, $blocks);
        // line 64
        echo "
    <!-- Pageloader fix in case of disabled JavaScript -->
    <noscript>
        <style>
            /* Forcing opacity to 1 because preloader requires JS */
            body:not(.no-page-loader) #wrapper {
                opacity: 1;
            }
        </style>
    </noscript>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '617573335021722');
      fbq('track', 'PageView');
    </script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
      src=\"https://www.facebook.com/tr?id=617573335021722&ev=PageView&noscript=1\"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Popit 2020 annoncement  -->
 <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=cd79e1d505ded' async='true'></script>
 <!-- END Popit 2020 annoncement  -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TR8FBDP\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <h1 style=\"display:none\">Skigulmarg.com — The Most Complete Website about Gulmarg Ski Resort</h1>
    <noscript>
        <div class=\"no-javascript\">
            ";
        // line 104
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NOSCRIPT");
        echo "
        </div>
    </noscript>
    <!-- Wrapper -->
    <div id=\"wrapper\">
        <!-- Header -->
        ";
        // line 110
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 110)->display($context);
        // line 111
        echo "        <!-- end: Header -->

        ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "

        <!-- Footer -->
        ";
        // line 117
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 117)->display($context);
        // line 118
        echo "        <!-- end: Footer -->
    </div>
    <!-- end: Wrapper -->

    <!--Modal Cookie-->
    <div id=\"cookieNotify\" class=\"modal-strip modal-bottom cookie-notify\" data-delay=\"1000\" data-expire=\"30\" data-name=\"websiteCookiesPoloWeb\">
        <div class=\"container\">
            <div class=\"row\" style=\"position:relative\">
                <div class=\"col-md-8 text-sm-center sm-m-b-10\">
                    ";
        // line 127
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "COOKIES.MESSAGE");
        echo "
                    <a href=\"/legal/privacy-policies\" class=\"text-light\">
                        <span style=\"display:inline-block\">
                            ";
        // line 130
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "COOKIES.MORE");
        echo "<i class=\"fa fa-info-circle m-l-5\"></i>
                        </span>
                    </a>
                </div>
                <div class=\"col-md-4\">
                    <button type=\"button\" class=\"btn btn-rounded btn-sm m-r-10 modal-close\">
                        ";
        // line 136
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "COOKIES.DECLINE");
        echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-light btn-rounded btn-outline btn-sm modal-confirm\">
                        ";
        // line 139
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "COOKIES.ACCEPT");
        echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--End: Modal Cookie-->

    <!-- Go to top button -->
    <a id=\"goToTop\"><i class=\"fa fa-angle-up top-icon\"></i><i class=\"fa fa-angle-up\"></i></a>


    ";
        // line 151
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/plugins.js"], "method");
        // line 152
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/weather.min.js"], "method");
        // line 153
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/plugins/easyzoom/dist/easyzoom.js"], "method");
        // line 154
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugins://simplesearch/js/simplesearch.js"], "method");
        // line 155
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//skigulmarg.checkfront.com/lib/interface--32.js"], "method");
        // line 156
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdn.jsdelivr.net/momentjs/latest/moment.min.js"], "method");
        // line 157
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"], "method");
        // line 158
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"], "method");
        // line 159
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"], "method");
        // line 160
        echo "
    ";
        // line 161
        $this->displayBlock('scripts', $context, $blocks);
        // line 162
        echo "
    ";
        // line 163
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/functions.min.js"], "method");
        // line 164
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
</body>
</html>
";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/plugins.css"], "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/responsive.css"], "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.min.css"], "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.css"], "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css"], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/yanform.css"], "method");
        // line 42
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/international-telephone-input.css"], "method");
        // line 43
        echo "    ";
    }

    // line 63
    public function block_customStyles($context, array $blocks = [])
    {
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
    }

    // line 161
    public function block_scripts($context, array $blocks = [])
    {
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
        return array (  350 => 161,  345 => 113,  340 => 63,  336 => 43,  333 => 42,  330 => 41,  327 => 40,  324 => 39,  321 => 38,  318 => 37,  315 => 36,  312 => 35,  303 => 164,  301 => 163,  298 => 162,  296 => 161,  293 => 160,  290 => 159,  287 => 158,  284 => 157,  281 => 156,  278 => 155,  275 => 154,  272 => 153,  269 => 152,  267 => 151,  252 => 139,  246 => 136,  237 => 130,  231 => 127,  220 => 118,  218 => 117,  213 => 114,  211 => 113,  207 => 111,  205 => 110,  196 => 104,  154 => 64,  152 => 63,  129 => 44,  127 => 35,  119 => 30,  105 => 26,  94 => 25,  87 => 24,  74 => 21,  63 => 17,  57 => 16,  53 => 15,  41 => 6,  34 => 1,);
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
<!--[if lt IE 8 ]><html class=\"ie ie6 ie7 ie-lt10 ie-lt9 ie-lt8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8 ie-lt10 ie-lt9 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9 ]><html class=\"ie ie9 ie-lt10 no-js\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--[if IE]> <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> <![endif]-->
    <meta name=\"robots\" content=\"index,follow\">
    <meta name=\"google-site-verification\" content=\"x_Hf0Q-RLfReYruJjnthcI7J-b9gsdtpbdqz2ojUt8k\">
    <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
    <meta name=\"author\" content=\"{{ site.author.name|e('html') }}\">
    <meta name=\"description\" content=\"{% if header.description %}{{ header.description|e('html') }}{% endif %}\">
    <meta name=\"keywords\" content=\"{{ \"KEYWORDS\"|t }}{% if header.keywords %}, {{ header.keywords|e('html') }}{% endif %}\">
    <meta name=\"copyright\" content=\"Skigulmarg.com\"/>

    <!-- Document title -->
    <title>{% if search_results %}{{\"SEARCH.RESULTS\"|t('html')}} | {% elseif header.title %}{{ header.title|e('html') }} | {% endif %}{{ \"TITLE\"|t }}</title>

    <!-- Links -->
    <link rel=\"canonical\" href=\"{{ base_url }}{% if header.canonical %}{{ header.canonical|e('html') }}{% endif %}\">
    <link rel=\"alternate\" href=\"{{ base_url }}{% if header.alternate %}{{ header.alternate|e('html') }}{% endif %}\" hreflang=\"{% if header.alternateHrefLang %}{{ header.alternateHrefLang|e('html') }}{% endif %}\">
    <link rel=\"alternate\" href=\"{{ base_url }}{% if header.alternate2 %}{{ header.alternate2|e('html') }}{% endif %}\" hreflang=\"{% if header.alternateHrefLang2 %}{{ header.alternateHrefLang2|e('html') }}{% endif %}\">
    <link rel=\"author\" href=\"https://plus.google.com/u/2/113991432665232479994/about\" title=\"Yanik Turgeon on Google+\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicon.ico') }}\" />

    <!-- Stylesheets & Fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,600%7CMontserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/plugins.css') %}
        {% do assets.addCss('theme://css/responsive.css') %}
        {% do assets.addCss('theme://css/style.min.css') %}
        {% do assets.addCss('//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.css') %}
        {% do assets.addCss('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css') %}
        {% do assets.addCss('theme://css/yanform.css') %}
        {% do assets.addCss('theme://css/international-telephone-input.css') %}
    {% endblock %}
    {{ assets.css() }}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-53152277-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-53152277-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TR8FBDP');</script>
    <!-- End Google Tag Manager -->

    {% block customStyles %}{% endblock %}

    <!-- Pageloader fix in case of disabled JavaScript -->
    <noscript>
        <style>
            /* Forcing opacity to 1 because preloader requires JS */
            body:not(.no-page-loader) #wrapper {
                opacity: 1;
            }
        </style>
    </noscript>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '617573335021722');
      fbq('track', 'PageView');
    </script>
    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
      src=\"https://www.facebook.com/tr?id=617573335021722&ev=PageView&noscript=1\"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Popit 2020 annoncement  -->
 <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=cd79e1d505ded' async='true'></script>
 <!-- END Popit 2020 annoncement  -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TR8FBDP\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <h1 style=\"display:none\">Skigulmarg.com — The Most Complete Website about Gulmarg Ski Resort</h1>
    <noscript>
        <div class=\"no-javascript\">
            {{ \"NOSCRIPT\"|t }}
        </div>
    </noscript>
    <!-- Wrapper -->
    <div id=\"wrapper\">
        <!-- Header -->
        {% include 'partials/header.html.twig' %}
        <!-- end: Header -->

        {% block content %}{% endblock %}


        <!-- Footer -->
        {% include 'partials/footer.html.twig' %}
        <!-- end: Footer -->
    </div>
    <!-- end: Wrapper -->

    <!--Modal Cookie-->
    <div id=\"cookieNotify\" class=\"modal-strip modal-bottom cookie-notify\" data-delay=\"1000\" data-expire=\"30\" data-name=\"websiteCookiesPoloWeb\">
        <div class=\"container\">
            <div class=\"row\" style=\"position:relative\">
                <div class=\"col-md-8 text-sm-center sm-m-b-10\">
                    {{ \"COOKIES.MESSAGE\"|t }}
                    <a href=\"/legal/privacy-policies\" class=\"text-light\">
                        <span style=\"display:inline-block\">
                            {{ \"COOKIES.MORE\"|t }}<i class=\"fa fa-info-circle m-l-5\"></i>
                        </span>
                    </a>
                </div>
                <div class=\"col-md-4\">
                    <button type=\"button\" class=\"btn btn-rounded btn-sm m-r-10 modal-close\">
                        {{ \"COOKIES.DECLINE\"|t }}
                    </button>
                    <button type=\"button\" class=\"btn btn-light btn-rounded btn-outline btn-sm modal-confirm\">
                        {{ \"COOKIES.ACCEPT\"|t }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--End: Modal Cookie-->

    <!-- Go to top button -->
    <a id=\"goToTop\"><i class=\"fa fa-angle-up top-icon\"></i><i class=\"fa fa-angle-up\"></i></a>


    {% do assets.addJs('theme://js/plugins.js') %}
    {% do assets.addJs('theme://js/weather.min.js') %}
    {% do assets.addJs('theme://js/plugins/easyzoom/dist/easyzoom.js') %}
    {% do assets.addJs('plugins://simplesearch/js/simplesearch.js') %}
    {% do assets.addJs('//skigulmarg.checkfront.com/lib/interface--32.js') %}
    {% do assets.addJs('//cdn.jsdelivr.net/momentjs/latest/moment.min.js') %}
    {% do assets.addJs('//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') %}
    {% do assets.addJs('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js') %}
    {% do assets.addJs('//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js') %}

    {% block scripts %}{% endblock %}

    {% do assets.addJs('theme://js/functions.min.js') %}
    {{ assets.js() }}
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\base.html.twig");
    }
}
