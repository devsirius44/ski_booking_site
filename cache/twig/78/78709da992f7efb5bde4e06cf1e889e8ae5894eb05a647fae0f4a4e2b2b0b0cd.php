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

/* partials/header.html.twig */
class __TwigTemplate_9f916ad2b2558dddc66d6bd989644f823f352e4b7eb4639f209463474f0395f3 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-transparent\">
    <div id=\"header-wrap\">
        <div class=\"container\">
            <!--Logo-->
            <div id=\"logo\">
                <a href=\"";
        // line 6
        echo ($context["home_url"] ?? null);
        echo "\" class=\"logo\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 102.156 70.559\">
                        <title>Skigulmarg.com</title>
                        <defs>
                            <style>
                                .skigulmarg-logo {fill: #fff;}
                                .cls-3 {clip-path: url(#clip-path);}
                                .cls-4 {clip-path: url(#clip-path-2);}
                            </style>
                            <clipPath id=\"clip-path\">
                                <path id=\"Path_200\" data-name=\"Path 200\" class=\"skigulmarg-logo\" d=\"M0-42.391H87.873V13.487H0Z\" transform=\"translate(0 42.391)\"/>
                            </clipPath>
                            <clipPath id=\"clip-path-2\">
                                <path id=\"Path_214\" data-name=\"Path 214\" class=\"cls-2\" d=\"M0-16.805H102.156v7.7H0Z\" transform=\"translate(0 16.805)\"/>
                            </clipPath>
                        </defs>
                      <g id=\"LOGO\" transform=\"translate(-85 -11)\">
                        <g id=\"Group_4\" data-name=\"Group 4\" transform=\"translate(91.864 11)\">
                          <g id=\"Group_3\" data-name=\"Group 3\" class=\"cls-3\" transform=\"translate(0 0)\">
                            <g id=\"Group_1\" data-name=\"Group 1\" transform=\"translate(0 19.113)\">
                              <path id=\"Path_198\" data-name=\"Path 198\" class=\"skigulmarg-logo\" d=\"M20.308,5.106c-.956-1.334-1.868-3.239-3.388-4.039a19.828,19.828,0,0,1-4.5-2.922c-1.6-1.42-4.818-2.2-6.477-3.017C3.466-6.085,2.256-7.108.733-7.374a6.632,6.632,0,0,1-2.976-1.77L-7.792-6.892s5.389.082,5.509.334c.158.349,2.858,2.311,1.406,3.287S-7.62-4.25-9.908-5.849s-11.885-7.18-14.629-9.312-7.776,0-10.75,1.863S-44.887-7.177-45.8-6.91-59.79,7.2-59.79,7.2s-6.173,11.075-3.257,8.743S-59,9.648-56.6,7.654c1.322-1.1,1.915-1.689,3.123-1.838l.08-.082S-50.78,1.521-48.489.026s3.175-3.365,5.067-4.264,3.152-.877,4.745-2.171,1.6-2.573,3.39-3.274c1.6-.62,3.742-1.24,4.686-1.577-3.071,2.288-9.024,7.347-6.75,10.624,3.016,4.342,17.733,3.858,7.842,10.978a176.313,176.313,0,0,1-15.8,10.375s6.153-1.087,8.567-2.656,4.317-1.613,5.887-2.942a26.286,26.286,0,0,1,5.306-3.7c1.81-.842,3.46-2.491,3.46-4.181s1.608-2.611-1.529-4.184-5.72-2.969-7.4-3.377c-3.642-.888-4.5-2.088-3.025-4.351,1.827-2.8,1.773-3.009,1.96-3.168,1.312-1.115,2.776-3.052,5.336-3.46.145.037.293.07.435.119,1.294-.65,7.341,4.88,8.92,5.867,1.6,1,5.662,2.261,8.348,3.591A75,75,0,0,0,.25,1.393L4.841-2.322A7.734,7.734,0,0,1,6.723.2c.287,1.064.112,2.2-1.424,3.655a26.539,26.539,0,0,0-2.518,2.8C1.3,8.317,1.524,8.383.209,9.116c-1.13.631-3.62,1.951-4.068,2.178.523-.219,4.152-.79,5.1-1.114A4.437,4.437,0,0,0,3.35,8.054c.457-.8,1.95-.935,3.431-2.331S7.529,4.463,8.037,2.4,7.983,1.4,9.526,1s4.836,1.71,5.6,2.149,1.028.091,1.867.492S19.32,5.859,20.5,6.7a38.721,38.721,0,0,1,3.543,3.322c-.571-1.992-2.781-3.589-3.734-4.918\" transform=\"translate(63.83 16.049)\"/>
                            </g>
                            <g id=\"Group_2\" data-name=\"Group 2\" transform=\"translate(65.148 0.001)\">
                              <path id=\"Path_199\" data-name=\"Path 199\" class=\"skigulmarg-logo\" d=\"M3.185,2.741,5.4,1.9,5.07,1.047,2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175,2.66-5.527l-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107,2.708,1.67-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358.919,0,.009-2.917,2.46-1.49a1.806,1.806,0,0,0,.494.29V4.839L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506L5.271,5.563l.684-1.109Z\" transform=\"translate(10.01 8.614)\"/>
                            </g>
                          </g>
                        </g>
                        <g id=\"Group_17\" data-name=\"Group 17\" transform=\"translate(85 73.863)\">
                          <g id=\"Group_16\" data-name=\"Group 16\" class=\"cls-4\" transform=\"translate(0 0)\">
                            <g id=\"Group_13\" data-name=\"Group 13\" transform=\"translate(0 0)\">
                              <path id=\"Path_210\" data-name=\"Path 210\" class=\"skigulmarg-logo\" d=\"M-11.042-6.21a2.443,2.443,0,0,1-.544,1.771,2.38,2.38,0,0,1-1.747.549h-6.834V-5.526h5.833a3.28,3.28,0,0,0,.37-.019,1.1,1.1,0,0,0,.313-.082.53.53,0,0,0,.231-.188.564.564,0,0,0,.087-.327.549.549,0,0,0-.12-.37.685.685,0,0,0-.313-.2,1.688,1.688,0,0,0-.4-.076q-.207-.014-.506-.015-.183-.009-1.03-.038-1.328-.048-1.665-.062L-18-6.937c-.2-.009-.369-.021-.51-.033a1.888,1.888,0,0,1-1.531-.7,2.564,2.564,0,0,1-.327-1.434,2.858,2.858,0,0,1,.453-1.762,1.78,1.78,0,0,1,1.5-.587h7.094V-9.82h-5.833A2.9,2.9,0,0,0-17.5-9.8a.978.978,0,0,0-.289.082.515.515,0,0,0-.217.188.591.591,0,0,0-.082.327.472.472,0,0,0,.26.481,1.823,1.823,0,0,0,.722.116h.4q.173.009,1.011.038,1.155.038,1.6.058l.756.033c.205.01.375.021.51.033a1.7,1.7,0,0,1,1.482.77,3.13,3.13,0,0,1,.308,1.463\" transform=\"translate(20.37 11.456)\"/>
                            </g>
                            <g id=\"Group_14\" data-name=\"Group 14\" transform=\"translate(10.444 0)\">
                              <path id=\"Path_211\" data-name=\"Path 211\" class=\"skigulmarg-logo\" d=\"M-7.578,0h3.128L-8.771,3.648l4.88,3.917H-7.308l-4.313-3.917Zm-4.043,7.566h-2.358V0h2.358Z\" transform=\"translate(13.979 0)\"/>
                            </g>
                            <path id=\"Path_212\" data-name=\"Path 212\" class=\"skigulmarg-logo\" d=\"M50.559-9.238H48.2V-16.8h2.358Z\" transform=\"translate(-26.129 16.804)\"/>
                            <g id=\"Group_15\" data-name=\"Group 15\" transform=\"translate(26.46 0.062)\">
                              <path id=\"Path_213\" data-name=\"Path 213\" class=\"skigulmarg-logo\" d=\"M-73.966-5.731a3.935,3.935,0,0,0,1.121-.135,1.587,1.587,0,0,0,.718-.423,1.74,1.74,0,0,0,.394-.761,4.576,4.576,0,0,0,.125-1.164,3.514,3.514,0,0,0-.158-1.146,1.535,1.535,0,0,0-.5-.717,2.124,2.124,0,0,0-.866-.38,6.317,6.317,0,0,0-1.328-.116h-6.276v7.566h2.358v-5.68h3.744a.917.917,0,0,1,.607.217.688.688,0,0,1,.26.553.692.692,0,0,1-.269.588,1.016,1.016,0,0,1-.626.2h-3.388l4.552,4.12h2.619l-3.09-2.686Zm8.307-1.858L-62.8-6.163V-5.3a.374.374,0,0,1-.164.314.927.927,0,0,1-.539.12h-4.081a1.258,1.258,0,0,1-.554-.081.379.379,0,0,1-.139-.353V-8.32a.335.335,0,0,1,.164-.28.939.939,0,0,1,.529-.116h6.806v-1.857h-7.066a2.818,2.818,0,0,0-1.876.529,1.94,1.94,0,0,0-.616,1.559V-5a2.5,2.5,0,0,0,.106.794,1.29,1.29,0,0,0,.394.563,1.787,1.787,0,0,0,.529.371,2.755,2.755,0,0,0,.74.192A10.808,10.808,0,0,0-67.46-3q.654.019,1.906.019T-63.643-3a10.981,10.981,0,0,0,1.116-.082,2.973,2.973,0,0,0,.76-.192,1.859,1.859,0,0,0,.554-.371,1.437,1.437,0,0,0,.361-.573,2.591,2.591,0,0,0,.1-.784v-2.59Zm-23.371-2.983L-93.18-3.006h2.618l.7-1.29h0L-89-5.923l.016-.029.19-.362h0l1.252-2.334,1.463,2.724H-88.6L-89.391-4.3h4.181l.693,1.29H-81.9l-4.11-7.566ZM-128.91-6.163V-5.3a.374.374,0,0,1-.164.314.929.929,0,0,1-.539.12H-133.7a1.261,1.261,0,0,1-.554-.081c-.093-.055-.139-.172-.139-.353V-8.32a.336.336,0,0,1,.163-.28.944.944,0,0,1,.53-.116h6.805v-1.857h-7.066a2.823,2.823,0,0,0-1.877.529,1.943,1.943,0,0,0-.616,1.559V-5a2.524,2.524,0,0,0,.106.794,1.3,1.3,0,0,0,.4.563,1.794,1.794,0,0,0,.529.371,2.755,2.755,0,0,0,.741.192A10.778,10.778,0,0,0-133.57-3q.654.019,1.906.019t1.91-.019a10.982,10.982,0,0,0,1.117-.082,2.972,2.972,0,0,0,.76-.192,1.868,1.868,0,0,0,.554-.371,1.438,1.438,0,0,0,.361-.573,2.592,2.592,0,0,0,.1-.784v-2.59h-4.909Zm28.983.038-.029-.038-2.089-4.409h-3.687v7.566h2.194V-8.512h.029l2.791,5.506h1.589l2.753-5.506h.038v5.506h2.185v-7.566h-3.677Zm-18.1.6a.43.43,0,0,1-.188.361,1.038,1.038,0,0,1-.611.139h-3.35a.974.974,0,0,1-.582-.139.43.43,0,0,1-.188-.361v-5.043h-2.32V-5.2a2.973,2.973,0,0,0,.11.867,1.627,1.627,0,0,0,.418.664,3.487,3.487,0,0,0,.544.424,1.8,1.8,0,0,0,.606.2,7.791,7.791,0,0,0,1.055.087q.674.019,2.051.019t2.055-.019a7.743,7.743,0,0,0,1.049-.087,1.808,1.808,0,0,0,.6-.2,3.667,3.667,0,0,0,.543-.429,1.62,1.62,0,0,0,.419-.664A2.971,2.971,0,0,0-115.7-5.2v-5.371h-2.32Zm6-5.043h-2.359v7.566h7.47V-4.835h-5.111Z\" transform=\"translate(136.448 10.572)\"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                </a>
            </div>
            <!--End: Logo-->

            <!--Header Extras-->
            <div class=\"menu-right\">
                <ul>
                    <li id=\"weather\" class=\"dropdown mega-menu-item\"></li>
                    <li>
                        <a href=\"https://www.facebook.com/skigulmarg\" class=\"title\" title=\"Skigulmarg Facebook\" target=\"_blank\"><i class=\"fa fa-facebook-square\"></i></a>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id=\"mainMenu-trigger\">
                <button class=\"lines-button x\"> <span class=\"lines\"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id=\"mainMenu\" class=\"menu-left\">
                <nav>
                    <ul>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">";
        // line 75
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.TITLE");
        echo "</a>
                            <ul class=\"dropdown-menu\" id=\"deals-and-packages\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 82
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 85
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.SKI_BUM.LINK");
        echo "\">
                                                        ";
        // line 86
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.SKI_BUM.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 90
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.ECONOMIC.LINK");
        echo "\">
                                                        ";
        // line 91
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.ECONOMIC.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 95
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.COMFORT.LINK");
        echo "\">
                                                        ";
        // line 96
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.COMFORT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 100
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.DELUXE.LINK");
        echo "\">
                                                        ";
        // line 101
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.DELUXE.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 105
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.HELISKI.LINK");
        echo "\">
                                                        ";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.POWDER.HELISKI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 114
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.TITLE");
        echo "
                                                </li>
                                                ";
        // line 121
        echo "                                                <li>
                                                    <a href=\"";
        // line 122
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.HOTEL_KHALEEL.LINK");
        echo "\">
                                                        ";
        // line 123
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.HOTEL_KHALEEL.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 127
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.HIGHLANDS_PARK.LINK");
        echo "\">
                                                        ";
        // line 128
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.HIGHLANDS_PARK.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 132
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.KHYBER_RESORT.LINK");
        echo "\">
                                                        ";
        // line 133
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.BEGINNER.KHYBER_RESORT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 141
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 144
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.CUSTOM.LINK");
        echo "\">
                                                        ";
        // line 145
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.CUSTOM.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 149
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.RENATAL.LINK");
        echo "\">
                                                        ";
        // line 150
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.RENATAL.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 154
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.GROUP.LINK");
        echo "\">
                                                        ";
        // line 155
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.GROUP.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 159
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.WHY_BOOK_WITH_US.LINK");
        echo "\">
                                                        ";
        // line 160
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.WHY_BOOK_WITH_US.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <strong><a href=\"";
        // line 164
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.JAPAN_SKI_PACKAGES.LINK");
        echo "\">
                                                        ";
        // line 165
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PACKAGES.MORE_OPTIONS.JAPAN_SKI_PACKAGES.TITLE");
        echo "
                                                    </a></strong>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">";
        // line 175
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.TITLE");
        echo "</a>
                            <ul class=\"dropdown-menu\" id=\"gulmarg-ski-resort\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 182
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 185
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo "\">
                                                        ";
        // line 186
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 190
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IN_WINTER.LINK");
        echo "\">
                                                        ";
        // line 191
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IN_WINTER.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 195
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IN_SUMMER.LINK");
        echo "\">
                                                        ";
        // line 196
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IN_SUMMER.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 200
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IMAGES.LINK");
        echo "\">
                                                        ";
        // line 201
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.IMAGES.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 205
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.WEATHER.LINK");
        echo "\">
                                                        ";
        // line 206
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.WEATHER.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 210
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.ACCOMMODATION_MAP.LINK");
        echo "\">
                                                        ";
        // line 211
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.ABOUT.ACCOMMODATION_MAP.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 219
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 222
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LEARN_TO_SKI.LINK");
        echo "\">
                                                        ";
        // line 223
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LEARN_TO_SKI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 227
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.OUTDOOR_ACTIVITIES.LINK");
        echo "\">
                                                        ";
        // line 228
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.OUTDOOR_ACTIVITIES.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 232
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.SHOPPING_AND_SIGHTSEEING.LINK");
        echo "\">
                                                        ";
        // line 233
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.SHOPPING_AND_SIGHTSEEING.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 237
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.RESTAURANTS_AND_CAFES.LINK");
        echo "\">
                                                        ";
        // line 238
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.RESTAURANTS_AND_CAFES.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 242
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.APRES_SKI.LINK");
        echo "\">
                                                        ";
        // line 243
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.THINGS_TO_DO.APRES_SKI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 251
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 254
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.INDIA_FORMALITIES.LINK");
        echo "\">
                                                        ";
        // line 255
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.INDIA_FORMALITIES.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 259
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.TRAVEL_INSURANCE.LINK");
        echo "\">
                                                        ";
        // line 260
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.TRAVEL_INSURANCE.TITLE");
        echo "
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"";
        // line 265
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.FLYING_TO_INDIA.LINK");
        echo "\">
                                                        ";
        // line 266
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.FLYING_TO_INDIA.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 270
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_KASHMIR.LINK");
        echo "\">
                                                        ";
        // line 271
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_KASHMIR.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 275
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_GULMARG.LINK");
        echo "\">
                                                        ";
        // line 276
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_GULMARG.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">";
        // line 286
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.TITLE");
        echo "</a>
                            <ul class=\"dropdown-menu\" id=\"the-mountain\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 293
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 296
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.MAIN_GONDOLA_BOWL.LINK");
        echo "\">
                                                        ";
        // line 297
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.MAIN_GONDOLA_BOWL.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 301
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.SURFACE_LIFT.LINK");
        echo "\">
                                                        ";
        // line 302
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.INBOUNDS.SURFACE_LIFT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 310
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 313
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_LEFT.LINK");
        echo "\">
                                                        ";
        // line 314
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_LEFT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 318
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_RIGHT.LINK");
        echo "\">
                                                        ";
        // line 319
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_RIGHT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 323
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.THE_BACK.LINK");
        echo "\">
                                                        ";
        // line 324
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.THE_BACK.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 328
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.FAR_SIDE.LINK");
        echo "\">
                                                        ";
        // line 329
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.FAR_SIDE.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 333
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.MONKEY_HILL.LINK");
        echo "\">
                                                        ";
        // line 334
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.MONKEY_HILL.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 338
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.BABARISHI.LINK");
        echo "\">
                                                        ";
        // line 339
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.BABARISHI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 343
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.TO_TANGMARG.LINK");
        echo "\">
                                                        ";
        // line 344
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.TO_TANGMARG.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 348
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.TO_DRANG.LINK");
        echo "\">
                                                        ";
        // line 349
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.TO_DRANG.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 353
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.SUNSHINE_PEAK.LINK");
        echo "\">
                                                        ";
        // line 354
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.OUT_OF_BOUNDS.SUNSHINE_PEAK.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 362
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 365
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.SKI_GUIDES.LINK");
        echo "\">
                                                        ";
        // line 366
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.SKI_GUIDES.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 370
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.GULMARG_TRAIL_MAP.LINK");
        echo "\">
                                                        ";
        // line 371
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.GULMARG_TRAIL_MAP.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 375
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.SKI_LIFT_TICKETS.LINK");
        echo "\">
                                                        ";
        // line 376
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.SKI_LIFT_TICKETS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 380
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.HOURS_OF_OPERATION.LINK");
        echo "\">
                                                        ";
        // line 381
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.HOURS_OF_OPERATION.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 385
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_STATS.LINK");
        echo "\">
                                                        ";
        // line 386
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_STATS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 390
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_SAFETY.LINK");
        echo "\">
                                                        ";
        // line 391
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_SAFETY.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">";
        // line 401
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.TITLE");
        echo "</a>
                            <ul class=\"dropdown-menu\" id=\"lodging\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 408
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 411
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_SKI_IN_OUT.LINK");
        echo "\">
                                                        ";
        // line 412
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_SKI_IN_OUT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 416
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_ON_THE_GOLF_COURSE.LINK");
        echo "\">
                                                        ";
        // line 417
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_ON_THE_GOLF_COURSE.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 421
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_THE_VILLAGE.LINK");
        echo "\">
                                                        ";
        // line 422
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_THE_VILLAGE.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 426
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_SRINAGAR.LINK");
        echo "\">
                                                        ";
        // line 427
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_SRINAGAR.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 435
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 438
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.BASIC_HOTELS_AND_ROOMS.LINK");
        echo "\">
                                                        ";
        // line 439
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.BASIC_HOTELS_AND_ROOMS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 443
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.ECONOMIC_HOTELS.LINK");
        echo "\">
                                                        ";
        // line 444
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.ECONOMIC_HOTELS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 448
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.COMFORT_HOTELS.LINK");
        echo "\">
                                                        ";
        // line 449
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.COMFORT_HOTELS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 453
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.DELUXE_HOTELS.LINK");
        echo "\">
                                                        ";
        // line 454
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.DELUXE_HOTELS.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 458
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.HOUSEBOAT.LINK");
        echo "\">
                                                        ";
        // line 459
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.ACCOMMODATION_BY_TYPE.HOUSEBOAT.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    ";
        // line 467
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.MORE_OPTIONS.TITLE");
        echo "
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 470
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.MORE_OPTIONS.ACCOMMODATION_IN_DELHI.LINK");
        echo "\">
                                                        ";
        // line 471
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.MORE_OPTIONS.ACCOMMODATION_IN_DELHI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 475
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.MORE_OPTIONS.ACCOMMODATION_IN_MUMBAI.LINK");
        echo "\">
                                                        ";
        // line 476
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "LODGING.MORE_OPTIONS.ACCOMMODATION_IN_MUMBAI.TITLE");
        echo "
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\">";
        // line 486
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.TITLE");
        echo "</a>
                            <ul class=\"dropdown-menu\" id=\"faq\">
                                <li>
                                    <a href=\"";
        // line 489
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.TRAVEL.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.TRAVEL.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.TRAVEL.TITLE");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 492
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.HEALTH_AND_SAFETY.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.HEALTH_AND_SAFETY.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.HEALTH_AND_SAFETY.TITLE");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 495
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.SNOW_SKIING.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.SNOW_SKIING.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.SNOW_SKIING.TITLE");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 498
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.EQUIPMENT.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.EQUIPMENT.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.EQUIPMENT.TITLE");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 501
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.THINGS_TO_DO.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.THINGS_TO_DO.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.THINGS_TO_DO.TITLE");
        echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 504
        echo ($context["base_url"] ?? null);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.LINK");
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.WHY_BOOK_WITH_US.LINK");
        echo "\" title=\"";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.WHY_BOOK_WITH_US.TITLE");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "FAQ.WHY_BOOK_WITH_US.TITLE");
        echo "</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 509
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "BLOG.LINK");
        echo "\">";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "BLOG.TITLE");
        echo "</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1144 => 509,  1130 => 504,  1118 => 501,  1106 => 498,  1094 => 495,  1082 => 492,  1070 => 489,  1064 => 486,  1051 => 476,  1045 => 475,  1038 => 471,  1032 => 470,  1026 => 467,  1015 => 459,  1008 => 458,  1001 => 454,  994 => 453,  987 => 449,  980 => 448,  973 => 444,  966 => 443,  959 => 439,  952 => 438,  946 => 435,  935 => 427,  928 => 426,  921 => 422,  914 => 421,  907 => 417,  900 => 416,  893 => 412,  886 => 411,  880 => 408,  870 => 401,  857 => 391,  851 => 390,  844 => 386,  838 => 385,  831 => 381,  825 => 380,  818 => 376,  812 => 375,  805 => 371,  799 => 370,  792 => 366,  786 => 365,  780 => 362,  769 => 354,  762 => 353,  755 => 349,  748 => 348,  741 => 344,  734 => 343,  727 => 339,  720 => 338,  713 => 334,  706 => 333,  699 => 329,  692 => 328,  685 => 324,  678 => 323,  671 => 319,  664 => 318,  657 => 314,  650 => 313,  644 => 310,  633 => 302,  626 => 301,  619 => 297,  612 => 296,  606 => 293,  596 => 286,  583 => 276,  576 => 275,  569 => 271,  562 => 270,  555 => 266,  548 => 265,  540 => 260,  533 => 259,  526 => 255,  519 => 254,  513 => 251,  502 => 243,  495 => 242,  488 => 238,  481 => 237,  474 => 233,  467 => 232,  460 => 228,  453 => 227,  446 => 223,  439 => 222,  433 => 219,  422 => 211,  415 => 210,  408 => 206,  401 => 205,  394 => 201,  387 => 200,  380 => 196,  373 => 195,  366 => 191,  359 => 190,  352 => 186,  346 => 185,  340 => 182,  330 => 175,  317 => 165,  311 => 164,  304 => 160,  298 => 159,  291 => 155,  285 => 154,  278 => 150,  272 => 149,  265 => 145,  259 => 144,  253 => 141,  242 => 133,  235 => 132,  228 => 128,  221 => 127,  214 => 123,  207 => 122,  204 => 121,  199 => 114,  188 => 106,  181 => 105,  174 => 101,  167 => 100,  160 => 96,  153 => 95,  146 => 91,  139 => 90,  132 => 86,  125 => 85,  119 => 82,  109 => 75,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header-transparent\">
    <div id=\"header-wrap\">
        <div class=\"container\">
            <!--Logo-->
            <div id=\"logo\">
                <a href=\"{{ home_url }}\" class=\"logo\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 102.156 70.559\">
                        <title>Skigulmarg.com</title>
                        <defs>
                            <style>
                                .skigulmarg-logo {fill: #fff;}
                                .cls-3 {clip-path: url(#clip-path);}
                                .cls-4 {clip-path: url(#clip-path-2);}
                            </style>
                            <clipPath id=\"clip-path\">
                                <path id=\"Path_200\" data-name=\"Path 200\" class=\"skigulmarg-logo\" d=\"M0-42.391H87.873V13.487H0Z\" transform=\"translate(0 42.391)\"/>
                            </clipPath>
                            <clipPath id=\"clip-path-2\">
                                <path id=\"Path_214\" data-name=\"Path 214\" class=\"cls-2\" d=\"M0-16.805H102.156v7.7H0Z\" transform=\"translate(0 16.805)\"/>
                            </clipPath>
                        </defs>
                      <g id=\"LOGO\" transform=\"translate(-85 -11)\">
                        <g id=\"Group_4\" data-name=\"Group 4\" transform=\"translate(91.864 11)\">
                          <g id=\"Group_3\" data-name=\"Group 3\" class=\"cls-3\" transform=\"translate(0 0)\">
                            <g id=\"Group_1\" data-name=\"Group 1\" transform=\"translate(0 19.113)\">
                              <path id=\"Path_198\" data-name=\"Path 198\" class=\"skigulmarg-logo\" d=\"M20.308,5.106c-.956-1.334-1.868-3.239-3.388-4.039a19.828,19.828,0,0,1-4.5-2.922c-1.6-1.42-4.818-2.2-6.477-3.017C3.466-6.085,2.256-7.108.733-7.374a6.632,6.632,0,0,1-2.976-1.77L-7.792-6.892s5.389.082,5.509.334c.158.349,2.858,2.311,1.406,3.287S-7.62-4.25-9.908-5.849s-11.885-7.18-14.629-9.312-7.776,0-10.75,1.863S-44.887-7.177-45.8-6.91-59.79,7.2-59.79,7.2s-6.173,11.075-3.257,8.743S-59,9.648-56.6,7.654c1.322-1.1,1.915-1.689,3.123-1.838l.08-.082S-50.78,1.521-48.489.026s3.175-3.365,5.067-4.264,3.152-.877,4.745-2.171,1.6-2.573,3.39-3.274c1.6-.62,3.742-1.24,4.686-1.577-3.071,2.288-9.024,7.347-6.75,10.624,3.016,4.342,17.733,3.858,7.842,10.978a176.313,176.313,0,0,1-15.8,10.375s6.153-1.087,8.567-2.656,4.317-1.613,5.887-2.942a26.286,26.286,0,0,1,5.306-3.7c1.81-.842,3.46-2.491,3.46-4.181s1.608-2.611-1.529-4.184-5.72-2.969-7.4-3.377c-3.642-.888-4.5-2.088-3.025-4.351,1.827-2.8,1.773-3.009,1.96-3.168,1.312-1.115,2.776-3.052,5.336-3.46.145.037.293.07.435.119,1.294-.65,7.341,4.88,8.92,5.867,1.6,1,5.662,2.261,8.348,3.591A75,75,0,0,0,.25,1.393L4.841-2.322A7.734,7.734,0,0,1,6.723.2c.287,1.064.112,2.2-1.424,3.655a26.539,26.539,0,0,0-2.518,2.8C1.3,8.317,1.524,8.383.209,9.116c-1.13.631-3.62,1.951-4.068,2.178.523-.219,4.152-.79,5.1-1.114A4.437,4.437,0,0,0,3.35,8.054c.457-.8,1.95-.935,3.431-2.331S7.529,4.463,8.037,2.4,7.983,1.4,9.526,1s4.836,1.71,5.6,2.149,1.028.091,1.867.492S19.32,5.859,20.5,6.7a38.721,38.721,0,0,1,3.543,3.322c-.571-1.992-2.781-3.589-3.734-4.918\" transform=\"translate(63.83 16.049)\"/>
                            </g>
                            <g id=\"Group_2\" data-name=\"Group 2\" transform=\"translate(65.148 0.001)\">
                              <path id=\"Path_199\" data-name=\"Path 199\" class=\"skigulmarg-logo\" d=\"M3.185,2.741,5.4,1.9,5.07,1.047,2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175,2.66-5.527l-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107,2.708,1.67-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358.919,0,.009-2.917,2.46-1.49a1.806,1.806,0,0,0,.494.29V4.839L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506L5.271,5.563l.684-1.109Z\" transform=\"translate(10.01 8.614)\"/>
                            </g>
                          </g>
                        </g>
                        <g id=\"Group_17\" data-name=\"Group 17\" transform=\"translate(85 73.863)\">
                          <g id=\"Group_16\" data-name=\"Group 16\" class=\"cls-4\" transform=\"translate(0 0)\">
                            <g id=\"Group_13\" data-name=\"Group 13\" transform=\"translate(0 0)\">
                              <path id=\"Path_210\" data-name=\"Path 210\" class=\"skigulmarg-logo\" d=\"M-11.042-6.21a2.443,2.443,0,0,1-.544,1.771,2.38,2.38,0,0,1-1.747.549h-6.834V-5.526h5.833a3.28,3.28,0,0,0,.37-.019,1.1,1.1,0,0,0,.313-.082.53.53,0,0,0,.231-.188.564.564,0,0,0,.087-.327.549.549,0,0,0-.12-.37.685.685,0,0,0-.313-.2,1.688,1.688,0,0,0-.4-.076q-.207-.014-.506-.015-.183-.009-1.03-.038-1.328-.048-1.665-.062L-18-6.937c-.2-.009-.369-.021-.51-.033a1.888,1.888,0,0,1-1.531-.7,2.564,2.564,0,0,1-.327-1.434,2.858,2.858,0,0,1,.453-1.762,1.78,1.78,0,0,1,1.5-.587h7.094V-9.82h-5.833A2.9,2.9,0,0,0-17.5-9.8a.978.978,0,0,0-.289.082.515.515,0,0,0-.217.188.591.591,0,0,0-.082.327.472.472,0,0,0,.26.481,1.823,1.823,0,0,0,.722.116h.4q.173.009,1.011.038,1.155.038,1.6.058l.756.033c.205.01.375.021.51.033a1.7,1.7,0,0,1,1.482.77,3.13,3.13,0,0,1,.308,1.463\" transform=\"translate(20.37 11.456)\"/>
                            </g>
                            <g id=\"Group_14\" data-name=\"Group 14\" transform=\"translate(10.444 0)\">
                              <path id=\"Path_211\" data-name=\"Path 211\" class=\"skigulmarg-logo\" d=\"M-7.578,0h3.128L-8.771,3.648l4.88,3.917H-7.308l-4.313-3.917Zm-4.043,7.566h-2.358V0h2.358Z\" transform=\"translate(13.979 0)\"/>
                            </g>
                            <path id=\"Path_212\" data-name=\"Path 212\" class=\"skigulmarg-logo\" d=\"M50.559-9.238H48.2V-16.8h2.358Z\" transform=\"translate(-26.129 16.804)\"/>
                            <g id=\"Group_15\" data-name=\"Group 15\" transform=\"translate(26.46 0.062)\">
                              <path id=\"Path_213\" data-name=\"Path 213\" class=\"skigulmarg-logo\" d=\"M-73.966-5.731a3.935,3.935,0,0,0,1.121-.135,1.587,1.587,0,0,0,.718-.423,1.74,1.74,0,0,0,.394-.761,4.576,4.576,0,0,0,.125-1.164,3.514,3.514,0,0,0-.158-1.146,1.535,1.535,0,0,0-.5-.717,2.124,2.124,0,0,0-.866-.38,6.317,6.317,0,0,0-1.328-.116h-6.276v7.566h2.358v-5.68h3.744a.917.917,0,0,1,.607.217.688.688,0,0,1,.26.553.692.692,0,0,1-.269.588,1.016,1.016,0,0,1-.626.2h-3.388l4.552,4.12h2.619l-3.09-2.686Zm8.307-1.858L-62.8-6.163V-5.3a.374.374,0,0,1-.164.314.927.927,0,0,1-.539.12h-4.081a1.258,1.258,0,0,1-.554-.081.379.379,0,0,1-.139-.353V-8.32a.335.335,0,0,1,.164-.28.939.939,0,0,1,.529-.116h6.806v-1.857h-7.066a2.818,2.818,0,0,0-1.876.529,1.94,1.94,0,0,0-.616,1.559V-5a2.5,2.5,0,0,0,.106.794,1.29,1.29,0,0,0,.394.563,1.787,1.787,0,0,0,.529.371,2.755,2.755,0,0,0,.74.192A10.808,10.808,0,0,0-67.46-3q.654.019,1.906.019T-63.643-3a10.981,10.981,0,0,0,1.116-.082,2.973,2.973,0,0,0,.76-.192,1.859,1.859,0,0,0,.554-.371,1.437,1.437,0,0,0,.361-.573,2.591,2.591,0,0,0,.1-.784v-2.59Zm-23.371-2.983L-93.18-3.006h2.618l.7-1.29h0L-89-5.923l.016-.029.19-.362h0l1.252-2.334,1.463,2.724H-88.6L-89.391-4.3h4.181l.693,1.29H-81.9l-4.11-7.566ZM-128.91-6.163V-5.3a.374.374,0,0,1-.164.314.929.929,0,0,1-.539.12H-133.7a1.261,1.261,0,0,1-.554-.081c-.093-.055-.139-.172-.139-.353V-8.32a.336.336,0,0,1,.163-.28.944.944,0,0,1,.53-.116h6.805v-1.857h-7.066a2.823,2.823,0,0,0-1.877.529,1.943,1.943,0,0,0-.616,1.559V-5a2.524,2.524,0,0,0,.106.794,1.3,1.3,0,0,0,.4.563,1.794,1.794,0,0,0,.529.371,2.755,2.755,0,0,0,.741.192A10.778,10.778,0,0,0-133.57-3q.654.019,1.906.019t1.91-.019a10.982,10.982,0,0,0,1.117-.082,2.972,2.972,0,0,0,.76-.192,1.868,1.868,0,0,0,.554-.371,1.438,1.438,0,0,0,.361-.573,2.592,2.592,0,0,0,.1-.784v-2.59h-4.909Zm28.983.038-.029-.038-2.089-4.409h-3.687v7.566h2.194V-8.512h.029l2.791,5.506h1.589l2.753-5.506h.038v5.506h2.185v-7.566h-3.677Zm-18.1.6a.43.43,0,0,1-.188.361,1.038,1.038,0,0,1-.611.139h-3.35a.974.974,0,0,1-.582-.139.43.43,0,0,1-.188-.361v-5.043h-2.32V-5.2a2.973,2.973,0,0,0,.11.867,1.627,1.627,0,0,0,.418.664,3.487,3.487,0,0,0,.544.424,1.8,1.8,0,0,0,.606.2,7.791,7.791,0,0,0,1.055.087q.674.019,2.051.019t2.055-.019a7.743,7.743,0,0,0,1.049-.087,1.808,1.808,0,0,0,.6-.2,3.667,3.667,0,0,0,.543-.429,1.62,1.62,0,0,0,.419-.664A2.971,2.971,0,0,0-115.7-5.2v-5.371h-2.32Zm6-5.043h-2.359v7.566h7.47V-4.835h-5.111Z\" transform=\"translate(136.448 10.572)\"/>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                </a>
            </div>
            <!--End: Logo-->

            <!--Header Extras-->
            <div class=\"menu-right\">
                <ul>
                    <li id=\"weather\" class=\"dropdown mega-menu-item\"></li>
                    <li>
                        <a href=\"https://www.facebook.com/skigulmarg\" class=\"title\" title=\"Skigulmarg Facebook\" target=\"_blank\"><i class=\"fa fa-facebook-square\"></i></a>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id=\"mainMenu-trigger\">
                <button class=\"lines-button x\"> <span class=\"lines\"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id=\"mainMenu\" class=\"menu-left\">
                <nav>
                    <ul>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">{{ \"PACKAGES.TITLE\"|raw|t }}</a>
                            <ul class=\"dropdown-menu\" id=\"deals-and-packages\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"PACKAGES.POWDER.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.SKI_BUM.LINK\"|t }}\">
                                                        {{ \"PACKAGES.POWDER.SKI_BUM.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.ECONOMIC.LINK\"|t }}\">
                                                        {{ \"PACKAGES.POWDER.ECONOMIC.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.COMFORT.LINK\"|t }}\">
                                                        {{ \"PACKAGES.POWDER.COMFORT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.DELUXE.LINK\"|t }}\">
                                                        {{ \"PACKAGES.POWDER.DELUXE.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.POWDER.LINK\"|t }}{{ \"PACKAGES.POWDER.HELISKI.LINK\"|t }}\">
                                                        {{ \"PACKAGES.POWDER.HELISKI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"PACKAGES.BEGINNER.TITLE\"|t }}
                                                </li>
                                                {# <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.BEGINNER.LINK\"|t }}{{ \"PACKAGES.BEGINNER.HOTEL_SHAW_INN.LINK\"|t }}\">
                                                        {{ \"PACKAGES.BEGINNER.HOTEL_SHAW_INN.TITLE\"|t }}
                                                    </a>
                                                </li> #}
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.BEGINNER.LINK\"|t }}{{ \"PACKAGES.BEGINNER.HOTEL_KHALEEL.LINK\"|t }}\">
                                                        {{ \"PACKAGES.BEGINNER.HOTEL_KHALEEL.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.BEGINNER.LINK\"|t }}{{ \"PACKAGES.BEGINNER.HIGHLANDS_PARK.LINK\"|t }}\">
                                                        {{ \"PACKAGES.BEGINNER.HIGHLANDS_PARK.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.BEGINNER.LINK\"|t }}{{ \"PACKAGES.BEGINNER.KHYBER_RESORT.LINK\"|t }}\">
                                                        {{ \"PACKAGES.BEGINNER.KHYBER_RESORT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"PACKAGES.MORE_OPTIONS.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.CUSTOM.LINK\"|t }}\">
                                                        {{ \"PACKAGES.MORE_OPTIONS.CUSTOM.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.RENATAL.LINK\"|t }}\">
                                                        {{ \"PACKAGES.MORE_OPTIONS.RENATAL.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.GROUP.LINK\"|t }}\">
                                                        {{ \"PACKAGES.MORE_OPTIONS.GROUP.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.WHY_BOOK_WITH_US.LINK\"|t }}\">
                                                        {{ \"PACKAGES.MORE_OPTIONS.WHY_BOOK_WITH_US.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <strong><a href=\"{{ base_url }}{{ \"PACKAGES.LINK\"|t }}{{ \"PACKAGES.MORE_OPTIONS.JAPAN_SKI_PACKAGES.LINK\"|t }}\">
                                                        {{ \"PACKAGES.MORE_OPTIONS.JAPAN_SKI_PACKAGES.TITLE\"|t }}
                                                    </a></strong>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">{{ \"GULMARG_SKI_RESORT.TITLE\"|raw|t }}</a>
                            <ul class=\"dropdown-menu\" id=\"gulmarg-ski-resort\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"GULMARG_SKI_RESORT.ABOUT.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.IN_WINTER.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.IN_WINTER.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.IN_SUMMER.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.IN_SUMMER.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.IMAGES.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.IMAGES.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.WEATHER.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.WEATHER.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.ABOUT.ACCOMMODATION_MAP.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.ABOUT.ACCOMMODATION_MAP.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LEARN_TO_SKI.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LEARN_TO_SKI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.OUTDOOR_ACTIVITIES.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.OUTDOOR_ACTIVITIES.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.SHOPPING_AND_SIGHTSEEING.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.SHOPPING_AND_SIGHTSEEING.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.RESTAURANTS_AND_CAFES.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.RESTAURANTS_AND_CAFES.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.APRES_SKI.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.THINGS_TO_DO.APRES_SKI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"GULMARG_SKI_RESORT.GETTING_HERE.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.INDIA_FORMALITIES.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.GETTING_HERE.INDIA_FORMALITIES.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.TRAVEL_INSURANCE.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.GETTING_HERE.TRAVEL_INSURANCE.TITLE\"|t }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.FLYING_TO_INDIA.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.GETTING_HERE.FLYING_TO_INDIA.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_KASHMIR.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_KASHMIR.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"GULMARG_SKI_RESORT.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.LINK\"|t }}{{ \"GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_GULMARG.LINK\"|t }}\">
                                                        {{ \"GULMARG_SKI_RESORT.GETTING_HERE.GETTING_TO_GULMARG.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">{{ \"THE_MOUNTAIN.TITLE\"|raw|t }}</a>
                            <ul class=\"dropdown-menu\" id=\"the-mountain\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"THE_MOUNTAIN.INBOUNDS.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.INBOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.INBOUNDS.MAIN_GONDOLA_BOWL.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.INBOUNDS.MAIN_GONDOLA_BOWL.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.INBOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.INBOUNDS.SURFACE_LIFT.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.INBOUNDS.SURFACE_LIFT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_LEFT.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_LEFT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_RIGHT.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LOCKERS_RIGHT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.THE_BACK.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.THE_BACK.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.FAR_SIDE.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.FAR_SIDE.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.MONKEY_HILL.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.MONKEY_HILL.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.BABARISHI.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.BABARISHI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.TO_TANGMARG.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.TO_TANGMARG.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.TO_DRANG.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.TO_DRANG.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.LINK\"|t }}{{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.SUNSHINE_PEAK.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.OUT_OF_BOUNDS.SUNSHINE_PEAK.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"THE_MOUNTAIN.MORE_OPTIONS.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.SKI_GUIDES.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.SKI_GUIDES.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.GULMARG_TRAIL_MAP.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.GULMARG_TRAIL_MAP.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.SKI_LIFT_TICKETS.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.SKI_LIFT_TICKETS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.HOURS_OF_OPERATION.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.HOURS_OF_OPERATION.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_STATS.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_STATS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"THE_MOUNTAIN.LINK\"|t }}{{ \"THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_SAFETY.LINK\"|t }}\">
                                                        {{ \"THE_MOUNTAIN.MORE_OPTIONS.MOUNTAIN_SAFETY.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown mega-menu-item\">
                            <a href=\"#\">{{ \"LODGING.TITLE\"|raw|t }}</a>
                            <ul class=\"dropdown-menu\" id=\"lodging\">
                                <li class=\"mega-menu-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"LODGING.ACCOMMODATION_BY_AREA.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_SKI_IN_OUT.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_SKI_IN_OUT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_ON_THE_GOLF_COURSE.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_ON_THE_GOLF_COURSE.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_THE_VILLAGE.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_THE_VILLAGE.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_SRINAGAR.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_AREA.HOTELS_IN_SRINAGAR.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"LODGING.ACCOMMODATION_BY_TYPE.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.BASIC_HOTELS_AND_ROOMS.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_TYPE.BASIC_HOTELS_AND_ROOMS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.ECONOMIC_HOTELS.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_TYPE.ECONOMIC_HOTELS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.COMFORT_HOTELS.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_TYPE.COMFORT_HOTELS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.DELUXE_HOTELS.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_TYPE.DELUXE_HOTELS.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.LINK\"|t }}{{ \"LODGING.ACCOMMODATION_BY_TYPE.HOUSEBOAT.LINK\"|t }}\">
                                                        {{ \"LODGING.ACCOMMODATION_BY_TYPE.HOUSEBOAT.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <ul>
                                                <li class=\"mega-menu-title\">
                                                    {{ \"LODGING.MORE_OPTIONS.TITLE\"|t }}
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.MORE_OPTIONS.ACCOMMODATION_IN_DELHI.LINK\"|t }}\">
                                                        {{ \"LODGING.MORE_OPTIONS.ACCOMMODATION_IN_DELHI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ base_url }}{{ \"LODGING.LINK\"|t }}{{ \"LODGING.MORE_OPTIONS.ACCOMMODATION_IN_MUMBAI.LINK\"|t }}\">
                                                        {{ \"LODGING.MORE_OPTIONS.ACCOMMODATION_IN_MUMBAI.TITLE\"|t }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\">{{ \"FAQ.TITLE\"|t }}</a>
                            <ul class=\"dropdown-menu\" id=\"faq\">
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.TRAVEL.LINK\"|t }}\" title=\"{{ \"FAQ.TRAVEL.TITLE\"|t }}\">{{ \"FAQ.TRAVEL.TITLE\"|t }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.HEALTH_AND_SAFETY.LINK\"|t }}\" title=\"{{ \"FAQ.HEALTH_AND_SAFETY.TITLE\"|t }}\">{{ \"FAQ.HEALTH_AND_SAFETY.TITLE\"|t }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.SNOW_SKIING.LINK\"|t }}\" title=\"{{ \"FAQ.SNOW_SKIING.TITLE\"|t }}\">{{ \"FAQ.SNOW_SKIING.TITLE\"|t }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.EQUIPMENT.LINK\"|t }}\" title=\"{{ \"FAQ.EQUIPMENT.TITLE\"|t }}\">{{ \"FAQ.EQUIPMENT.TITLE\"|t }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.THINGS_TO_DO.LINK\"|t }}\" title=\"{{ \"FAQ.THINGS_TO_DO.TITLE\"|t }}\">{{ \"FAQ.THINGS_TO_DO.TITLE\"|t }}</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url }}{{ \"FAQ.LINK\"|t }}{{ \"FAQ.WHY_BOOK_WITH_US.LINK\"|t }}\" title=\"{{ \"FAQ.WHY_BOOK_WITH_US.TITLE\"|t }}\">{{ \"FAQ.WHY_BOOK_WITH_US.TITLE\"|t }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"{{ \"BLOG.LINK\"|t }}\">{{ \"BLOG.TITLE\"|t }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
", "partials/header.html.twig", "C:\\xampp\\htdocs\\bookingSystem\\user\\themes\\skigulmarg\\templates\\partials\\header.html.twig");
    }
}
