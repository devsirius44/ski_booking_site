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

/* partials/footer.html.twig */
class __TwigTemplate_24685f1989d3c18c66d898d755d06048ee342fcacc77354d87e57e21c6671bdd extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"footer-light\">
    <div class=\"red-line\"></div>
    <div class=\"footer-content\">
        <div class=\"container\" style=\"background-image:url(";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo-grey.svg");
        echo ");background-repeat: no-repeat;background-position:right bottom\">
            <div class=\"row\">
                <!-- Packages -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.FOOTER_TITLE");
        echo "</h4>
                    <ul class=\"list-icon list-icon-arrow\">
                        <li>
                            <a href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.TITLE");
        echo "\">
                                ";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 16
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.TITLE");
        echo "\">
                                ";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 21
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.HELISKI.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.HELISKI.TITLE");
        echo "\">
                                ";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.HELISKI.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 26
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.CUSTOM.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.CUSTOM.TITLE");
        echo "\">
                                ";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.CUSTOM.TITLE");
        echo "
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Packages -->

                <!-- Quick Links -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.TITLE");
        echo "</h4>
                    <ul class=\"list-icon list-icon-arrow\">
                        <li>
                            <a href=\"";
        // line 39
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.ABOUT.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.ABOUT.TITLE");
        echo "\">
                                ";
        // line 40
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.ABOUT.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.TESTIMONIALS.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.TESTIMONIALS.TITLE");
        echo "\">
                                ";
        // line 45
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.TESTIMONIALS.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 49
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINKS.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINKS.TITLE");
        echo "\">
                                ";
        // line 50
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.LINKS.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.SITE_MAP.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.SITE_MAP.TITLE");
        echo "\">
                                ";
        // line 55
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "EXTRA.SITE_MAP.TITLE");
        echo "
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Quick Links -->

                <!-- Contact Us -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.TITLE");
        echo "</h4>
                    <ul class=\"list-icon\">
                        <li>
                            <i class=\"fa fa-envelope\"></i>
                            <a href=\"";
        // line 68
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FORM.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FORM.TITLE");
        echo "\">
                                ";
        // line 69
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FORM.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <i class=\"fa fa-users\"></i>
                            <a href=\"";
        // line 74
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FEEDBACK.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FEEDBACK.TITLE");
        echo "\">
                                ";
        // line 75
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.FEEDBACK.TITLE");
        echo "
                            </a>
                        </li>
                        <li>
                            <i class=\"fa fa-skype\"></i>
                            <a href=\"skype:skigulmarg?call\" title=\"";
        // line 80
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "CONTACTS.SKYPE.TITLE");
        echo "\">
                                skigulmarg
                            </a>
                        </li>
                        <script>
                            // A wizard to generate this code is at http://www.jottings.com/obfuscator/
                            coded = \"t4uI5OEYUI@t4uI5OEYUI.xfE\";
                            key = \"PkVsmpif9OwxLrY1vSdW7qAn084KtEXugyT6jFUeJbBNoHlQc2zaCR3h5IMGDZ\";
                            shift=coded.length;
                            link=\"\";
                            for (i = 0; i < coded.length; i++) {
                                if (key.indexOf(coded.charAt(i)) == -1) {
                                    ltr = coded.charAt(i);
                                    link += (ltr);
                                }
                                else {
                                    ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length;
                                    link += (key.charAt(ltr));
                                }
                            }
                            document.write(\"\\
                                <li>\\
                                    <i class='fa fa-envelope'></i>\\
                                    <a href='mailto:\" + link + \"'>\" + link + \"</a>\\
                                <li>\");
                        </script>
                    </ul>
                </div>
                <!-- end: Contact Us -->

                <!-- Social icons -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>";
        // line 112
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FOLLOW.TITLE");
        echo "</h4>
                    <div class=\"social-icons\">
                        <ul>
                            <li class=\"social-facebook\">
                                <a href=\"https://www.facebook.com/skigulmarg\" title=\"Facebook\" target=\"_blank\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\" title=\"Facebook\"></i>
                                </a>
                            </li>
                            <li class=\"social-twitter\">
                                <a href=\"https://twitter.com/skigulmarg\" title=\"Twitter\" target=\"_blank\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"social-flickr\">
                                <a href=\"https://www.flickr.com/photos/124409163@N05/sets/\" title=\"Flickr\" target=\"_blank\">
                                    <i class=\"fa fa-flickr\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"social-youtube\">
                                <a href=\"https://www.youtube.com/playlist?list=PLFFA4n6EK2307fTTSujAUcgG3u5XKoFhs\" title=\"YouTube\" target=\"_blank\">
                                    <i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                        <div><a href=\"https://www.instagram.com/skigulmarg/\" style=\"margin-top: -39px; margin-bottom: 30px; font-size: 1em; letter-spacing: .04em; font-style: italic; display:block;\" title=\"Skigulmarg on Instragram\" target=\"_blank\">#skigulmarg</a></div>
                    </div>
                    <div class=\"powered-by\">
                        <h4>";
        // line 139
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "POWERED.TITLE");
        echo "</h4>
                        <img src=\"https://skigulmarg.com/user/themes/skigulmarg/images/stripe.png\" style=\"height: 28px;margin: 2px 10px 0 0;\" alt=\"Stripe\" title=\"Stripe\">
                        <img src=\"https://skigulmarg.com/user/themes/skigulmarg/images/paypal.png\" style=\"-webkit-filter: invert(100%) grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: invert(100%) grayscale(100%);\" alt=\"PayPal\" title=\"PayPal\">
                    </div>
                </div>
                <!-- end: Social icons -->
            </div>

            <div class=\"row\">
                <!-- Newsletter -->
                <div class=\"col-md-6 col-md-push-6\">
                    <div class=\"newsletter\">
                        <h4>";
        // line 152
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NEWSLETTER.TITLE");
        echo "</h4>
                        <form action=\"https://hivermonde.us2.list-manage.com/subscribe/post\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                            <input type=\"hidden\" name=\"u\" value=\"";
        // line 154
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NEWSLETTER.U");
        echo "\">
                            <input type=\"hidden\" name=\"id\" value=\"";
        // line 155
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NEWSLETTER.ID");
        echo "\">
                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"form-control\" id=\"mce-EMAIL\" placeholder=\"";
        // line 156
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NEWSLETTER.PLACEHOLDER");
        echo "\" required>
                            <div class=\"buttons\">
                                <button type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\">";
        // line 158
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "NEWSLETTER.SUBMIT");
        echo "</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end: Newsletter -->

                <!-- Legal -->
                <div class=\"col-md-6 col-md-pull-6 legal\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 169
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.TERMS.LINK");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.TERMS.TITLE");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 172
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.PRIVACY.LINK");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.PRIVACY.TITLE");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 175
        echo ($context["base_url_absolute"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.BOOKING.LINK");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LEGAL.BOOKING.TITLE");
        echo "</a>
                        </li>
                    </ul>
                </div>
                <!-- end: Legal -->
            </div>

        </div>
    </div>

    <div class=\"sponsors\">
        <h4>";
        // line 186
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SPONSORS");
        echo " </h4>
        <div class=\"sponsors-logos\">
            ";
        // line 194
        echo "            
        </div>
    </div>
    <div class=\"fotter-bottom\">
        <div class=\"container\">
            <div class=\"languages\">
                ";
        // line 200
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/footer.html.twig", 200)->display($context);
        // line 201
        echo "            </div>

            <div class=\"copyright\">
                ";
        // line 204
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "COPYRIGHT");
        echo " &copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
                <a href=\"";
        // line 205
        echo ($context["base_url_absolute"] ?? null);
        echo "\">Skigulmarg.com</a>
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 205,  392 => 204,  387 => 201,  385 => 200,  377 => 194,  372 => 186,  354 => 175,  344 => 172,  334 => 169,  320 => 158,  315 => 156,  311 => 155,  307 => 154,  302 => 152,  286 => 139,  256 => 112,  221 => 80,  213 => 75,  206 => 74,  198 => 69,  191 => 68,  184 => 64,  172 => 55,  165 => 54,  158 => 50,  150 => 49,  143 => 45,  135 => 44,  128 => 40,  120 => 39,  114 => 36,  102 => 27,  94 => 26,  87 => 22,  78 => 21,  71 => 17,  63 => 16,  56 => 12,  48 => 11,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"footer-light\">
    <div class=\"red-line\"></div>
    <div class=\"footer-content\">
        <div class=\"container\" style=\"background-image:url({{ url('theme://images/logo-grey.svg') }});background-repeat: no-repeat;background-position:right bottom\">
            <div class=\"row\">
                <!-- Packages -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>{{ \"PACKAGES.FOOTER_TITLE\"|t }}</h4>
                    <ul class=\"list-icon list-icon-arrow\">
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}\" title=\"{{ \"PACKAGES.POWDER.TITLE\"|t }}\">
                                {{ \"PACKAGES.POWDER.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.BEGINNER.LINK\"|t }}\" title=\"{{ \"PACKAGES.BEGINNER.TITLE\"|t }}\">
                                {{ \"PACKAGES.BEGINNER.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.HELISKI.LINK\"|t }}\" title=\"{{ \"PACKAGES.POWDER.HELISKI.TITLE\"|t }}\">
                                {{ \"PACKAGES.POWDER.HELISKI.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.CUSTOM.LINK\"|t }}\" title=\"{{ \"PACKAGES.MORE_OPTIONS.CUSTOM.TITLE\"|t }}\">
                                {{ \"PACKAGES.MORE_OPTIONS.CUSTOM.TITLE\"|t }}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Packages -->

                <!-- Quick Links -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>{{ \"EXTRA.TITLE\"|t }}</h4>
                    <ul class=\"list-icon list-icon-arrow\">
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"EXTRA.LINK\"|t }}{{ \"EXTRA.ABOUT.LINK\"|t }}\" title=\"{{ \"EXTRA.ABOUT.TITLE\"|t }}\">
                                {{ \"EXTRA.ABOUT.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"EXTRA.LINK\"|t }}{{ \"EXTRA.TESTIMONIALS.LINK\"|t }}\" title=\"{{ \"EXTRA.TESTIMONIALS.TITLE\"|t }}\">
                                {{ \"EXTRA.TESTIMONIALS.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"EXTRA.LINK\"|t }}{{ \"EXTRA.LINKS.LINK\"|t }}\" title=\"{{ \"EXTRA.LINKS.TITLE\"|t }}\">
                                {{ \"EXTRA.LINKS.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"EXTRA.SITE_MAP.LINK\"|t }}\" title=\"{{ \"EXTRA.SITE_MAP.TITLE\"|t }}\">
                                {{ \"EXTRA.SITE_MAP.TITLE\"|t }}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Quick Links -->

                <!-- Contact Us -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>{{ \"CONTACTS.TITLE\"|t }}</h4>
                    <ul class=\"list-icon\">
                        <li>
                            <i class=\"fa fa-envelope\"></i>
                            <a href=\"{{ base_url_absolute }}{{ \"CONTACTS.FORM.LINK\"|t }}\" title=\"{{ \"CONTACTS.FORM.TITLE\"|t }}\">
                                {{ \"CONTACTS.FORM.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <i class=\"fa fa-users\"></i>
                            <a href=\"{{ base_url_absolute }}{{ \"CONTACTS.FEEDBACK.LINK\"|t }}\" title=\"{{ \"CONTACTS.FEEDBACK.TITLE\"|t }}\">
                                {{ \"CONTACTS.FEEDBACK.TITLE\"|t }}
                            </a>
                        </li>
                        <li>
                            <i class=\"fa fa-skype\"></i>
                            <a href=\"skype:skigulmarg?call\" title=\"{{ \"CONTACTS.SKYPE.TITLE\"|t }}\">
                                skigulmarg
                            </a>
                        </li>
                        <script>
                            // A wizard to generate this code is at http://www.jottings.com/obfuscator/
                            coded = \"t4uI5OEYUI@t4uI5OEYUI.xfE\";
                            key = \"PkVsmpif9OwxLrY1vSdW7qAn084KtEXugyT6jFUeJbBNoHlQc2zaCR3h5IMGDZ\";
                            shift=coded.length;
                            link=\"\";
                            for (i = 0; i < coded.length; i++) {
                                if (key.indexOf(coded.charAt(i)) == -1) {
                                    ltr = coded.charAt(i);
                                    link += (ltr);
                                }
                                else {
                                    ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length;
                                    link += (key.charAt(ltr));
                                }
                            }
                            document.write(\"\\
                                <li>\\
                                    <i class='fa fa-envelope'></i>\\
                                    <a href='mailto:\" + link + \"'>\" + link + \"</a>\\
                                <li>\");
                        </script>
                    </ul>
                </div>
                <!-- end: Contact Us -->

                <!-- Social icons -->
                <div class=\"col-sm-6 col-md-3 nav-block\">
                    <h4>{{ \"FOLLOW.TITLE\"|t }}</h4>
                    <div class=\"social-icons\">
                        <ul>
                            <li class=\"social-facebook\">
                                <a href=\"https://www.facebook.com/skigulmarg\" title=\"Facebook\" target=\"_blank\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\" title=\"Facebook\"></i>
                                </a>
                            </li>
                            <li class=\"social-twitter\">
                                <a href=\"https://twitter.com/skigulmarg\" title=\"Twitter\" target=\"_blank\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"social-flickr\">
                                <a href=\"https://www.flickr.com/photos/124409163@N05/sets/\" title=\"Flickr\" target=\"_blank\">
                                    <i class=\"fa fa-flickr\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"social-youtube\">
                                <a href=\"https://www.youtube.com/playlist?list=PLFFA4n6EK2307fTTSujAUcgG3u5XKoFhs\" title=\"YouTube\" target=\"_blank\">
                                    <i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                        </ul>
                        <div><a href=\"https://www.instagram.com/skigulmarg/\" style=\"margin-top: -39px; margin-bottom: 30px; font-size: 1em; letter-spacing: .04em; font-style: italic; display:block;\" title=\"Skigulmarg on Instragram\" target=\"_blank\">#skigulmarg</a></div>
                    </div>
                    <div class=\"powered-by\">
                        <h4>{{ \"POWERED.TITLE\"|t }}</h4>
                        <img src=\"https://skigulmarg.com/user/themes/skigulmarg/images/stripe.png\" style=\"height: 28px;margin: 2px 10px 0 0;\" alt=\"Stripe\" title=\"Stripe\">
                        <img src=\"https://skigulmarg.com/user/themes/skigulmarg/images/paypal.png\" style=\"-webkit-filter: invert(100%) grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: invert(100%) grayscale(100%);\" alt=\"PayPal\" title=\"PayPal\">
                    </div>
                </div>
                <!-- end: Social icons -->
            </div>

            <div class=\"row\">
                <!-- Newsletter -->
                <div class=\"col-md-6 col-md-push-6\">
                    <div class=\"newsletter\">
                        <h4>{{ \"NEWSLETTER.TITLE\"|t }}</h4>
                        <form action=\"https://hivermonde.us2.list-manage.com/subscribe/post\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                            <input type=\"hidden\" name=\"u\" value=\"{{ \"NEWSLETTER.U\"|t }}\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ \"NEWSLETTER.ID\"|t }}\">
                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"form-control\" id=\"mce-EMAIL\" placeholder=\"{{ \"NEWSLETTER.PLACEHOLDER\"|t }}\" required>
                            <div class=\"buttons\">
                                <button type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\">{{ \"NEWSLETTER.SUBMIT\"|t }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end: Newsletter -->

                <!-- Legal -->
                <div class=\"col-md-6 col-md-pull-6 legal\">
                    <ul>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"LEGAL.LINK\"|t }}{{ \"LEGAL.TERMS.LINK\"|t }}\">{{ \"LEGAL.TERMS.TITLE\"|t }}</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"LEGAL.LINK\"|t }}{{ \"LEGAL.PRIVACY.LINK\"|t }}\">{{ \"LEGAL.PRIVACY.TITLE\"|t }}</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url_absolute }}{{ \"LEGAL.LINK\"|t }}{{ \"LEGAL.BOOKING.LINK\"|t }}\">{{ \"LEGAL.BOOKING.TITLE\"|t }}</a>
                        </li>
                    </ul>
                </div>
                <!-- end: Legal -->
            </div>

        </div>
    </div>

    <div class=\"sponsors\">
        <h4>{{ \"SPONSORS\"|t }} </h4>
        <div class=\"sponsors-logos\">
            {# <a href=\"https://thinkempire.com/\" title=\"Thinkempire\" target=\"_blank\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.32 31.75\">
                    <defs><style>.thinkempire-logo{fill:#231f20;}</style></defs>
                    <title>Thinkempire</title>
                    <g id=\"Layer_2\" data-name=\"Layer 2\"><g id=\"Layer_1-2\" data-name=\"Layer 1\"><path class=\"thinkempire-logo\" d=\"M38.79,29.58H38v2.13h-.45V29.58h-.74v-.46h1.94Z\"/><path class=\"thinkempire-logo\" d=\"M42.47,31.71H42V30.57H40.85v1.12h-.46V29.13h.46v1H42v-1h.46Z\"/><path class=\"thinkempire-logo\" d=\"M44.69,31.71h-.46V29.13h.46Z\"/><path class=\"thinkempire-logo\" d=\"M48.54,31.71h-.4L46.91,30v1.74h-.45V29.13h.45l1.19,1.72V29.13h.44Z\"/><path class=\"thinkempire-logo\" d=\"M52.31,31.71h-.53l-.66-1.34-.49.62v.72h-.46V29.13h.46v1.1l.91-1.1h.6l-.69.84Z\"/><path class=\"thinkempire-logo\" d=\"M55.9,31.71H54V29.13h1.89v.46H54.44v.48h.77v.47h-.77v.71H55.9Z\"/><path class=\"thinkempire-logo\" d=\"M60.08,31.71h-.45V30.13l-.76,1.58-.76-1.58v1.58h-.45V29.13h.45l.76,1.53.76-1.53h.45Z\"/><path class=\"thinkempire-logo\" d=\"M63,30.69H62.3v1h-.46V29.13H63a.89.89,0,0,1,.44.11.75.75,0,0,1,.4.68.73.73,0,0,1-.4.7A1.09,1.09,0,0,1,63,30.69Zm.36-.78a.31.31,0,0,0-.1-.24.39.39,0,0,0-.27-.09H62.3v.64H63a.4.4,0,0,0,.27-.09A.29.29,0,0,0,63.4,29.92Z\"/><path class=\"thinkempire-logo\" d=\"M66.09,31.71h-.46V29.13h.46Z\"/><path class=\"thinkempire-logo\" d=\"M69.94,31.71h-.52l-.42-1h-.69v1h-.46V29.13H69a.88.88,0,0,1,.44.11.75.75,0,0,1,.4.68.74.74,0,0,1-.42.69Zm-.52-1.79a.31.31,0,0,0-.1-.24.4.4,0,0,0-.27-.09h-.73v.64H69a.4.4,0,0,0,.27-.09A.29.29,0,0,0,69.42,29.92Z\"/><path class=\"thinkempire-logo\" d=\"M73.57,31.71H71.64V29.13h1.88v.46H72.11v.48h.77v.47h-.77v.71h1.46Z\"/><path class=\"thinkempire-logo\" d=\"M75.72,31.5a.24.24,0,0,1-.08.18.26.26,0,0,1-.19.08.26.26,0,0,1-.25-.25.25.25,0,0,1,.08-.19.24.24,0,0,1,.18-.08.26.26,0,0,1,.26.26Z\"/><path class=\"thinkempire-logo\" d=\"M79.43,31.18a1.12,1.12,0,0,1-1,.57,1,1,0,0,1-.8-.37,1.51,1.51,0,0,1-.29-1,1.49,1.49,0,0,1,.29-1,1,1,0,0,1,.8-.36,1.12,1.12,0,0,1,1,.57l-.42.21a.68.68,0,0,0-.58-.32.54.54,0,0,0-.46.26,1.08,1.08,0,0,0-.17.6,1.06,1.06,0,0,0,.17.65.54.54,0,0,0,.46.23A.6.6,0,0,0,79,31Z\"/><path class=\"thinkempire-logo\" d=\"M83.23,30.4a1.54,1.54,0,0,1-.29,1,.93.93,0,0,1-.78.37,1,1,0,0,1-.83-.43,1.54,1.54,0,0,1-.26-.91,1.49,1.49,0,0,1,.29-1,1,1,0,0,1,.8-.36,1,1,0,0,1,.77.36A1.48,1.48,0,0,1,83.23,30.4Zm-.46,0a1.11,1.11,0,0,0-.16-.64.51.51,0,0,0-.45-.23.53.53,0,0,0-.46.23,1.08,1.08,0,0,0-.17.64,1.1,1.1,0,0,0,.17.65.53.53,0,0,0,.46.23.51.51,0,0,0,.49-.29A1.23,1.23,0,0,0,82.77,30.41Z\"/><path class=\"thinkempire-logo\" d=\"M87.36,31.71h-.45V30.13l-.76,1.58-.76-1.58v1.58h-.45V29.13h.45l.76,1.53.76-1.53h.45Z\"/><path class=\"thinkempire-logo\" d=\"M13,23.29H.27V3.53H13V6.95H3.7V11.7h7V15.1h-7v4.77H13v3.42Z\"/><path class=\"thinkempire-logo\" d=\"M95.55,23.29H82.83V3.53H95.55V6.95H86.26V11.7h7V15.1h-7v4.77h9.29v3.42Z\"/><path class=\"thinkempire-logo\" d=\"M42.36,23.29H38.95V3.53H50.17L53,6.44v5.75L50.17,15.1h-7.8v8.19Zm0-11.58h6.39l.9-.86v-3l-.9-.86H42.36V11.7Z\"/><path class=\"thinkempire-logo\" d=\"M60.18,23.29h-3.4V3.53h3.4V23.29Z\"/><path class=\"thinkempire-logo\" d=\"M80.48,23.29h-3.9l-4.43-8.18H67.52v8.18H64.1V3.53H75.37l2.91,2.9v5.78l-2.59,2.57,4.8,8.5Zm-13-11.58H74l.85-.79V7.81L74,6.95H67.52V11.7Z\"/><path class=\"thinkempire-logo\" d=\"M35.21,23.29H31.79V12.64L27.23,23.29H24.71L20.14,12.67V23.29H16.73V3.53H20l6,13.79,6-13.79h3.29V23.29Z\"/><polygon class=\"thinkempire-logo\" points=\"118.56 7.52 118.56 18.31 117.68 18.31 117.68 4.01 115.06 0 112.42 4.01 112.42 18.31 111.54 18.31 111.54 7.52 105.98 3.36 105.98 19.26 110.64 23.29 119.46 23.29 124.12 19.26 124.12 3.37 118.56 7.52\"/><rect class=\"thinkempire-logo\" x=\"90.87\" y=\"30.03\" width=\"33.46\" height=\"0.78\"/><rect class=\"thinkempire-logo\" y=\"30.03\" width=\"33.45\" height=\"0.78\"/></g></g></svg>
            </a> #}
            
        </div>
    </div>
    <div class=\"fotter-bottom\">
        <div class=\"container\">
            <div class=\"languages\">
                {% include 'partials/langswitcher.html.twig' %}
            </div>

            <div class=\"copyright\">
                {{ \"COPYRIGHT\"|t }} &copy; {{ 'now'|date('Y') }}
                <a href=\"{{ base_url_absolute }}\">Skigulmarg.com</a>
            </div>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\footer.html.twig");
    }
}
