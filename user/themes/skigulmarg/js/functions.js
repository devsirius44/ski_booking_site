//Global var
var SKIGULMARG = {},
    $ = jQuery.noConflict();
(function ($) {
    "use strict";
    //----------------------------------------------------/
    // Predefined Variables
    //----------------------------------------------------/
    var $window = $(window),
        $body = $('body'),
        $wrapper = $('#wrapper'),
        $section = $('section'),
        $pageContent = $('#page-content'),
        $pageTitle = $('#page-title'),
        $topbar = $('#topbar'),
        $header = $('#header'),
        $headerCurrentClasses = $header.attr('class'),
        $currentDocumentPossition = $(document).scrollTop(),
        logo = $('#logo').find('.logo'),
        logoImg = logo.find('img').attr('src'),
        logoDark = logo.attr('data-dark-logo'), //Main menu
        //mainmenuitems = $("#mainMenu > ul > li"),
        $mainmenu = $('#mainMenu'),
        $mainmenuitems = $mainmenu.find('li.dropdown > a'),
        $mainsubmenuitems = $mainmenu.find('li.dropdown-submenu > a, li.dropdown-submenu > span'), //Vertical Dot Menu
        // $dotsMenu = $('#dotsMenu'),
        // $dotsMenuItems = $dotsMenu.find("ul > li > a"),
        $pageMenu = $('.page-menu'),
        sidePanel = $('#side-panel'),
        sidePanellogo = $('#panel-logo').find('.logo'),
        sidePanellogoImg = sidePanellogo.find('img').attr('src'),
        sidePanellogoDark = sidePanellogo.attr('data-dark-logo'),
        /*Footer*/
        $footer = $('#footer'),
        $footerStickyClass = $(".footer-sticky"), //Fullscreen panel
        fullScreenPanel = $('#fullscreen-panel'),
        $topSearch = $('#top-search'),
        $parallax = $('[data-parallax-image]'),
        $textRotator = $('.text-rotator'), //Window size control
        $slider = $('#slider'),
        $carousel = $('.carousel'),
        $carouselIcons = ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

        $flickity = $('.carousell'),
        // $equalize = $('.equalize'),
        /*Grid Layout*/
        $gridLayout = $(".grid-layout"),
        $gridFilter = $(".grid-filter"), //Elements
        dataAnimation = $("[data-animation]"),
        $counter = $('.counter:not(.counter-instant)'),
        $countdownTimer = $('.countdown'),
        $progressBar = $('.progress-bar'),
        $pieChart = $('.pie-chart'),
        $map = $('.map'),
        accordionType = "accordion",
        toogleType = "toggle",
        accordionItem = "ac-item",
        itemActive = "ac-active",
        itemTitle = "ac-title",
        itemContent = "ac-content",
        $lightbox_gallery = $('[data-lightbox="gallery"]'),
        $lightbox_image = $('[data-lightbox="image"]'),
        $lightbox_iframe = $('[data-lightbox="iframe"]'),
        $lightbox_ajax = $('[data-lightbox="ajax"]'),
        $lightbox_inline = $('[data-lightbox="inline"]'), //Widgets
        $widget_twitter = $('.widget-tweeter') || $('.widget-twitter'),
        $flickr_widget = $('.flickr-widget'),
        $ytPlayer = $('.youtube-background'),
        $pinOnScroll = $('.pinOnScroll'),
        // $contactForm = $(".widget-contact-form"),
        // $subscribeForm = $(".widget-subscribe-form"),
        $goToTop = $('#goToTop'),

        //Utilites
        classFinder = ".";

    if ($header.length > 0) {
        var $headerOffsetTop = $header.offset().top;
    }

    SKIGULMARG.core = {
        functions: function () {
            SKIGULMARG.core.pageLoader();
            // SKIGULMARG.core.responsiveClasses();
            SKIGULMARG.core.goToTop();
            // SKIGULMARG.core.rtlStatus();
            // SKIGULMARG.core.customHeight();
            // SKIGULMARG.core.equalize();
            // SKIGULMARG.core.stickyFooter();
        },
   //      responsiveClasses: function () {
   //          if (typeof jRespond === 'undefined') {
   //              console.log('responsiveClasses: jRespond plugin is missing.');
   //              return true;
   //          }
   //          var jRes = jRespond([
   //              {
   //                  label: 'smallest',
   //                  enter: 0,
   //                  exit: 479
			// 	}, {
   //                  label: 'handheld',
   //                  enter: 480,
   //                  exit: 767
			// 	}, {
   //                  label: 'tablet',
   //                  enter: 768,
   //                  exit: 991
			// 	}, {
   //                  label: 'laptop',
   //                  enter: 992,
   //                  exit: 1199
			// 	}, {
   //                  label: 'desktop',
   //                  enter: 1200,
   //                  exit: 1000
			// 	}
			// ]);
   //          jRes.addFunc([
   //              {
   //                  breakpoint: 'desktop',
   //                  enter: function () {
   //                      $body.addClass('device-lg');
   //                  },
   //                  exit: function () {
   //                      $body.removeClass('device-lg');
   //                  }
			// 	}, {
   //                  breakpoint: 'laptop',
   //                  enter: function () {
   //                      $body.addClass('device-md');
   //                  },
   //                  exit: function () {
   //                      $body.removeClass('device-md');
   //                  }
			// 	}, {
   //                  breakpoint: 'tablet',
   //                  enter: function () {
   //                      $body.addClass('device-sm');
   //                  },
   //                  exit: function () {
   //                      $body.removeClass('device-sm');
   //                  }
			// 	}, {
   //                  breakpoint: 'handheld',
   //                  enter: function () {
   //                      $body.addClass('device-xs');
   //                  },
   //                  exit: function () {
   //                      $body.removeClass('device-xs');
   //                  }
			// 	}, {
   //                  breakpoint: 'smallest',
   //                  enter: function () {
   //                      $body.addClass('device-xxs');
   //                  },
   //                  exit: function () {
   //                      $body.removeClass('device-xxs');
   //                  }
			// 	}
			// ]);
   //      },
        goToTop: function () {
            if ($goToTop.length > 0) {

                var scrollOffset = $body.attr('data-offset') || 800;

                if ($window.scrollTop() > scrollOffset) {
                    $goToTop.css({
                        'bottom': '20px',
                        'opacity': 1
                    });
                } else {
                    $goToTop.css({
                        'bottom': '16px',
                        'opacity': 0
                    });
                }

                $goToTop.click(function () {
                    $('body,html').stop(true).animate({
                        'scrollTop': 0
                    }, 1500, 'easeInOutExpo');
                    return false;
                });
            }
        },
        pageLoader: function () {
            if (!$().animsition) {
                console.log('pageLoader: animsition plugin is missing.');
                return true;
            }

            if (!$body.hasClass('no-page-loader')) {
                var pageInAnimation = $body.attr('data-animation-in') || "fadeIn",
                    pageOutAnimation = $body.attr('data-animation-out') || "fadeOut",
                    pageInDuration = $body.attr('data-speed-in') || 1500,
                    pageOutDuration = $body.attr('data-speed-out') || 800,
                    loadingInnerHTML = '\
                        <div class="loader-inner">\
                            <svg id="snowflake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">\
                                <path id="snowflake-loader" d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>\
                            </svg>\
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102.156 7.7" width="110" style="display:block;margin-left: -15px; margin-top: 15px">\
                              <g id="skigulmarg" class="cls-2">\
                                <g id="Group_13" data-name="Group 13">\
                                  <path id="Path_210" data-name="Path 210" class="cls-1" d="M-11.042-6.21a2.443,2.443,0,0,1-.544,1.771,2.38,2.38,0,0,1-1.747.549h-6.834V-5.526h5.833a3.28,3.28,0,0,0,.37-.019,1.1,1.1,0,0,0,.313-.082.53.53,0,0,0,.231-.188.564.564,0,0,0,.087-.327.549.549,0,0,0-.12-.37.685.685,0,0,0-.313-.2,1.688,1.688,0,0,0-.4-.076q-.207-.014-.506-.015-.183-.009-1.03-.038L-17.367-6.9-18-6.937c-.2-.009-.369-.021-.51-.033a1.888,1.888,0,0,1-1.531-.7A2.564,2.564,0,0,1-20.368-9.1a2.858,2.858,0,0,1,.453-1.762,1.78,1.78,0,0,1,1.5-.587h7.094V-9.82h-5.833a2.9,2.9,0,0,0-.346.02.978.978,0,0,0-.289.082.515.515,0,0,0-.217.188.591.591,0,0,0-.082.327.472.472,0,0,0,.26.481,1.823,1.823,0,0,0,.722.116h.4q.173.009,1.011.038,1.155.038,1.6.058l.756.033q.307.015.51.033a1.7,1.7,0,0,1,1.482.77,3.13,3.13,0,0,1,.308,1.463" transform="translate(20.37 11.456)"/>\
                                </g>\
                                <g id="Group_14" data-name="Group 14" transform="translate(10.444)">\
                                  <path id="Path_211" data-name="Path 211" class="cls-1" d="M-7.578,0H-4.45L-8.771,3.648l4.88,3.917H-7.308l-4.313-3.917Zm-4.043,7.566h-2.358V0h2.358Z" transform="translate(13.979)"/>\
                                </g>\
                                <path id="Path_212" data-name="Path 212" class="cls-1" d="M50.559-9.238H48.2V-16.8h2.358Z" transform="translate(-26.129 16.804)"/>\
                                <g id="Group_15" data-name="Group 15" transform="translate(26.46 0.062)">\
                                  <path id="Path_213" data-name="Path 213" class="cls-1" d="M-73.966-5.731a3.935,3.935,0,0,0,1.121-.135,1.587,1.587,0,0,0,.718-.423,1.74,1.74,0,0,0,.394-.761,4.576,4.576,0,0,0,.125-1.164,3.514,3.514,0,0,0-.158-1.146,1.535,1.535,0,0,0-.5-.717,2.124,2.124,0,0,0-.866-.38,6.317,6.317,0,0,0-1.328-.116h-6.276v7.566h2.358v-5.68h3.744a.917.917,0,0,1,.607.217.688.688,0,0,1,.26.553.692.692,0,0,1-.269.588,1.016,1.016,0,0,1-.626.2H-78.05l4.552,4.12h2.619L-73.969-5.7Zm8.307-1.858L-62.8-6.163V-5.3a.374.374,0,0,1-.164.314.927.927,0,0,1-.539.12h-4.081a1.258,1.258,0,0,1-.554-.081.379.379,0,0,1-.139-.353V-8.32a.335.335,0,0,1,.164-.28.939.939,0,0,1,.529-.116h6.806v-1.857h-7.066a2.818,2.818,0,0,0-1.876.529,1.94,1.94,0,0,0-.616,1.559V-5a2.5,2.5,0,0,0,.106.794,1.29,1.29,0,0,0,.394.563,1.787,1.787,0,0,0,.529.371,2.755,2.755,0,0,0,.74.192A10.808,10.808,0,0,0-67.46-3q.654.019,1.906.019T-63.643-3a10.982,10.982,0,0,0,1.116-.082,2.973,2.973,0,0,0,.76-.192,1.859,1.859,0,0,0,.554-.371,1.437,1.437,0,0,0,.361-.573,2.591,2.591,0,0,0,.1-.784v-2.59ZM-89.03-10.572l-4.15,7.566h2.618l.7-1.29h0L-89-5.923l.016-.029.19-.362h0l1.252-2.334,1.463,2.724H-88.6L-89.391-4.3h4.181l.693,1.29H-81.9l-4.11-7.566Zm-39.88,4.409V-5.3a.374.374,0,0,1-.164.314.929.929,0,0,1-.539.12H-133.7a1.261,1.261,0,0,1-.554-.081c-.093-.055-.139-.172-.139-.353V-8.32a.336.336,0,0,1,.163-.28.944.944,0,0,1,.53-.116h6.805v-1.857h-7.066a2.823,2.823,0,0,0-1.877.529,1.943,1.943,0,0,0-.616,1.559V-5a2.524,2.524,0,0,0,.106.794,1.3,1.3,0,0,0,.4.563,1.794,1.794,0,0,0,.529.371,2.755,2.755,0,0,0,.741.192A10.778,10.778,0,0,0-133.57-3q.654.019,1.906.019t1.91-.019a10.982,10.982,0,0,0,1.117-.082,2.972,2.972,0,0,0,.76-.192,1.868,1.868,0,0,0,.554-.371,1.438,1.438,0,0,0,.361-.573,2.592,2.592,0,0,0,.1-.784v-2.59h-4.909Zm28.983.038-.029-.038-2.089-4.409h-3.687v7.566h2.194V-8.512h.029l2.791,5.506h1.589l2.753-5.506h.038v5.506h2.185v-7.566H-97.83Zm-18.1.6a.43.43,0,0,1-.188.361,1.038,1.038,0,0,1-.611.139h-3.35a.974.974,0,0,1-.582-.139.43.43,0,0,1-.188-.361v-5.043h-2.32V-5.2a2.973,2.973,0,0,0,.11.867,1.627,1.627,0,0,0,.418.664,3.487,3.487,0,0,0,.544.424,1.8,1.8,0,0,0,.606.2,7.791,7.791,0,0,0,1.055.087q.674.019,2.051.019t2.055-.019a7.743,7.743,0,0,0,1.049-.087,1.808,1.808,0,0,0,.6-.2,3.667,3.667,0,0,0,.543-.429,1.62,1.62,0,0,0,.419-.664A2.971,2.971,0,0,0-115.7-5.2v-5.371h-2.32Zm6-5.043h-2.359V-3h7.47V-4.835h-5.111Z" transform="translate(136.448 10.572)"/>\
                                </g>\
                              </g>\
                            </svg>\
                        </div>';

                $('#wrapper').animsition({
                    inClass: pageInAnimation,
                    outClass: pageOutAnimation,
                    inDuration: pageInDuration,
                    outDuration: pageOutDuration,
                    loading: true,
                    loadingParentElement: 'body', //animsition wrapper element
                    loadingClass: 'animsition-loading',
                    loadingInner: '<div class="loader">' + loadingInnerHTML + '</div>',
                    linkElement: '#mainMenu a:not([target="_blank"]):not([href^=#]), .animsition-link'
                });
                setTimeout(function () {
                    if ($(".animsition-loading").length) {
                        $body.addClass("no-page-loader");
                        $(".animsition-loading").hide();
                    }
                }, 10000);
            }

        },
        // rtlStatus: function () {
        //     var $rtlStatusCheck = $("html").attr("dir");
        //     var $rtlStatus = false;
        //     if ($rtlStatusCheck == "rtl") {
        //         $('head').append('<link rel="stylesheet" type="text/css" href="css/rtl.css">');
        //         $rtlStatus = true;
        //     } else {
        //         $rtlStatus = false;
        //     }
        // },
        // customHeight: function () {
        //     var $customHeightXxs = $('[data-height-xxs]'),
        //         $customHeightXs = $('[data-height-xs]'),
        //         $customHeightSm = $('[data-height-sm]'),
        //         $customHeightMd = $('[data-height-md]'),
        //         $customHeightLg = $('[data-height-lg]');
        //     if ($customHeightXxs.length > 0) {
        //         $customHeightXxs.each(function () {
        //             var element = $(this),
        //                 elementHeight = element.attr('data-height-xxs');
        //             if ($body.hasClass('device-xxs')) {
        //                 if (elementHeight !== '') {
        //                     element.css('height', elementHeight);
        //                 }
        //             }
        //         });
        //     }
        //     if ($customHeightXs.length > 0) {
        //         $customHeightXs.each(function () {
        //             var element = $(this),
        //                 elementHeight = element.attr('data-height-xs');
        //             if ($body.hasClass('device-xs')) {
        //                 if (elementHeight !== '') {
        //                     element.css('height', elementHeight);
        //                 }
        //             }
        //         });
        //     }
        //     if ($customHeightSm.length > 0) {
        //         $customHeightSm.each(function () {
        //             var element = $(this),
        //                 elementHeight = element.attr('data-height-sm');
        //             if ($body.hasClass('device-sm')) {
        //                 if (elementHeight !== '') {
        //                     element.css('height', elementHeight);
        //                 }
        //             }
        //         });
        //     }
        //     if ($customHeightMd.length > 0) {
        //         $customHeightMd.each(function () {
        //             var element = $(this),
        //                 elementHeight = element.attr('data-height-md');
        //             if ($body.hasClass('device-md')) {
        //                 if (elementHeight !== '') {
        //                     element.css('height', elementHeight);
        //                 }
        //             }
        //         });
        //     }
        //     if ($customHeightLg.length > 0) {
        //         $customHeightLg.each(function () {
        //             var element = $(this),
        //                 elementHeight = element.attr('data-height-lg');
        //             if ($body.hasClass('device-lg')) {
        //                 if (elementHeight !== '') {
        //                     element.css('height', elementHeight);
        //                 }
        //             }
        //         });
        //     }
        // },
        // equalize: function () {

        //     if ($equalize.length > 0) {
        //         $equalize.each(function () {

        //             var elem = $(this),
        //                 selectorItem = elem.find(elem.attr('data-equalize-item')) || "> div",
        //                 maxHeight = 0;

        //             selectorItem.each(function () {
        //                 if ($(this).height() > maxHeight) {
        //                     maxHeight = $(this).height();
        //                 }
        //             });
        //             selectorItem.height(maxHeight);

        //         });
        //     }
        // },
        // stickyFooter: function () {
        //     if ($footerStickyClass.length > 0) {
        //         if ($body.hasClass('device-lg') || $body.hasClass('device-md')) {
        //             var elemOuterHeight = $footerStickyClass.outerHeight();

        //             setTimeout(function () {
        //                 $footerStickyClass.addClass("footer-sticky-active");
        //             }, 1000);

        //             // $pageContent.addClass("page-content-shadow");
        //             $wrapper.css({
        //                 'margin-bottom': elemOuterHeight,
        //                 'z-index': 1
        //             });
        //         } else {
        //             $wrapper.css({
        //                 'margin-bottom': 0
        //             });
        //             $footerStickyClass.removeClass("footer-sticky-active");
        //         }
        //     }
        // }
    };
    SKIGULMARG.header = {
        functions: function () {
            SKIGULMARG.header.logoStatus();
            SKIGULMARG.header.stickyHeader();
            // SKIGULMARG.header.topBar();
            // SKIGULMARG.header.topSearch();
            SKIGULMARG.header.mainMenu();
            // SKIGULMARG.header.pageTitle();
            // SKIGULMARG.header.pageMenu();
            // SKIGULMARG.header.sidePanel();
            // SKIGULMARG.header.dotsMenu();
            // SKIGULMARG.header.onepageMenu();
        },
        logoStatus: function () {
            if (!$body.is('.device-lg, .device-md, .menu-overlay-active') && $header.is('.dark.header-transparent, .dark.header-colored-transparent, .dark.header-colored')) {
                logo.find('img').attr('src', logoImg);
            } else if ($header.hasClass('dark')) {
                if (logoDark) {
                    logo.find('img').attr('src', logoDark);
                } else {
                    logo.find('img').attr('src', logoImg);
                }
            } else {
                logo.find('img').attr('src', logoImg);
            }
        },
        stickyHeader: function () {

            var elem = $(this),
                shrinkHeader = elem.attr('data-shrink') || 1,
                shrinkHeaderActive = elem.attr('data-sticky-active') || 1,
                scrollOnTop = $window.scrollTop();

            if ($header.hasClass("header-modern")) {
                shrinkHeader = 300;
            }

            if (!$header.is(".header-no-sticky, .header-static")) {

                if ($body.is('.device-lg, .device-md')) {

                    if (scrollOnTop > $headerOffsetTop + shrinkHeader) {
                        $("#header").addClass('header-sticky');

                        if (scrollOnTop > $headerOffsetTop + shrinkHeaderActive) {
                            if (!$body.is(".overlay-menu") && $header.is(".header-transparent:not(.header-modern), .header-colored, .header-colored-transparent")) {
                                $header.addClass('sticky-active').removeClass("dark");
                            } else {
                                $header.addClass('sticky-active');
                            }
                        }
                    } else {
                        $header.removeClass().addClass($headerCurrentClasses);
                        SKIGULMARG.header.logoStatus();
                    }
                } else if ($body.is('.device-sm, .device-xs, .device-xxs')) {
                    if (scrollOnTop < $currentDocumentPossition) {
                        $("#header").addClass('header-sticky');
                        setTimeout(function() {
                            $header.addClass('sticky-active');
                        }, 50);
                        $currentDocumentPossition = scrollOnTop;
                    } else {
                        $header.removeClass().addClass($headerCurrentClasses);
                        SKIGULMARG.header.logoStatus();
                        $currentDocumentPossition = scrollOnTop;
                    }
                }
            }
        },
        // topBar: function () {
        //     if ($topbar.length > 0) {
        //         $("#topbar .topbar-dropdown .topbar-form").each(function (index, element) {
        //             if ($window.width() - ($(element).width() + $(element).offset().left) < 0) {
        //                 $(element).addClass('dropdown-invert');
        //             }
        //         });
        //     }
        // },
        // topSearch: function () {
        //     $("#top-search-trigger").on("click", function () {
        //         $body.toggleClass('top-search-active');
        //         $topSearch.find('input').focus();
        //         return false;
        //     });
        // },
        mainMenu: function () {
            if ($mainmenu.length > 0) {

                if ($body.is('.device-lg, .device-md')) {
                     $("#mainMenu.menu-onclick nav > ul > li.dropdown > a, .dropdown-submenu > a, .dropdown-submenu > span").on('click touchend', function (e) {
                         $(this).parent('li').siblings().removeClass('hover-active');
                         $(this).parent('li').toggleClass('hover-active');
                         return false;
                     });
                 } else {
                     $("#mainMenu nav > ul > li.dropdown > a, .dropdown-submenu > a, .dropdown-submenu > span").on('click touchend', function (e) {
                         $(this).parent('li').siblings().removeClass('hover-active');
                         $(this).parent('li').toggleClass('hover-active');
                         return false;
                     });
                 }

                $("#mainMenu-trigger button").on('click touchend', function (e) {
                    $body.toggleClass("mainMenu-open");
                    $(this).toggleClass("toggle-active");
                    if ($body.hasClass("mainMenu-open")) {
                        $header.find("#mainMenu").css("max-height", $window.height() - $header.height());
                    } else {
                        $header.find("#mainMenu").css("max-height", 0);
                    }
                    return false;
                });

                if ($body.is('.device-lg, .device-md')) {
                    /*invert menu fix*/
                    $('.dropdown:not(.mega-menu-item) ul ul').each(function (index, element) {
                        if ($window.width() - ($(element).width() + $(element).offset().left) < 0) {
                            $(element).addClass('menu-invert');
                        }
                    });
                }
            }
        },
        // pageTitle: function () {
        //     if ($pageTitle.length > 0) {
        //             var pageTitleHeight = $pageTitle.find("> .container").innerHeightHeight();

        //           alert(pageTitleHeight);
        //             $pageTitle.css('min-height', pageTitleHeight);

        //         if ($topbar && $header) {
        //             $pageTitle.css("padding-top", $header.height() + $topbar.height());
        //         }else{
        //             $pageTitle.css("padding-top", $header.height());
        //         }
        //     }
        // },


        /*TO BE CHECKED !!!!!!!!!!!!!!!*/
        // pageMenu: function () {
        //     if ($pageMenu.length > 0) {
        //         $pageMenu.each(function () {
        //             if ($pageMenu.hasClass("slide-menu")) {
        //                 $pageMenu.addClass("slide-menu-version");
        //                 $("#menu-responsive-icon").on("click", function () {
        //                     $pageMenu.toggleClass("page-menu-active");
        //                     $pageMenu.toggleClass("items-visible");
        //                 });
        //             } else {
        //                 $("#menu-responsive-icon").on("click", function () {
        //                     $pageMenu.toggleClass("page-menu-active");
        //                     $pageMenu.toggleClass("items-visible");
        //                 });
        //             }
        //         });
        //     }
        // },
        // sidePanel: function () {
        //     if (sidePanel.length > 0) {
        //         $("#wrapper, #close-panel").on("click", function () {
        //             $body.removeClass("side-panel-active");
        //             $("#side-panel-trigger").removeClass("toggle-active");
        //         });
        //         setTimeout(function () {
        //             SKIGULMARG.elements.gridLayoutRefresh();
        //         }, 1000);
        //     }
        // },
        // dotsMenu: function () {
        //     if ($dotsMenu.length > 0) {
        //         $dotsMenuItems.on('click', function () {
        //             $dotsMenuItems.parent("li").removeClass('current');
        //             $(this).parent("li").addClass('current');
        //             return false;
        //         });

        //         $dotsMenuItems.parents("li").removeClass('current');
        //         $dotsMenu.find('a[href="#' + SKIGULMARG.header.currentSection() + '"]').parent("li").addClass('current');
        //     }
        // },
        // onepageMenu: function () {
        //     if ($mainmenu.hasClass("menu-one-page")) {
        //         $mainmenu.find("nav > ul > li > a").parents("li").removeClass('current');
        //         $mainmenu.find('nav > ul > li > a[href="#' + SKIGULMARG.header.currentSection() + '"]').parent("li").addClass('current');
        //     }
        // },
        // currentSection: function () {
        //     var elemCurrent = "body";
        //     $section.each(function () {
        //         var elem = $(this),
        //             elemeId = elem.attr("id");

        //         if ((elem.offset().top - $window.height() / 3 < $window.scrollTop()) && (elem.offset().top + elem.height() - $window.height() / 3 > $window.scrollTop())) {
        //             elemCurrent = elemeId;
        //         }
        //     });
        //     return elemCurrent;
        // }
    };
    SKIGULMARG.slider = {
        functions: function () {
            // SKIGULMARG.slider.sliderScreenSizeControl();
            SKIGULMARG.slider.inspiroSlider();
            SKIGULMARG.slider.carousel();
        },
        inspiroSlider: function () {
            if (!$().owlCarousel) {
                console.log('inspiroSlider: owlCarousel plugin is missing.');
                return true;
            }
            if ($(".inspiro-slider").length > 0) {
                $(".inspiro-slider").each(function () {
                    var elem = $(this),
                        carouselNav = elem.attr('data-arrows') || true,
                        carouselDots = elem.attr('data-dots') || false,
                        carouselAutoPlay = elem.attr('data-autoplay') || true,
                        carouselAutoplayTimeout = elem.attr('data-autoplay-timeout') || 3500,
                        carouseAnimateIn = elem.attr('data-animate-in') || false,
                        carouseAnimateOut = elem.attr('data-animate-out') || false,
                        carouselLoop = elem.attr('data-loop') || true,
                        carouselMargin = elem.attr('data-margin') || 0,
                        carouselVideo = elem.attr('data-video') || true,
                        carouselItems = elem.attr('data-items') || 4,
                        carouselSmartSpeed = elem.attr('data-smart-speed') || 1300,
                        carouselItemsLg = elem.attr('data-items-lg') || Number(carouselItems),
                        carouselItemsMd = elem.attr('data-items-md') || Number(carouselItemsLg),
                        carouselItemsSm = elem.attr('data-items-sm') || Number(carouselItemsMd),
                        carouselItemsXs = elem.attr('data-items-xs') || Number(carouselItemsSm),
                        carouselItemsXxs = elem.attr('data-items-xxs') || Number(carouselItemsXs);

                    //Kenburns effect
                    elem.find('.slide').each(function () {
                        if ($(this).hasClass("kenburns")) {
                            var elemChild = $(this),
                                elemChildImage = elemChild.css('background-image').replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, '');
                            elemChild.prepend('<div class="kenburns-bg" style="background-image:url(' + elemChildImage + ')"></div>');
                        }
                    });
                    if (elem.find('.slide').length > 1) {

                        var t = setTimeout(function () {
                            elem.owlCarousel({
                                nav: carouselNav,
                                dots: carouselDots,
                                navText: $carouselIcons,
                                autoplay: carouselAutoPlay,
                                autoplayTimeout: carouselAutoplayTimeout,
                                autoplayHoverPause: true,
                                loop: carouselLoop,
                                margin: Number(carouselMargin),
                                smartSpeed: Number(carouselSmartSpeed),
                                video: carouselVideo,
                                animateIn: carouseAnimateIn,
                                animateOut: carouseAnimateOut,
                                // rtl: SKIGULMARG.core.rtlStatus(),
                                items: 1,
                                callbacks: true,
                                onInitialize: function (event) {
                                    setTimeout(function () {
                                        elem.find(".owl-item:not(.active) .slide > video").each(function () {
                                            this.pause();
                                        });
                                        elem.find(".owl-item.active .slide .kenburns-bg").addClass("kenburns-bg-animate");

                                        elem.addClass("slider-loaded");
                                    }, 100);
                                }
                            });
                            var $captions = elem.find('.slide-captions > *');
                            $captions.each(function () {
                                var $captionElem = $(this);
                                var animationDuration = "600ms";
                                if ($(this).data("animation-duration")) {
                                    animationDuration = $(this).data("animation-duration") + "ms";
                                }
                                $(this).css("animation-duration", animationDuration);
                                $captionElem.addClass('slide-caption-hide');
                            });
                            $captions.each(function (index) {
                                var $captionElem = $(this),
                                    captionDelay = $captionElem.data("caption-delay") || index * 80,
                                    captionAnimation = $captionElem.data('caption-animation') || "fadeInUp";
                                setTimeout(function () {
                                    $captionElem.removeClass('slide-caption-hide').addClass(captionAnimation);
                                }, captionDelay);
                            });
                            elem.on('changed.owl.carousel', function (property) {
                                var current = property.item.index,
                                    currentSlide = $(property.target).find(".owl-item").eq(current),
                                    currentSlideCaptions = currentSlide.find(".slide-captions > *"),
                                    currentSlideDark = currentSlide.find(".slide").hasClass("slide-dark"),
                                    currentSlideKenburns = currentSlide.find(".slide").hasClass("kenburns");
                                if (currentSlideKenburns) {
                                    $(this).find(".kenburns-bg").addClass("kenburns-bg-animate");
                                }
                                currentSlideCaptions.each(function (index) {
                                    var $captionElem = $(this),
                                        captionDelay = $captionElem.data("caption-delay") || (index * 350 + 1000),
                                        captionAnimation = $captionElem.data('caption-animation') || "fadeInUp";
                                    setTimeout(function () {
                                        $captionElem.removeClass('slide-caption-hide').addClass(captionAnimation);
                                    }, captionDelay);
                                });
                                if ($window.width() > 992) {
                                    //Pause HTML5 Video
                                    if (currentSlide.find("video").length > 0) {
                                        setTimeout(function () {
                                            currentSlide.find(".slide video").get(0).play();
                                        }, 1000);
                                    }
                                }
                            });
                            elem.on('change.owl.carousel', function (property) {
                                var current = property.item.index,
                                    currentSlide = $(property.target).find(".owl-item").eq(current),
                                    currentSlideCaptions = $(property.target).find(".owl-item:not(.active)").find(".slide-captions > *"),
                                    currentSlideKenburns = currentSlide.find(".slide").hasClass("kenburns");
                                currentSlideCaptions.each(function () {
                                    var $captionElem = $(this),
                                        captionAnimation = $captionElem.data('caption-animation') || "fadeInUp";
                                    $captionElem.removeClass(captionAnimation).addClass('slide-caption-hide');
                                });
                                elem.find(".slide video").each(function () {
                                    this.pause();
                                });
                                if (currentSlideKenburns) {
                                    $(this).find(".kenburns-bg").removeClass("kenburns-bg-animate");
                                }
                            });
                        }, 0);
                    } else {
                        elem.addClass("slider-loaded");
                        setTimeout(function () {
                            elem.find('.slide').find(".kenburns-bg").addClass("kenburns-bg-animate");
                        }, 200);
                    }

                });
            }
        },
        // carouselAjax: function () {
        //     if (!$().owlCarousel) {
        //         console.log('carouselAjax: owlCarousel plugin is missing.');
        //         return true;
        //     }
        //     var carousel = $(".carousel"),
        //         carouselNav = carousel.attr('data-arrows'),
        //         carouselDots = carousel.attr('data-dots') || true,
        //         carouselAutoPlay = carousel.attr('data-autoplay') || false,
        //         carouselAutoplayTimeout = carousel.attr('data-autoplay-timeout') || 5000,
        //         carouseAnimateIn = carousel.attr('data-animate-in') || false,
        //         carouseAnimateOut = carousel.attr('data-animate-out') || false,
        //         carouselLoop = carousel.attr('data-loop') || false,
        //         carouselMargin = carousel.attr('data-margin') || 0,
        //         carouselVideo = carousel.attr('data-video') || true,
        //         carouselItems = carousel.attr('data-items') || 4,
        //         carouselItemsLg = carousel.attr('data-items-lg') || Number(carouselItems),
        //         carouselItemsMd = carousel.attr('data-items-md') || Number(carouselItemsLg),
        //         carouselItemsSm = carousel.attr('data-items-sm') || Number(carouselItemsMd),
        //         carouselItemsXs = carousel.attr('data-items-xs') || Number(carouselItemsSm),
        //         carouselItemsXxs = carousel.attr('data-items-xxs') || Number(carouselItemsXs);

        //     if (carouselNav == 'false') {
        //         carouselNav = false;
        //     } else {
        //         carouselNav = true;
        //     }

        //     if (carouselDots == 'false') {
        //         carouselDots = false;
        //     } else {
        //         carouselDots = true;
        //     }

        //     carousel.owlCarousel({
        //         nav: carouselNav,
        //         dots: carouselDots,
        //         navText: $carouselIcons,
        //         autoplay: carouselAutoPlay,
        //         autoplayTimeout: carouselAutoplayTimeout,
        //         autoplayHoverPause: true,
        //         loop: carouselLoop,
        //         margin: Number(carouselMargin),
        //         smartSpeed: Number(1000),
        //         video: carouselVideo,
        //         animateIn: carouseAnimateIn,
        //         animateOut: carouseAnimateOut,
        //         rtl: SKIGULMARG.core.rtlStatus(),
        //         onInitialize: function (event) {
        //             carousel.addClass("carousel-loaded owl-carousel");
        //         },
        //         responsive: {
        //             0: {
        //                 items: Number(carouselItemsXxs)
        //             },
        //             480: {
        //                 items: Number(carouselItemsXs)
        //             },
        //             768: {
        //                 items: Number(carouselItemsSm)
        //             },
        //             992: {
        //                 items: Number(carouselItemsMd)
        //             },
        //             1200: {
        //                 items: Number(carouselItemsLg)
        //             }
        //         }
        //     });
        // },
        carousel: function () {
            if (!$().owlCarousel) {
                console.log('carousel: owlCarousel plugin is missing.');
                return true;
            }
            if ($carousel.length > 0) {
                $carousel.each(function () {
                    var elem = $(this),
                        carouselNav = elem.attr('data-arrows'),
                        carouselDots = elem.attr('data-dots') || true,
                        carouselAutoPlay = elem.attr('data-autoplay') || false,
                        carouselAutoplayTimeout = elem.attr('data-autoplay-timeout') || 5000,
                        carouselAutoWidth = elem.attr('data-auto-width') || false,
                        carouseAnimateIn = elem.attr('data-animate-in') || false,
                        carouseAnimateOut = elem.attr('data-animate-out') || false,
                        carouselLoop = elem.attr('data-loop') || false,
                        carouselMargin = elem.attr('data-margin') || 0,
                        carouselVideo = elem.attr('data-video') || false,
                        carouselItems = elem.attr('data-items') || 4,
                        carouselItemsLg = elem.attr('data-items-lg') || Number(carouselItems),
                        carouselItemsMd = elem.attr('data-items-md') || Number(carouselItemsLg),
                        carouselItemsSm = elem.attr('data-items-sm') || Number(carouselItemsMd),
                        carouselItemsXs = elem.attr('data-items-xs') || Number(carouselItemsSm),
                        carouselItemsXxs = elem.attr('data-items-xxs') || Number(carouselItemsXs),
                        carouselItemsXxxs = elem.attr('data-items-xxxs') || Number(carouselItemsXxs);

                    if (carouselItemsMd >= 3) {
                        var carouselItemsSm = elem.attr('data-items-sm') || Number(2);
                    }
                    if (carouselItemsSm >= 2) {
                        var carouselItemsXs = elem.attr('data-items-xs') || Number(2);
                    }
                    if (carouselItemsXs >= 1) {
                        var carouselItemsXxs = elem.attr('data-items-xxs') || Number(1);
                    }

                    if (carouselNav == 'false') {
                        carouselNav = false;
                    } else {
                        carouselNav = true;
                    }

                    if (carouselDots == 'false') {
                        carouselDots = false;
                    } else {
                        carouselDots = true;
                    }

                    if (carouselAutoPlay == 'false') {
                        carouselAutoPlay = false;
                    }

                    var t = setTimeout(function () {
                        elem.owlCarousel({
                            nav: carouselNav,
                            dots: carouselDots,
                            navText: $carouselIcons,
                            autoplay: carouselAutoPlay,
                            autoplayTimeout: carouselAutoplayTimeout,
                            autoplayHoverPause: true,
                            autoWidth: carouselAutoWidth,
                            loop: carouselLoop,
                            margin: Number(carouselMargin),
                            smartSpeed: Number(1300),
                            video: carouselVideo,
                            animateIn: carouseAnimateIn,
                            animateOut: carouseAnimateOut,
                            // rtl: SKIGULMARG.core.rtlStatus(),
                            onInitialize: function (event) {
                                // setTimeout(function () {
                                elem.addClass("carousel-loaded owl-carousel");
                                //    }, 1000);
                            },
                            responsive: {
                                0: {
                                    items: Number(carouselItemsXxxs)
                                },
                                260: {
                                    items: Number(carouselItemsXxs)
                                },
                                480: {
                                    items: Number(carouselItemsXs)
                                },
                                768: {
                                    items: Number(carouselItemsSm)
                                },
                                992: {
                                    items: Number(carouselItemsMd)
                                },
                                1200: {
                                    items: Number(carouselItemsLg)
                                }
                            }
                        });
                    }, 100);
                });
            }
        },
        // flickityCarousel: function () {
        //     if (!$().flickity) {
        //         console.log('flickityCarousel: flickity plugin is missing.');
        //         return true;
        //     }
        //     if ($flickity.length > 0) {
        //         $flickity.each(function () {
        //             var elem = $(this),
        //                 accessibility = elem.attr('data-accessibility') || false,
        //                 adaptiveHeight = elem.attr('data-adaptiveHeight') || false,
        //                 autoPlay = elem.attr('data-autoPlay') || true,
        //                 cellAlign = elem.attr('data-cellAlign') || 0,
        //                 cellSelector = elem.attr('data-cellSelector') || undefined,
        //                 contain = elem.attr('data-contain') || true,
        //                 draggable = elem.attr('data-draggable') || true,
        //                 dragThreshold = elem.attr('data-dragThreshold') || 3,
        //                 freeScroll = elem.attr('data-freeScroll') || false,
        //                 friction = elem.attr('data-friction') || 0.2,
        //                 groupCells = elem.attr('data-groupCells') || false,
        //                 initialIndex = elem.attr('data-initialIndex') || 0,
        //                 lazyLoad = elem.attr('data-lazyLoad') || true,
        //                 percentPosition = elem.attr('data-percentPosition') || true,
        //                 prevNextButtons = elem.attr('data-prevNextButtons') || true,
        //                 pageDots = elem.attr('data- pageDots') || true,
        //                 resize = elem.attr('data-resize') || true,
        //                 rightToLeft = elem.attr('data-rightToLeft') || false,
        //                 setGallerySize = elem.attr('data-setGallerySize') || true,
        //                 watchCSS = elem.attr('data-watchCSS') || false,
        //                 wrapAround = elem.attr('data-wrapAround') || false;


        //             var t = setTimeout(function () {
        //                 elem.flickity({
        //                     accessibility: accessibility,
        //                     adaptiveHeight: adaptiveHeight,
        //                     autoPlay: autoPlay,
        //                     cellAlign: cellAlign,
        //                     cellSelector: cellSelector,
        //                     contain: contain,
        //                     draggable: draggable,
        //                     dragThreshold: dragThreshold,
        //                     freeScroll: freeScroll,
        //                     friction: friction,
        //                     groupCells: groupCells,
        //                     initialIndex: initialIndex,
        //                     lazyLoad: lazyLoad,
        //                     percentPosition: percentPosition,
        //                     prevNextButtons: prevNextButtons,
        //                     pageDots: pageDots,
        //                     resize: resize,
        //                     rightToLeft: rightToLeft,
        //                     setGallerySize: setGallerySize,
        //                     watchCSS: watchCSS,
        //                     wrapAround: wrapAround
        //                 });
        //             }, 100);
        //         });
        //     }
        // },


    };
    SKIGULMARG.elements = {
        functions: function () {
            // SKIGULMARG.elements.naTo();
            // SKIGULMARG.elements.textRotator();
            SKIGULMARG.elements.buttons();
            SKIGULMARG.elements.accordion();
            SKIGULMARG.elements.tabs();
            SKIGULMARG.elements.animations();
            // SKIGULMARG.elements.parallax();
            // SKIGULMARG.elements.responsiveVideos();
            // SKIGULMARG.elements.counters();
            // SKIGULMARG.elements.countdownTimer();
            // SKIGULMARG.elements.progressBar();
            // SKIGULMARG.elements.pieChart();
            // SKIGULMARG.elements.maps();
            // SKIGULMARG.elements.gridLayout();
            // SKIGULMARG.elements.tooltip();
            // SKIGULMARG.elements.popover();
            SKIGULMARG.elements.lightBoxInspiro();
            // SKIGULMARG.elements.youTubeBgPlayer();
            SKIGULMARG.elements.modal();
            SKIGULMARG.elements.pinOnScroll();
            // SKIGULMARG.elements.other();
        },

        // other: function () {

        //     if ($(".toggle-item").length > 0) {
        //         $(".toggle-item").each(function () {
        //             var elem = $(this),
        //                 toggleItemClass = elem.attr('data-class'),
        //                 toggleItemClassTarget = elem.attr('data-target');

        //             elem.on("click", function () {
        //                 if (toggleItemClass) {
        //                     if (toggleItemClassTarget) {
        //                         $(toggleItemClassTarget).toggleClass(toggleItemClass);
        //                     } else {
        //                         elem.toggleClass(toggleItemClass);
        //                     }
        //                 }
        //                 SKIGULMARG.header.logoStatus();
        //                 elem.toggleClass("toggle-active");
        //                 return false;
        //             });
        //         });
        //     }

        //     /*Hover 3d Effect*/
        //     if ($(".hover-3d").length > 0) {
        //         $(".hover-3d").each(function () {
        //             var $elem = $(this),
        //                 selector = $elem.attr("data-selector") || ".portfolio-item-wrap",
        //                 shine = $elem.attr("data-shine") || false,
        //                 sensitivity = $elem.attr("data-sensitivity") || 16;

        //             $elem.hover3d({
        //                 selector: selector,
        //                 shine: shine,
        //                 sensitivity: Number(sensitivity)
        //             });
        //         });
        //     }

        // },
        // naTo: function () {
        //     $('a.scroll-to, #dotsMenu > ul > li > a, .menu-one-page nav > ul > li > a').on('click', function () {
        //         var $anchor = $(this);
        //         $('html, body').stop(true, false).animate({
        //             scrollTop: $($anchor.attr('href')).offset().top
        //         }, 1500, 'easeInOutExpo');
        //         return false;
        //     });
        // },
        // textRotator: function () {
        //     if (!$().Morphext) {
        //         console.log('textRotator: Morphext plugin is missing.');
        //         return true;
        //     }
        //     if ($textRotator.length > 0) {
        //         $textRotator.each(function () {
        //             var $elem = $(this),
        //                 dataTextSeperator = $elem.attr('data-rotate-separator') || ",",
        //                 dataTextEffect = $elem.attr('data-rotate-effect') || "flipInX",
        //                 dataTextSpeed = $elem.attr('data-rotate-speed') || 2000;
        //             $elem.Morphext({
        //                 animation: dataTextEffect,
        //                 separator: dataTextSeperator,
        //                 speed: Number(dataTextSpeed)
        //             });
        //         });
        //     }
        // },
        buttons: function () {
            //Button slide width
            if ($(".btn-slide[data-width]")) {
                $(".btn.btn-slide[data-width]").each(function () {
                    var elem = $(this),
                        elemWidth = elem.attr('data-width'),
                        elemDefaultWidth;
                    switch (true) {
                        case elem.hasClass('btn-lg'):
                            elemDefaultWidth = "60";
                            break;
                        case elem.hasClass('btn-sm'):
                            elemDefaultWidth = "36";
                            break;
                        case elem.hasClass('btn-xs'):
                            elemDefaultWidth = "28";
                            break;
                        default:
                            elemDefaultWidth = "48";
                            break;
                    }
                    elem.hover(function () {
                        $(this).css("width", elemWidth + "px");
                    }, function () {
                        $(this).css("width", elemDefaultWidth + "px");
                    });
                });
            }
        },
        accordion: function () {
            var $accs = $(classFinder + accordionItem);
            $accs.length && ($accs.each(function () {
                var $item = $(this);
                $item.hasClass(itemActive) ? $item.addClass(itemActive) : $item.find(classFinder + itemContent).hide();
            }), $(classFinder + itemTitle).on("click", function (e) {
                var $link = $(this),
                    $item = $link.parents(classFinder + accordionItem),
                    $acc = $item.parents(classFinder + accordionType);
                $item.hasClass(itemActive) ? $acc.hasClass(toogleType) ? ($item.removeClass(itemActive), $link.next(classFinder + itemContent).slideUp("fast")) : ($acc.find(classFinder + accordionItem).removeClass(itemActive), $acc.find(classFinder + itemContent).slideUp("fast")) : ($acc.hasClass(toogleType) || ($acc.find(classFinder + accordionItem).removeClass(itemActive), $acc.find(classFinder + itemContent).slideUp("fast")), $item.addClass(itemActive), $link.next(classFinder + itemContent).slideToggle("fast")), e.preventDefault();
                return false;
            }));
        },
        tabs: function () {
            var $tabNavigation = $(".tabs-navigation a");
            if ($tabNavigation.length > 0) {
                $tabNavigation.on("click", function (e) {
                    $(this).tab("show"), e.preventDefault();
                    return false;
                });
            }
        },
        animations: function () {
            if (dataAnimation.length > 0 && $body.hasClass('device-lg') || $body.hasClass('device-md')) {
                dataAnimation.each(function () {
                    $(this).addClass("animated");
                    var $elem = $(this),
                        animationType = $elem.attr("data-animation") || "fadeIn",
                        animationDelay = $elem.attr("data-animation-delay") || 200,
                        animationDirection = ~animationType.indexOf("Out") ? "back" : "forward";
                    if (animationDirection == "forward") {
                        $elem.appear(function () {
                            setTimeout(function () {
                                $elem.addClass(animationType + " visible");
                            }, animationDelay);
                        }, {
                            accX: 0,
                            accY: -120
                        }, 'easeInCubic');
                    } else {
                        $elem.addClass("visible");
                        $elem.on("click", function () {
                            $elem.addClass(animationType);
                            return false;
                        });
                    }
                    if ($elem.parents('.demo-play-animations').length) {
                        $elem.on("click", function () {
                            $elem.removeClass(animationType);
                            setTimeout(function () {
                                $elem.addClass(animationType);
                            }, 50);
                            return false;
                        });
                    }
                });
            }
        },
        // parallax: function () {

        //     if (!$().scrolly) {
        //         console.log('parallax: scrolly plugin is missing.');
        //         return true;
        //     }
        //     if ($parallax.length > 0) {
        //         $parallax.each(function () {

        //             var $elem = $(this),
        //                 elemImageSrc = $elem.attr("data-parallax-image"),
        //                 elemImageVelocity = $elem.attr("data-velocity") || "-.090";

        //             $elem.prepend('<div class="parallax-container" data-velocity="' + elemImageVelocity + '" style="background: url(' + elemImageSrc + ')"></div>');

        //             if ($body.hasClass('device-lg') || $body.hasClass('device-md')) {
        //                 $elem.find(".parallax-container").scrolly({
        //                     bgParallax: true
        //                 });

        //             } else {
        //                 $elem.find(".parallax-container").addClass("parallax-responsive");
        //             }

        //         });
        //     }
        // },
        // responsiveVideos: function () {
        //     if (!$().fitVids) {
        //         console.log('responsiveVideos: fitVids plugin is missing.');
        //         return true;
        //     }
        //     $("section, .content, .post-content, .video-js, .post-video, .video-wrap, .ajax-quick-view,#slider:not(.revslider-wrap)").fitVids();
        // },
        // counters: function () {
        //     if (!$().countTo) {
        //         console.log('counters: countTo plugin is missing.');
        //         return true;
        //     }
        //     if ($counter.length > 0) {
        //         $counter.each(function () {
        //             var $elem = $(this);
        //             if ($body.hasClass('device-lg') || $body.hasClass('device-md')) {
        //                 $elem.appear(function () {
        //                     $elem.find('span').countTo();
        //                 });
        //             } else {
        //                 var countTo = $elem.find('span').attr('data-to');
        //                 $elem.find('span').html(countTo);
        //             }
        //         });
        //     }
        // },
        // countdownTimer: function () {
        //     if (!$().countdown) {
        //         console.log('countdownTimer: countdown plugin is missing.');
        //         return true;
        //     }
        //     if ($countdownTimer.length > 0) {
        //         setTimeout(function () {
        //             $('[data-countdown]').each(function () {
        //                 var $this = $(this),
        //                     finalDate = $(this).data('countdown');
        //                 $this.countdown(finalDate, function (event) {
        //                     $this.html(event.strftime('<div class="countdown-container"><div class="countdown-box"><div class="number">%-D</div><span>Day%!d</span></div>' + '<div class="countdown-box"><div class="number">%H</div><span>Hours</span></div>' + '<div class="countdown-box"><div class="number">%M</div><span>Minutes</span></div>' + '<div class="countdown-box"><div class="number">%S</div><span>Seconds</span></div></div>'));
        //                 });
        //             });
        //         }, 300);
        //     }
        // },
        // progressBar: function () {
        //     if ($progressBar.length > 0) {
        //         $progressBar.each(function (i, elem) {
        //             var $elem = $(this),
        //                 percent = $elem.attr('data-percent') || "100",
        //                 delay = $elem.attr('data-delay') || "60",
        //                 type = $elem.attr('data-type') || "%";
        //             if (!$elem.hasClass('progress-animated')) {
        //                 $elem.css({
        //                     'width': '0%'
        //                 });
        //             }
        //             var progressBarRun = function () {
        //                 $elem.animate({
        //                     'width': percent + '%'
        //                 }, 'easeInOutCirc').addClass('progress-animated');
        //                 $elem.delay(delay).append('<span class="progress-type">' + type + '</span><span class="progress-number animated fadeIn">' + percent + '</span>');
        //             };
        //             if ($body.hasClass('device-lg') || $body.hasClass('device-md')) {
        //                 $(elem).appear(function () {
        //                     setTimeout(function () {
        //                         progressBarRun();
        //                     }, delay);
        //                 });
        //             } else {
        //                 progressBarRun();
        //             }
        //         });
        //     }
        // },
        // pieChart: function () {
        //     if (!$().easyPieChart) {
        //         console.log('pieChart: easyPieChart plugin is missing.');
        //         return true;
        //     }
        //     if ($pieChart.length > 0) {
        //         $pieChart.each(function () {
        //             var $elem = $(this),
        //                 pieChartSize = $elem.attr('data-size') || "160",
        //                 pieChartAnimate = $elem.attr('data-animate') || "2000",
        //                 pieChartWidth = $elem.attr('data-width') || "6",
        //                 pieChartColor = $elem.attr('data-color') || "$base-color",
        //                 pieChartTrackColor = $elem.attr('data-trackcolor') || "rgba(0,0,0,0.10)";
        //             $elem.find('span, i').css({
        //                 'width': pieChartSize + 'px',
        //                 'height': pieChartSize + 'px',
        //                 'line-height': pieChartSize + 'px'
        //             });
        //             $elem.appear(function () {
        //                 $elem.easyPieChart({
        //                     size: Number(pieChartSize),
        //                     animate: Number(pieChartAnimate),
        //                     trackColor: pieChartTrackColor,
        //                     lineWidth: Number(pieChartWidth),
        //                     barColor: pieChartColor,
        //                     scaleColor: false,
        //                     lineCap: 'square',
        //                     onStep: function (from, to, percent) {
        //                         $elem.find('span.percent').text(Math.round(percent));
        //                     }
        //                 });
        //             });
        //         });
        //     }
        // },
        // maps: function () {
        //     if (!$().gMap) {
        //         console.log('maps: gMap plugin is missing.');
        //         return true;
        //     }
        //     if ($map.length > 0) {
        //         $map.each(function () {
        //             var $elem = $(this),
        //                 mapAddress = $elem.attr('data-map-address') ? $elem.attr('data-map-address') : "Melbourne, Australia",
        //                 mapType = $elem.attr('data-map-type') ? $elem.attr('data-map-type') : "ROADMAP",
        //                 mapZoom = $elem.attr('data-map-zoom') ? $elem.attr('data-map-zoom') : "14",
        //                 mapIcon = $elem.attr('data-map-icon') ? $elem.attr('data-map-icon') : "images/markers/marker2.png";
        //             var markers = [{
        //                 address: mapAddress,
        //                 html: mapAddress,
        //                 icon: {
        //                     image: mapIcon,
        //                     iconsize: [40, 63],
        //                     iconanchor: [18, 60],
        //                 },
        //             }];
        //             $elem.gMap({
        //                 address: mapAddress,
        //                 maptype: mapType,
        //                 markers: markers,
        //                 zoom: Number(mapZoom),
        //                 doubleclickzoom: true,
        //                 controls: {
        //                     panControl: true,
        //                     zoomControl: true,
        //                     mapTypeControl: false,
        //                     scaleControl: true,
        //                     streetViewControl: false,
        //                     overviewMapControl: true
        //                 },
        //                 styles: [{
        //                     featureType: "poi",
        //                     elementType: "labels",
        //                     stylers: [{
        //                         visibility: "off"
        //                 }]
        //             }]
        //             });
        //         });
        //     }
        // },
        // gridLayout: function () {
        //     if (!$().isotope) {
        //         console.log('gridLayout: isotope plugin is missing.');
        //         return true;
        //     }
        //     if ($gridLayout.length > 0) {
        //         $gridLayout.each(function () {
        //             var elem = $(this),
        //                 gridItem = elem.attr('data-item') || "portfolio-item",
        //                 gridLayoutMode = elem.attr('data-layout') || "masonry",
        //                 gridStagger = elem.attr('data-stagger') || 10,
        //                 gridMargin = elem.attr('data-margin') || 20,
        //                 gridTransition = elem.attr("data-transition") || "0.55s";

        //             if (gridLayoutMode == "fitRows") {
        //                 var gridMargin2 = (gridMargin + 2);
        //             } else {
        //                 var gridMargin2 = gridMargin;
        //                 var gridMargin2 = gridMargin;
        //             }

        //             elem.css("margin", "0 -" + gridMargin2 + "px -" + gridMargin + "px 0");
        //             elem.find('.' + gridItem).css("padding", "0 " + gridMargin + "px " + gridMargin + "px 0");

        //             $window.on("load", function () {
        //                 setTimeout(function () {
        //                     elem.isotope({
        //                         layoutMode: gridLayoutMode,
        //                         transitionDuration: gridTransition,
        //                         stagger: Number(gridStagger),
        //                         itemSelector: "." + gridItem,
        //                         autoHeight: true,
        //                         hiddenStyle: {
        //                             opacity: 0,
        //                             transform: "translate3d(0px, 60px, 0px)",

        //                         },
        //                         visibleStyle: {
        //                             opacity: 1,
        //                             transform: "translate3d(0px, 0px, 0px)",
        //                         },
        //                         masonry: {
        //                             // use outer width of grid-sizer for columnWidth
        //                             columnWidth: elem.find('.' + gridItem + ':not(.large-width)')[0],
        //                         }
        //                     });

        //                     $gridLayout.addClass("grid-loaded");
        //                     var iso = elem.data('isotope');
        //                     elem.isotope('reveal', iso.items);
        //                 }, 100);
        //             });

        //             /*Infinity Scroll*/
        //             if (elem.next().hasClass("infinite-scroll")) {
        //                 SKIGULMARG.elements.gridLayoutInfinite(elem, gridItem, gridMargin);
        //             }
        //         });
        //         if ($gridFilter.length > 0) {
        //             $gridFilter.each(function () {
        //                 var elem = $(this),
        //                     elemLayoutCnt = elem.attr('data-layout'),
        //                     elemActive = elem.attr('data-active-class') || "active";
        //                 elem.find('a').click(function () {
        //                     elem.find('li').removeClass(elemActive);
        //                     $(this).parent('li').addClass(elemActive);
        //                     $(elemLayoutCnt).isotope({
        //                         filter: $(this).attr('data-category')
        //                     });

        //                     if ($(".grid-active-title").length > 0) {
        //                         $(".grid-active-title").empty().append($(this).text())
        //                     }
        //                     return false;
        //                 });
        //             });
        //         }


        //     }
        // },
        // gridLayoutRefresh: function () {
        //     if ($gridLayout.length > 0) {
        //         $gridLayout.each(function () {
        //             var elem = $(this);
        //             setTimeout(function () {
        //                 elem.isotope('layout');
        //             }, 300);
        //         });
        //     }
        // },
        // gridLayoutInfinite: function (element, elementSelector, elemGridMargin) {
        //     if (!$().infinitescroll) {
        //         console.log('gridLayoutInfinite: infinitescroll plugin is missing.');
        //         return true;
        //     }

        //     var elem = element,
        //         gridItem = elementSelector,
        //         gridMargin = elemGridMargin,
        //         navSelector = "#pagination",
        //         loadMoreElem = $("#showMore"),
        //         loadMoreBtn = $("#showMore a.btn"),
        //         loadMoreBtnText = $("#showMore a.btn").text(),
        //         loadMoreMessage = $('<div class="infinite-scroll-message"><p class="animated visible fadeIn">No more posts to show</p></div>');

        //     $window.on("load", function () {
        //         elem.infinitescroll({
        //                 itemSelector: "." + gridItem,
        //                 navSelector: navSelector,
        //                 nextSelector: navSelector + ' a:not(.btn)',
        //                 state: {
        //                     isDone: false
        //                 },
        //                 extraScrollPx: 10,
        //                 errorCallback: function () {
        //                     loadMoreElem.addClass("animated visible fadeOut");
        //                     setTimeout(function () {
        //                         loadMoreElem.hide();
        //                         elem.after(loadMoreMessage);
        //                     }, 500);
        //                     setTimeout(function () {
        //                         $(".infinite-scroll-message").addClass("animated visible fadeOut");
        //                     }, 3800);
        //                 },
        //             },

        //             // Function called once the elements are retrieved
        //             function (newElements) {
        //                 loadMoreBtn.text(loadMoreBtnText);

        //                 elem.css("margin", "0 -" + gridMargin + "px -" + gridMargin + "px 0");
        //                 elem.find('.' + gridItem).css("padding", "0 " + gridMargin + "px " + gridMargin + "px 0");

        //                 SKIGULMARG.slider.carouselAjax();
        //                 elem.isotope('appended', newElements);
        //                 SKIGULMARG.elements.gridLayoutRefresh();
        //             });
        //     });


        //     if (loadMoreElem.length > 0) {

        //         $window.unbind('.infscr');

        //         loadMoreBtn.click(function () {
        //             loadMoreBtn.text("Loading...");
        //             elem.infinitescroll('retrieve');
        //             return false;
        //         });
        //     }


        // },
        // tooltip: function () {
        //     if (!$().tooltip) {
        //         console.log('tooltip: tooltip plugin is missing.');
        //         return true;
        //     }
        //     var $tooltip = $('[data-toggle="tooltip"]');
        //     if ($tooltip.length > 0) {
        //         $('[data-toggle="tooltip"]').tooltip();
        //     }
        // },
        // popover: function () {
        //     if (!$().popover) {
        //         console.log('popover: popover plugin is missing.');
        //         return true;
        //     }
        //     var $popover = $('[data-toggle="popover"]');
        //     if ($popover.length > 0) {
        //         $('[data-toggle="popover"]').popover({
        //             container: 'body',
        //             html: true
        //         });
        //     }
        // },
        lightBoxInspiro: function () {
            if (!$().magnificPopup) {
                console.log('lightBoxInspiro: magnificPopup plugin is missing.');
                return true;
            }
            if ($lightbox_image.length > 0) {
                $lightbox_image.magnificPopup({
                    type: 'image',
                    removalDelay: 500, //delay removal by X to allow out-animation
                    callbacks: {
                        beforeOpen: function () {
                            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                            this.st.mainClass = "mfp-zoom-out";
                        }
                    },
                });
            }
            if ($lightbox_gallery.length > 0) {
                $lightbox_gallery.each(function () {
                    $(this).magnificPopup({
                        delegate: 'a[data-lightbox="gallery-item"], a[data-lightbox="gallery-image"]',
                        type: 'image',
                        image: {
                            verticalFit: true
                        },
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        removalDelay: 500, //delay removal by X to allow out-animation
                        callbacks: {
                            beforeOpen: function () {
                                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                                this.st.mainClass = "mfp-zoom-out";
                            }
                        },
                    });
                });
            }
            if ($lightbox_iframe.length > 0) {
                $lightbox_iframe.each(function () {
                    $(this).magnificPopup({
                        type: 'iframe',
                        removalDelay: 500, //delay removal by X to allow out-animation
                        callbacks: {
                            beforeOpen: function () {
                                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                                this.st.mainClass = "mfp-zoom-out";
                            }
                        },
                    });
                });
            }
            if ($lightbox_ajax.length > 0) {
                $lightbox_ajax.each(function () {
                    $(this).magnificPopup({
                        type: 'ajax',
                        removalDelay: 500, //delay removal by X to allow out-animation
                        callbacks: {
                            ajaxContentAdded: function (mfpResponse) {
                                SKIGULMARG.slider.carouselAjax();
                                SKIGULMARG.elements.responsiveVideos();
                                // SKIGULMARG.elements.accordion();
                                SKIGULMARG.elements.buttons();
                            }
                        }
                    });
                });
            }
            if ($lightbox_inline.length > 0) {
                $lightbox_inline.magnificPopup({
                    type: 'inline',
                    removalDelay: 500, //delay removal by X to allow out-animation
                    callbacks: {
                        beforeOpen: function () {
                            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                            this.st.mainClass = "mfp-zoom-out";
                        }
                    },
                    closeBtnInside: false,
                    fixedContentPos: true,
                    overflowY: 'scroll',
                });
            }
        },
        // youTubeBgPlayer: function () {
        //     if (!$().mb_YTPlayer) {
        //         console.log('youTubeBgPlayer: mb_YTPlayer plugin is missing.');
        //         return true;
        //     }
        //     if ($ytPlayer.length > 0) {
        //         $ytPlayer.each(function () {
        //             var elem = $(this),
        //                 ytPlayerVideo = elem.attr('data-youtube-url') || null,
        //                 ytPlayerMute = elem.attr('data-youtube-mute') || false,
        //                 ytPlayerRatio = elem.attr('data-youtube-ratio') || '16/9',
        //                 ytPlayerQuality = elem.attr('data-youtube-quality') || 'hd720',
        //                 ytPlayerOpacity = elem.attr('data-youtube-opacity') || 1,
        //                 ytPlayerContainer = elem.attr('data-youtube-container') || 'self',
        //                 ytPlayerOptimize = elem.attr('data-youtube-optimize') || true,
        //                 ytPlayerLoop = elem.attr('data-youtube-loop') || true,
        //                 ytPlayerVolume = elem.attr('data-youtube-volume') || 70,
        //                 ytPlayerStart = elem.attr('data-youtube-start') || 0,
        //                 ytPlayerStop = elem.attr('data-youtube-stop') || 0,
        //                 ytPlayerAutoPlay = elem.attr('data-youtube-autoplay') || false,
        //                 ytPlayerFullScreen = elem.attr('data-youtube-fullscreen') || true,
        //                 ytPlayerControls = elem.attr('data-youtube-controls') || false,
        //                 ytPlayerLogo = elem.attr('data-youtube-logo') || false,
        //                 ytPlayerAutoPause = elem.attr('data-youtube-autopause') || false;
        //             elem.mb_YTPlayer({
        //                 videoURL: ytPlayerVideo,
        //                 mute: ytPlayerMute,
        //                 ratio: ytPlayerRatio,
        //                 quality: ytPlayerQuality,
        //                 opacity: ytPlayerOpacity,
        //                 containment: ytPlayerContainer,
        //                 optimizeDisplay: ytPlayerOptimize,
        //                 loop: ytPlayerLoop,
        //                 vol: ytPlayerVolume,
        //                 startAt: ytPlayerStart,
        //                 stopAt: ytPlayerStop,
        //                 autoPlay: ytPlayerAutoPlay,
        //                 realfullscreen: ytPlayerFullScreen,
        //                 showYTLogo: ytPlayerLogo,
        //                 showControls: ytPlayerControls
        //             });
        //             if (!ytPlayerAutoPlay) {
        //                 elem.find("#youtube-background-controls").addClass("video-is-playing");
        //             }
        //             elem.on("YTPReady", function () {
        //                 $("#youtube-background-controls").on("click", function () {
        //                     if (!$(this).hasClass("video-is-playing")) {
        //                         $(this).addClass("video-is-playing");
        //                         $ytPlayer.YTPPause();
        //                     } else {
        //                         $(this).removeClass("video-is-playing");
        //                         $ytPlayer.YTPPlay();
        //                     }
        //                     return false;
        //                 });
        //                 var elemContainerHeight = elem.height();
        //                 if (ytPlayerAutoPause) {
        //                     $window.on('scroll', function () {
        //                         if ($window.scrollTop() > elemContainerHeight) {
        //                             $("#youtube-background-controls").addClass("video-is-playing");
        //                             $ytPlayer.YTPPause();
        //                         }
        //                     });
        //                 }
        //             });
        //         });
        //     }
        // },
        modal: function () {
            if (!$().magnificPopup) {
                console.log('lightBoxInspiro: magnificPopup plugin is missing.');
                return true;
            }
            var $modal = $(".modal"),
                $modalStrip = $(".modal-strip"),
                $btnModal = $(".btn-modal"),
                modalShow = "modal-auto-open",
                modalShowClass = "modal-active",
                modalDecline = $(".modal-close"),
                /*CookieNotify*/
                cookieNotify = $(".cookie-notify"),
                cookieConfirm = cookieNotify.find(".modal-confirm"),
                coockieExpire = cookieNotify.attr("data-expire") || 365,
                coockieName = cookieNotify.attr("data-name") || "websiteCookies";
            /*Midal*/
            if ($modal.length > 0) {
                $modal.each(function () {
                    var elem = $(this),
                        elemDelay = elem.attr("data-delay") || 3000;
                    /*Modal Auto Show*/
                    if (elem.hasClass(modalShow)) {
                        var t = setTimeout(function () {
                            $.magnificPopup.open({
                                items: {
                                    src: elem
                                },
                                type: 'inline',
                                closeBtnInside: true,
                                removalDelay: 500,
                                callbacks: {
                                    beforeOpen: function () {
                                        this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                                        this.st.mainClass = "mfp-zoom-out";
                                    },
                                    open: function () {
                                        if (elem.find("video").length > 0) {
                                            elem.find("video").get(0).play();
                                        }
                                    }
                                }
                            }, 0);
                        }, elemDelay);
                    }
                    /*Modal Dissmis Button*/
                    elem.find(modalDecline).click(function () {
                        $.magnificPopup.close();
                        return false;
                    });
                });
            }
            /*Midal Strip*/
            if ($modalStrip.length > 0) {
                $modalStrip.each(function () {
                    var elem = $(this),
                        modalDelay = elem.attr("data-delay") || 3000;
                    /*Modal Auto Show*/
                    if (elem.hasClass(modalShow)) {
                        var modalElem = $(this);
                        setTimeout(function () {
                            modalElem.addClass(modalShowClass);
                        }, modalDelay);
                    }
                    /*Modal Dissmis Button*/
                    elem.find(modalDecline).click(function () {
                        elem.removeClass(modalShowClass);
                        return false;
                    });
                    /*Cookie Notify*/
                    if ($modalStrip.hasClass("cookie-notify")) {
                        setTimeout(function () {
                            if ($.cookie(coockieName) != 'confirfmed') {
                                cookieNotify.addClass(modalShowClass);
                            }
                        }, modalDelay);
                        cookieConfirm.click(function () {
                            $.cookie(coockieName, 'confirfmed', {
                                expires: Number(coockieExpire)
                            });
                            cookieNotify.removeClass(modalShowClass);
                            return false;
                        });
                    }
                });
            }
            /*Modal toggles*/
            if ($btnModal.length > 0) {
                $btnModal.each(function () {
                    var elem = $(this),
                        modalTarget = elem.attr("data-modal");
                    elem.click(function () {
                        $(modalTarget).toggleClass(modalShowClass, 1000);
                        return false;
                    });
                });
            }
        },

        pinOnScroll: function () {
            if ($pinOnScroll.length > 0 && $body.hasClass('device-lg') || $body.hasClass('device-md')) {
                $pinOnScroll.each(function () {

                    var elem = $(this),
                        elemOffsetTop = elem.attr("data-offset-top") || elem.offset().top,
                        elemOffsetBottom = elem.attr("data-offset-bottom") || $('#footer').height() + 160,
                        elemParentWidth = elem.parent().width(),
                        elemParentHeight = elem.parent().height();
                    elem.width(elemParentWidth).height(elemParentHeight);

                    if ($pageTitle.length > 0) {
                        elemOffsetTop = elemOffsetTop - ($pageTitle.innerHeight() - $header.height() + 40);

                        elem.on('affix.bs.affix', function () {
                            elem.css({
                                'position': 'fixed',
                                'top': '100px'
                            });
                        });

                        elem.on('affix-top.bs.affix', function () {
                            elem.css({
                                'position': 'inherit',
                                'top': 'auto'
                            });
                        });
                    }

                    elem.affix({
                        offset: {
                            top: elemOffsetTop,
                            bottom: elemOffsetBottom
                        }
                    });


                });
            }

        }
    };

    SKIGULMARG.isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (SKIGULMARG.isMobile.Android() || SKIGULMARG.isMobile.BlackBerry() || SKIGULMARG.isMobile.iOS() || SKIGULMARG.isMobile.Opera() || SKIGULMARG.isMobile.Windows());
		}
	};

    //Document resize functions
    SKIGULMARG.documentOnResize = {
        functions: function () {
            SKIGULMARG.header.logoStatus();
            SKIGULMARG.header.stickyHeader();
            // SKIGULMARG.slider.sliderScreenSizeControl();
            // SKIGULMARG.header.mainMenu();
            // SKIGULMARG.core.customHeight();
            // SKIGULMARG.core.stickyFooter();
        },
    };
    $window.on('resize', SKIGULMARG.documentOnResize.functions);

    //Document ready functions
    SKIGULMARG.documentReady = {
        functions: function () {
            SKIGULMARG.core.pageLoader();
            // SKIGULMARG.slider.sliderScreenSizeControl();
            SKIGULMARG.core.functions();
            SKIGULMARG.header.functions();
            SKIGULMARG.slider.functions();
            SKIGULMARG.elements.functions();
        },
    };
    $(document).ready(SKIGULMARG.documentReady.functions);

    //Document on load functions
    SKIGULMARG.documentOnLoad = {
        functions: function () {



        },
    };
    $(window).on('load', SKIGULMARG.documentOnLoad.functions);

    //Document Scroll functions
    SKIGULMARG.documentScroll = {
        functions: function () {
            SKIGULMARG.header.logoStatus();
            SKIGULMARG.header.stickyHeader();
            SKIGULMARG.core.goToTop();
            // SKIGULMARG.header.dotsMenu();
            // SKIGULMARG.header.onepageMenu();
        },
    };
    $window.on('scroll', SKIGULMARG.documentScroll.functions);

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();

                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();
    var form = $('#newsletter');

    // Newsletter
    form.submit(function(e) {
        // prevent form submission
        e.preventDefault();

        form.find('input').disable;
        form.find('button').disable;

        // submit the form via Ajax
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            dataType: 'html',
            data: form.serialize(),
            success: function(result) {
                // Inject the result in the HTML
                $('#form-result').addClass('notices success green').html('<p>Thank you for subscribing to our newsletter!</p>');
                console.log(result);
            }
        });
    });

    // Helper function to convert date to Checkfront yyyymmdd format
    Date.prototype.yyyymmdd = function() {
        var mm = this.getMonth() + 1;
        var dd = this.getDate();

        return [this.getFullYear(),
                (mm > 9 ? '' : '0') + mm,
                (dd > 9 ? '' : '0') + dd
            ].join('');
    };

    var seasonStartDate = new Date('01/01/2023');
    var seasonEndDate = new Date('03/31/2023');

    // Initial value to datepicker input field
    var date = new Date();
    var currentDate = new Date(date);

    // Initial date and endDate data of Book now button
    var startDate = (currentDate >= seasonStartDate)
                        ? currentDate
                        : seasonStartDate;

    $('button[data-toggle="modal"]').attr('data-checkfront-date', startDate.yyyymmdd());
    $('button[data-toggle="modal"]').attr('data-checkfront-end-date', seasonEndDate.yyyymmdd());

    // Initialize datepicker
    var local = function () {
        if ($('html').attr('lang') == 'en') {
            return {
                format: 'MM/DD/YYYY',
                separator:  ' – ' ,
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su','Mo','Tu','We','Th','Fr','Sa'],
                monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December'],
                firstDay: 1
            }
        } else if ($('html').attr('lang') == 'fr') {
            return {
                format: 'MM/DD/YYYY',
                separator:  ' – ' ,
                applyLabel: 'Appliquer',
                cancelLabel: 'Annuler',
                fromLabel: 'De',
                toLabel: 'À',
                customRangeLabel: 'Douane',
                daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
                monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
                firstDay: 1
            }
        }
    };

    $('input[name="daterange"]').daterangepicker({
        opens: 'center',
        startDate: startDate,
        endDate: seasonEndDate,
        minDate: currentDate,
        maxDate: seasonEndDate,
        cancelButtonClasses: datePickerCancel-btn,
        locale: local()
    }, function(start, end, label) {
        $('button[data-toggle="modal"]').attr('data-checkfront-date', start.format('YYYYMMDD'));
        $('button[data-toggle="modal"]').attr('data-checkfront-end-date', end.format('YYYYMMDD'));
    });

    //Selectpicker
    $('#selectpicker-powder').on('change', function(e) {
        var modalTarget = $('option[value="' + $(this).val() + '"]').attr('data-target');
        var checkfrontTarget = $('option[value="' + $(this).val() + '"]').attr('data-checkfront-target');

        $('button#powder-book-now').attr('data-checkfront-item-id', $(this).val());
        $('button#powder-book-now').attr('data-target', modalTarget);
        $('button#powder-book-now').attr('data-checkfront-target', checkfrontTarget);
    });
    $('#selectpicker-beginner').on('change', function(e) {
        var modalTarget = $('option[value="' + $(this).val() + '"]').attr('data-target');
        var checkfrontTarget = $('option[value="' + $(this).val() + '"]').attr('data-checkfront-target');

        $('button[data-toggle="modal"]').attr('data-checkfront-item-id', $(this).val());
        $('button[data-toggle="modal"]').attr('data-target', modalTarget);
        $('button[data-toggle="modal"]').attr('data-checkfront-target', checkfrontTarget);
    });

    // Generate Checkfront popup
    $(document).on('click', 'button[data-toggle="modal"]', function() {
        // $(this).attr('data-checkfront-locale-id')
        var localeId = function () {
            if ($('html').attr('lang') == 'en') {
                return 'en_CA';
            } else if ($('html').attr('lang') == 'fr') {
                return 'fr_CA';
            } else if ($('html').attr('lang') == 'zh-cn') {
                return 'zh_CN';
            }
            else if ($('html').attr('lang') == 'es') {
                return 'es';
            }
        };

        var droplet = new DROPLET.Widget ({
            host: 'skigulmarg.checkfront.com',
            target: $(this).attr('data-checkfront-target'),
            item_id: $(this).attr('data-checkfront-item-id'),
            category_id: $(this).attr('data-checkfront-category-id'),
            locale_id: localeId(),
            options: $(this).attr('data-checkfront-options'),
            date: $(this).attr('data-checkfront-date'),
            end_date: $(this).attr('data-checkfront-end-date'),
            style: 'font-family: "Open Sans", "Helvetica", "Arial", sans-serif',
            provider: 'droplet'
        }).render();
    });

    $(document).keyup(function(e) {
        if (e.key === "Escape") {
            $(document).find('.modal').removeClass('in').hide();
            $(document).find('.modal-backdrop.fade.in').remove();
        }
    });

})(jQuery);

// Easy Responsive Tabs Plugin
// Author: Samson.Onna <Email : samson3d@gmail.com>
// Modded by Lucas Dasso. <Email: lucas.dasso@mrm-mccann.com>
$.fn.extend({
    easyResponsiveTabs: function (options) {
        //Set the default values, use comma to separate the settings, example:
        var defaults = {
            type: 'default', //default, vertical, accordion;
            width: 'auto',
            fit: true,
            closed: false,
            activate: function(){}
        }
        //Variables
        var options = $.extend(defaults, options);
        var opt = options, jtype = opt.type, jfit = opt.fit, jwidth = opt.width, vtabs = 'vertical', accord = 'accordion';
        var hash = window.location.hash;
        var historyApi = !!(window.history && history.replaceState);

        //Events
        $(this).bind('tabactivate', function(e, currentTab) {
            if(typeof options.activate === 'function') {
                options.activate.call(currentTab, e)
            }
        });

        //Main function
        this.each(function () {
            var $respTabs = $(this);
            var $respTabsList = $respTabs.find('ul.resp-tabs-list');
            var respTabsId = $respTabs.attr('id');
            $respTabs.find('ul.resp-tabs-list li').addClass('resp-tab-item');
            $respTabs.css({
                'display': 'block',
                'width': jwidth
            });

            $respTabs.find('.resp-tabs-container > div').addClass('resp-tab-content');
            jtab_options();
            //Properties Function
            function jtab_options() {
                if (jtype == vtabs) {
                    $respTabs.addClass('resp-vtabs');
                }
                if (jfit == true) {
                    $respTabs.css({ width: '100%', margin: '0 0 40px' });
                }
                if (jtype == accord) {
                    $respTabs.addClass('resp-easy-accordion');
                    $respTabs.find('.resp-tabs-list').css('display', 'none');
                }
            }

            //Assigning the h2 markup to accordion title
            var $tabItemh2;
            $respTabs.find('.resp-tab-content').before('\
                <h2 class="resp-accordion" role="tab">\
                    <span class="resp-arrow"></span>\
                </h2>');

            var itemCount = 0;
            $respTabs.find('.resp-accordion').each(function () {
                $tabItemh2 = $(this);
                var $tabItem = $respTabs.find('.resp-tab-item:eq(' + itemCount + ')');
                var $accItem = $respTabs.find('.resp-accordion:eq(' + itemCount + ')');
                $accItem.append($tabItem.html());
                $accItem.data($tabItem.data());
                $tabItemh2.attr('aria-controls', 'tab_item-' + (itemCount));
                itemCount++;
            });

            //Assigning the 'aria-controls' to Tab items
            var count = 0,
                $tabContent;
            $respTabs.find('.resp-tab-item').each(function () {
                $tabItem = $(this);
                $tabItem.attr('aria-controls', 'tab_item-' + (count));
                $tabItem.attr('role', 'tab');

                //Assigning the 'aria-labelledby' attr to tab-content
                var tabcount = 0;
                $respTabs.find('.resp-tab-content').each(function () {
                    $tabContent = $(this);
                    $tabContent.attr('aria-labelledby', 'tab_item-' + (tabcount));
                    tabcount++;
                });
                count++;
            });

            // Show correct content area
            var tabNum = 0;
            if(hash!='' && respTabsId) {
                var matches = hash.match(new RegExp(respTabsId+"([0-9]+)"));
                if (matches!==null && matches.length===2) {
                    tabNum = parseInt(matches[1],10)-1;
                    if (tabNum > count) {
                        tabNum = 0;
                    }

                    $(document).scrollTop( $('#'+ respTabsId).offset().top );
                }
            }

            //Active correct tab
            $($respTabs.find('.resp-tab-item')[tabNum]).addClass('resp-tab-active');

            //keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode
            if(options.closed !== true && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {
                $($respTabs.find('.resp-accordion')[tabNum]).addClass('resp-tab-active');
                $($respTabs.find('.resp-tab-content')[tabNum]).addClass('resp-tab-content-active').attr('style', 'display:block');
            }
            //assign proper classes for when tabs mode is activated before making a selection in accordion mode
            else {
                $($respTabs.find('.resp-tab-content')[tabNum]).addClass('resp-tab-content-active resp-accordion-closed')
            }

            //Tab Click action function
            $respTabs.find("[role=tab]").each(function () {

                var $currentTab = $(this);
                $currentTab.click(function () {

                    var $currentTab = $(this);
                    var $tabAria = $currentTab.attr('aria-controls');

                    if ($currentTab.hasClass('resp-accordion') && $currentTab.hasClass('resp-tab-active')) {
                        $respTabs.find('.resp-tab-content-active').slideUp('', function () { $(this).addClass('resp-accordion-closed'); });
                        $currentTab.removeClass('resp-tab-active');
                        return false;
                    }
                    if (!$currentTab.hasClass('resp-tab-active') && $currentTab.hasClass('resp-accordion')) {
                        $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                        $respTabs.find('.resp-tab-content-active').slideUp().removeClass('resp-tab-content-active resp-accordion-closed');
                        $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');

                        $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').slideDown().addClass('resp-tab-content-active');
                    } else {
                        $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                        $respTabs.find('.resp-tab-content-active').removeAttr('style').removeClass('resp-tab-content-active').removeClass('resp-accordion-closed');
                        $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
                        $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').addClass('resp-tab-content-active').attr('style', 'display:block');
                    }
                    //Trigger tab activation event
                    $currentTab.trigger('tabactivate', $currentTab);

                    //Update Browser History
                    if(historyApi && respTabsId ) {
                        var currentHash = window.location.hash;
                        var newHash = respTabsId+(parseInt($tabAria.substring(9),10)+1).toString();
                        if (currentHash!="") {
                            var re = new RegExp(respTabsId+"[0-9]+");
                            if (currentHash.match(re)!=null) {
                                newHash = currentHash.replace(re,newHash);
                            }
                            else {
                                newHash = currentHash+"|"+newHash;
                            }
                        }
                        else {
                            newHash = '#'+newHash;
                        }

                        history.replaceState(null,null,newHash);
                    }
                });

            });

            //Window resize function
            $(window).resize(function () {
                $respTabs.find('.resp-accordion-closed').removeAttr('style');
            });
        });
    }
});

var tabsInit = function() {
    $('.tabs').each(function() {
        $('.tabs-accordion').each(function() {
            $(this).addClass('tabs-fixed');
        })
        $(this).easyResponsiveTabs();
    })

    var tabsResize = function(){
        $('.tabs:not(.tabs-fixed)').each(function() {
            var tabs = $(this);
            var tabsWidth = 0;
            var tabsTotalWidth = 0;

            tabsWidth = $(tabs).parent().width();

            $(tabs).removeClass('tabs-accordion');

            $(tabs).find('.resp-tabs-list li').each(function() {
                tabsTotalWidth += $(this).outerWidth(true);
            });

            if ( tabsWidth < tabsTotalWidth ) {
                $(tabs).addClass('tabs-accordion');
            } else {
                $(tabs).removeClass('tabs-accordion');
            }

        })
    };

    var debounce_resize;
    $(window).resize(function() {
        clearTimeout(debounce_resize);
        debounce_resize = setTimeout(tabsResize, 100);
    }).resize();

    function agoda () {
        $(window).resize(function() {
            var width = $('.resp-tabs-container').width();
            var lang = function () {
                var htmlLang = $('html').attr('lang');

                switch(htmlLang) {
                    case 'en':
                        return 'en-us';
                    case 'fr':
                        return 'fr-fr';
                    case 'cn':
                        return 'zh-cn';
                    default:
                        return 'en-us';
                }
            }

            var stg = new Object();

            if (width < 320) {
                if (lang() == 'en-us') {
                    $('#agoda-container').html('<div id="adgshp178081437"></div>');

                    stg.crt="28298949123472";
                    stg.id=stg.name="adgshp178081437";
                    stg.width="256px";
                    stg.height="340px";
                    stg.ReferenceKey="15ed3nIm5yp7wHUrtBo66g==";
                    stg.Language="en-us";

                } else if (lang() == 'fr-fr') {
                    $('#agoda-container').html('<div id="adgshp-724715094"></div>');

                    stg.crt="28298319377286";
                    stg.id=stg.name="adgshp-724715094";
                    stg.width="256px";
                    stg.height="339px";
                    stg.ReferenceKey="js+GMatKLXCafUirJGBPJg==";
                    stg.Language="fr-fr";
                }

                stg.version="1.04";
                stg.Layout="SquareCalendar";
                stg.Cid="1650708";
                stg.City="30356";
                stg.DestinationName="Gulmarg, India";
                stg.OverideConf=false;
                new AgdSherpa(stg).initialize();
            } else if (width >= 320 && width < 480) {
                if (lang() == 'en-us') {
                    $('#agoda-container').html('<div id="adgshp-1020986767"></div>');
                    stg.crt="28246657200673";
                    stg.id=stg.name="adgshp-1020986767";
                    stg.width="290px";
                    stg.height="383px";
                    stg.ReferenceKey="v02948BYGk8hlz3cKQ9tcQ==";
                    stg.Language="en-us";
                } else if (lang() == 'fr-fr') {
                    $('#agoda-container').html('<div id="adgshp-1791643267"></div>');

                    stg.crt="28246803419237";
                    stg.id=stg.name="adgshp-1791643267";
                    stg.width="290px";
                    stg.height="379px";
                    stg.ReferenceKey="JqeuuduuELjwRfuaBWjH5Q==";
                    stg.Language="fr-fr";
                }

                stg.version="1.04";
                stg.Layout="SquareCalendar";
                stg.Cid="1650708";
                stg.City="30356";
                stg.DestinationName="Gulmarg, India";
                stg.OverideConf=false;
                new AgdSherpa(stg).initialize();

                $('#agoda-container').css('margin-top', 20);
            } else if (width >= 480 && width < 940) {
                if (lang() == 'en-us') {
                    $('#agoda-container').html('<div id="adgshp-1020986767"></div>');

                    stg.crt="28221711367215";
                    stg.id=stg.name="adgshp-1020986767";
                    stg.width="480px";
                    stg.height="143px";
                    stg.ReferenceKey="v02948BYGk8hlz3cKQ9tcQ==";
                    stg.Language="en-us";
                } else if (lang() == 'fr-fr') {
                    $('#agoda-container').html('<div id="adgshp82216471"></div>');

                    stg.crt="28221408579632";
                    stg.id=stg.name="adgshp82216471";
                    stg.width="480px";
                    stg.height="143px";
                    stg.ReferenceKey="EIKROQ81oQ1Q4+8s4jqQBg==";
                    stg.Language="fr-fr";
                }

                stg.version="1.04";
                stg.Layout="Wide";
                stg.Cid="1650708";
                stg.City="30356";
                stg.DestinationName="Gulmarg, India";
                stg.OverideConf=false;
                new AgdSherpa(stg).initialize();

                $('#agoda-container').css('margin-top', 20);
            } else if (width == 940) {
                if (lang() == 'en-us') {
                    $('#agoda-container').html('<div id="adgshp-268571302"></div>');

                    stg.crt="28211695750710";
                    stg.id=stg.name="adgshp-268571302";
                    stg.width="937px";
                    stg.height="268px";
                    stg.ReferenceKey="ptPw9ygUUIJ4oiRmzsEtyQ==";
                    stg.Language="en-us";

                } else if (lang() == 'fr-fr') {
                    var element = $('#agoda-container').html('<div id="adgshp-1456163030"></div>');

                    stg.crt="28211593168562";
                    stg.id=stg.name="adgshp-1456163030";
                    stg.width="939px";
                    stg.height="266px";
                    stg.ReferenceKey="7HQ4wIXXzSCPwU6Fs3Lrmg==";
                    stg.Language="fr-fr";
                    stg.Cid="1650708";
                }

                stg.version="1.04";
                stg.Layout="Oneline";
                stg.Cid="1650708";
                stg.City="30356";
                stg.DestinationName="Gulmarg, India";
                stg.OverideConf=false;
                new AgdSherpa(stg).initialize();
            } else if (width == 1140) {
                if (lang() == 'en-us') {
                    $('#agoda-container').html('<div id="adgshp-323697680"></div>');
                    stg.crt="28189672289967";
                    stg.id=stg.name="adgshp-323697680";
                    stg.width="1138px";
                    stg.height="326px";
                    stg.ReferenceKey="CHMeH1940S3HTqA3lt4d3g==";
                    stg.Language="en-us";
                } else if (lang() == 'fr-fr') {
                    $('#agoda-container').html('<div id="adgshp-796136594"></div>');
                    stg.crt="28212400548248";
                    stg.id=stg.name="adgshp-796136594";
                    stg.width="1140px";
                    stg.height="326px";
                    stg.ReferenceKey="FMGNDCciwdxW7P3w1vhljw==";
                    stg.Language="fr-fr";
                }

                stg.version="1.04";
                stg.Layout="Oneline";
                stg.Cid="1650708";
                stg.City="30356";
                stg.DestinationName="Gulmarg, India";
                stg.OverideConf=false;
                new AgdSherpa(stg).initialize();
            }
        }).resize();
    }

    agoda();

    // Agoda widget
    $('#agoda-widget, .resp-accordion[aria-controls="tab_item-2"]').on('click', function () {
        agoda();
    });

    $(window).resize(function() {
        if ($('.cheapflights')[0]) {
            var width = $('.cheapflights').width();

            if (width < 400) {
                $('.cheapflights').html('<div data-cf-api="WidgetIframe" data-cf-network="CommissionJunction" data-cf-size="275x470" data-cf-theme="WhiteLabel" data-cf-origin-iata="" data-cf-product="FLIGHTS" data-cf-destination-iata="" data-cf-url="http://www.qksrv.net/click-8910575-12816921?url=https://www.cheapflights.com/in?url=/book-flights-online/&a=cj&encoder=19_3&enc_c=338933&enc_bid=12816921&enc_pubid=8910575&enc_pid=3060887&utm_medium%3Daffiliate%26utm_source%3Dcj%26utm_campaign%3D%25zp%26utm_content%3D3060887"></div>');
            } else if (width >= 400 && width < 675) {
                $('.cheapflights').html('<div data-cf-api="WidgetIframe" data-cf-network="CommissionJunction" data-cf-size="400x400" data-cf-theme="WhiteLabel" data-cf-origin-iata="" data-cf-destination-iata="" data-cf-url="http://www.qksrv.net/click-8910575-12816922?url=https://www.cheapflights.com/in?url=/book-flights-online/&a=cj&encoder=19_3&enc_c=338933&enc_bid=12816922&enc_pubid=8910575&enc_pid=3060887&utm_medium%3Daffiliate%26utm_source%3Dcj%26utm_campaign%3D%25zp%26utm_content%3D3060887"></div>');
            } else if (width >= 675) {
                $('.cheapflights').html('<div data-cf-api="WidgetIframe" data-cf-network="CommissionJunction" data-cf-size="675x370" data-cf-theme="WhiteLabel" data-cf-origin-iata="" data-cf-destination-iata="" data-cf-url="http://www.qksrv.net/click-8910575-12816919?url=https://www.cheapflights.com/in?url=/book-flights-online/&a=cj&encoder=19_3&enc_c=338933&enc_bid=12816919&enc_pubid=8910575&enc_pid=3060887&utm_medium%3Daffiliate%26utm_source%3Dcj%26utm_campaign%3D%25zp%26utm_content%3D3060887"></div>');
            }
        }
    }).resize();
}

tabsInit();


// Get the modal
var modal = document.getElementById("myModal");
var alertBox = document.getElementById("myAlertBox");
var wrapper = document.getElementById("wrapper");
var covidAlertButton = document.getElementById("covidAlertButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeModal")[0];
var spanAlert = document.getElementsByClassName("closeModal")[1];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
spanAlert.onclick = function() {
modal.style.display = "none";
alertBox.style.display = "none";
wrapper.style.paddingTop = "0px";
window.scrollTo(0,0);
}
covidAlertButton.onclick = function() {
alertBox.style.display = "none";
modal.style.display = "block";
wrapper.style.paddingTop = "0px";
window.scrollTo(0,0);
}
// When the user clicks on <span> (x), Open the modal
function openModal() {
modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
function myFunction(x) {
  if (x.matches) { // If media query matches
    wrapper.style.paddingTop = "50px";
    window.scrollTo(0,50);
  } else {
    wrapper.style.paddingTop = "80px";
    window.scrollTo(0,80);
  }
}

var x = window.matchMedia("(min-width: 768px)")
x.addListener(myFunction) // Attach listener function on state changes

if (document.cookie.indexOf("visited=") >= 0) {
// They've been here before.
myAlertBox.style.display = "block";
window.myFunction(x);
}
else {
// set a new cookie
expiry = new Date();
expiry.setTime(expiry.getTime()+(10*24*60*60*1000)); //  Days x Hours x Mins x seconds x Milliseconds
// (10*24*60*60*1000)
// Date()'s toGMTSting() method will format the date correctly for a cookie
document.cookie = "visited=yes; expires=" + expiry.toGMTString();
setTimeout(openModal, 3000);
}
