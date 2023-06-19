---
title: '印度 滑雪—古爾馬爾格(Gulmarg) 滑雪 ，最佳滑雪地點 印度'
description: '想到印度滑雪 ? 滑雪愛好者終極目標-印度! 想找更多有關印度滑雪、喀什米爾 滑雪、古爾馬爾格(Gulmarg) 滑雪套組、滑雪導遊、滑雪設備...資訊'
canonical: /cn
alternate2: /en
alternateHrefLang2: en
alternate: /fr
alternateHrefLang: fr
form:
    name: 聯繫我們
    fields:
        -
            name: firstName
            label: 姓名
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: 電子信箱
            classes: form-control
            autocomplete: 'on'
            type: email
            validate:
                required: true
        -
            name: subject
            label: 主旨
            classes: form-control
            autocomplete: 'on'
            type: text
        -
            name: message
            label: 訊息內容
            classes: form-control
            placeholder: 輸入您的消息
            type: textarea
            rows: 5
            minlength: 5
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6Lda8mgUAAAAALlZBQZFwfHVy1v0lHl7x67bCpIh
            recaptcha_not_validated: 驗證碼無效
            validate:
                required: true
    buttons:
        -
            type: submit
            value: 提交
    process:
        -
            captcha:
                recaptcha_secret: 6Lda8mgUAAAAAFmEzz27bPKdg0tPpJEHVxoOrwcJ
                response: g-recaptcha-response
        -
            email:
                subject: '[聯繫表] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
                from: '{{form.value.email}}'
                to: yatin@skigulmarg.com
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 感謝您與我們聯繫
        -
            display: /
---

<div class="container" id="about">
    <h2 class="home-section-header">Skigulmarg.com<br>用簡單的方式探索印度-古爾馬爾格</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
</div>
<div class="container-fluid m-b-80 p-t-60 p-b-60 gulmarg-in-winter">
    <div class="row">
        <div class="col-md-4">
            <p>
                我來自加拿大魁北克，因地理氣候因素滑雪在冬天對我來說是日常生活不可或缺的活動，正因如此才讓我從小就對滑雪有著滿腔熱忱。長大後，為了體驗不同的滑雪旅程，離開家鄉後先到猶他州洛磯山脈 ，展轉的又搬到了加拿大洛磯山脈的班夫及惠斯勒黑梳山 。但對於滑雪的渴望越來越大，心想若到另一個半球像紐西蘭或是阿根廷就可以在夏天滑雪了!但南半球的雪質量相當差，所以我們繼續探索另一個國家-日本，那裡的雪況好，山脈又陡峭。
            </p>
        </div>
        <div class="col-md-4">
            <p>
                還記得應該是在2007年，那時在日本聽當地人說過在印度的喜馬拉雅山西部的皮爾潘賈爾山脈附近有個古爾馬爾格(Gulmarg)小鎮，那裡有著相當好的滑雪天然條件–少量滑雪者但卻擁有很深滑雪文化的大型滑雪場。哇...這不就就是我夢寐以求的地方嗎!!! 就在2008年1月，我抵達位於印度克什米爾地區美麗的喜馬拉雅山脈中的偏遠村莊古爾馬爾格(Gulmarg)。果真，日本人沒有撒謊!那個年冬天我在古爾馬爾格(Gulmarg)待了42天，在古爾馬爾格(Gulmarg)的前兩週，每天都有新鮮又厚的積雪，讓我在地上滑出深深的足跡。那年冬天後，喜馬拉雅山成為我冬天的另一個家! 心想在享受之餘也想與同好者一起分享這有深度的滑雪國度......這正是Skigulmarg.com誕生的原因。
            </p>
        </div>
        <div class="col-md-4">
            <p>
                Skigulmarg.com 提供豐富完整資訊，評估您的需求，可以簡單高效率地規劃行程，並以合理的價格預訂一次令人難忘的古爾馬爾格(Gulmarg)-喀什米爾(Kashimir)滑雪之旅。此外，Skigulmarg.com目前也有提供中文服務，若有不了解的地方歡迎與我們聯繫，我們會盡快回覆您!
            </p>
        </div>
    </div>
</div>

<div class="container m-b-80">
    <h2 class="home-section-header">Skigulmarg | Facebook 評價</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="carousel arrows-visibile testimonial testimonial-single testimonial-blockquote" data-items="1" data-autoplay="true" data-loop="true" data-autoplay-timeout="3500">
        <div class="testimonial-item">
            <p>
                如果不是因為skigulmarg.com 的幫助我的兄弟和我可能仍然被困在Srinigar機場. 對於Yanik的耐心幫忙讓我們很感激,儘管我們在出發前重新安排旅行計劃不下5次.他依然耐心回覆 下次我們會先確認你的電子郵件, 並接受你的建議應在離開前安排好簽證.
            </p>
            <p>
                If it wasn't for the help of Skigulmarg my brothers and I would probably still be stranded at Srinigar airport. Couldn't be more grateful for how patient Yanik was with us, despite rearranging all our travel plans at least 5 times before we even reached the mountain. Next time we'll make sure to read your emails properly and take your advice re: arranging visas prior to departure.
            </p>
            <span>Jennifer Rickward-5* 評價</span>
        </div>
        <div class="testimonial-item">
            <p>
                Yanik她非常的專業，無論是與客戶溝通, 或是客製化的行程設計，都非常的有效率及細心!我非常推薦 skigulmarg.com 對於他們的服務感到非常滿意，將來肯定會聯絡他們。謝謝大家, 祝大家都有美好多雪的一年!
            </p>
            <p>
                Yanik is very good at what she does. Her communication was great, very active. Helped me plan a trip and customize a ski package. I highly recommend Skigulmarg and am very satisfied with their services. Will definitely contact them in the future. Thanks everybody, wish you all an amazing year and a lot of snow. Cheers!
            </p>
            <span>Jesse Meza-5* 評價</span>
        </div>
        <div class="testimonial-item">
            <p>
                Yanik是個願意幫助又可以依靠的好人. 他為我們安排了一切 也給了我們一些關於Gumlarg的寶貴建議, 這大大改善了我們在那裡的體驗. 再次感謝你, 明年見!  .
            </p>
            <p>
                Yanik is a great guy, very reliably and helpful. He organized everything perfectly for us. He gave us some valuable suggestions on Gulmarg, which greatly improved our overal experience there. Thanks again & see you next year!
            </p>
            <span>Danijel Kovačič-5* 評價</span>
        </div>
        <div class="testimonial-item">
            <p>
                傑出的服務, 提供豐富的資訊，溝通非常有效率加上客製化的套組滿足我的需求. 明年我肯定會在skigulmarg預訂全套的滑雪行程.
            </p>
            <p>
                Great service, very responsive, helpful and flexible. I will certainly book a full package via Skigulmarg again next year.
            </p>
            <span>Adam Davidson-5* 評價</span>
        </div>
        <div class="testimonial-item">
            <p>
                團隊為我們提供了最棒的服務 ! 而這一切都只靠電子郵件就完成了, 而且讓我們能有個完美旅程! 謝謝你們,
            </p>
            <p>
                These guys provided us with the greatest service! Everything happened via email and still played out perfectly! Thank you
            </p>
            <span>Petru Du Toit-5*  評價</span>
        </div>
    </div>
</div>

<div class="container m-b-80" id="service">
    <h2 class="home-section-header">滑雪套組</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="row">
        <div class="col-sm-4 m-b-40">
            <div class="package-item-wrap red">
                <div class="package-image">
                    <span>
                        <img src="/user/themes/skigulmarg/images/packages/deluxe/KHYBER-6.jpg" alt="滑雪套組">
                    </span>
                </div>
                <div class="package-description">
                    <h3>​​滑雪套組</h3>
                    <p>
                    想到古爾馬爾格(Gulmarg)滑雪嗎?<br>
​​我們提供機場接駁車、最棒的導遊及各種不同型態的飯店，從經濟型到奢華等級應有盡有，您可依您的需求做出最好的選擇。
                    </p>
                    <button
                        class="btn btn-rounded btn-outline"
                        type="button"
                        data-target="#modal-checkfront-1"
                        data-toggle="modal"
                        data-checkfront-target="CHECKFRONT_WIDGET_01"
                        data-checkfront-item-id="41,46,51,52,53,54,55,32,60,24,65,70,75,80,85,90"
                        data-checkfront-category-id="18,3,13,19"
                        data-checkfront-options="hidesearch">
                        立即訂購
                    </button>
                    <div class="modal fade" id="modal-checkfront-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button
                                        class="close"
                                        type="button"
                                        data-dismiss="modal"
                                        aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">滑雪套組</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="CHECKFRONT_WIDGET_01">
                                        <p class="searching-availability">
                                            Searching Availability...
                                        </p>
                                    </div>
                                    <noscript>
                                        <a href="https://skigulmarg.checkfront.com/reserve/" class="font-16">
                                            Continue to Secure Booking System &raquo;
                                        </a>
                                    </noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 m-b-40">
            <div class="package-item-wrap red">
                <div class="package-image">
                    <span>
                        <img src="/user/themes/skigulmarg/images/packages/heliski/ski_gulmarg_11.JPG" alt="初階滑雪套組">
                    </span>
                </div>
                <div class="package-description red">
                    <h3>初階滑雪課程套組</h3>
                    <p>
                    想到古爾馬爾格(Gulmarg)來學滑雪嗎?<br>
​​無論是機場接駁車、滑雪設備、最棒的滑雪教練和不同型態飯店，皆可滿足所需，快選擇合適的滑雪套組吧!
                    </p>
                    <button
                        class="btn btn-rounded btn-outline"
                        type="button"
                        data-target="#modal-checkfront-2"
                        data-toggle="modal"
                        data-checkfront-target="CHECKFRONT_WIDGET_02"
                        data-checkfront-item-id="112,118,126,131,139,144"
                        data-checkfront-options="hidesearch">
                        立即訂購
                    </button>
                    <div class="modal fade" id="modal-checkfront-2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button
                                        class="close"
                                        type="button"
                                        data-dismiss="modal"
                                        aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">初階滑雪課程套組</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="CHECKFRONT_WIDGET_02">
                                        <p class="searching-availability">
                                            Searching Availability...
                                        </p>
                                    </div>
                                    <noscript>
                                        <a href="https://skigulmarg.checkfront.com/reserve/" class="font-16">
                                            Continue to Secure Booking System &raquo;
                                        </a>
                                    </noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 m-b-40">
            <div class="package-item-wrap red">
                <div class="package-image">
                    <span>
                        <img src="/user/themes/skigulmarg/images/packages/heliski/mainslider.jpg" alt="直升機滑雪套組">
                    </span>
                </div>
                <div class="package-description red">
                    <h3>直升機滑雪套組</h3>
                    <p>
                    ​​想從高空一覽無遺喜馬拉雅山壯觀的美景嘛！<br>
​​選擇整周的直升機滑雪套組讓您夢想成真。倘若選擇其他滑雪套組卻也想體驗直升機滑雪，也可額外增購直升機滑雪行程來滿足慾望呦。
                    </p>
                    <button
                        class="btn btn-rounded btn-outline"
                        type="button"
                        data-target="#modal-checkfront-3"
                        data-toggle="modal"
                        data-checkfront-target="CHECKFRONT_WIDGET_03"
                        data-checkfront-item-id="21,31"
                        data-checkfront-options="hidesearch">
                        立即訂購
                    </button>
                    <div class="modal fade" id="modal-checkfront-3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button
                                        class="close"
                                        type="button"
                                        data-dismiss="modal"
                                        aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">直升機滑雪套組</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="CHECKFRONT_WIDGET_03">
                                        <p class="searching-availability">
                                            Searching Availability...
                                        </p>
                                    </div>
                                    <noscript>
                                        <a href="https://skigulmarg.checkfront.com/reserve/" class="font-16">
                                            Continue to Secure Booking System &raquo;
                                        </a>
                                    </noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container m-b-80" id="gallery">
    <h2 class="home-section-header">相片</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="carousel" data-lightbox="gallery" data-items-lg="6" data-items-md="5" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-items-xxxs="1" data-margin="10" data-loop="true">
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_01_small.jpg" alt="Sunset on Apharwat - Ski Gulmarg to Sunshine Peak">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_01.JPG" title="Sunset on Apharwat - Ski Gulmarg to Sunshine Peak"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_02_small.jpg" alt="Distant Sunshine Peaks from Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_02.JPG" title="Distant Sunshine Peaks from Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_03_small.jpg" alt="Sunshine Couloir viewed from Gulmarg Ski Resort">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_03.JPG" title="Sunshine Couloir viewed from Gulmarg Ski Resort"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_04_small.jpg" alt="One evening in Gulmarg - A ski Himalaya Paradise">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_04.JPG" title="One evening in Gulmarg - A ski Himalaya Paradise"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_05_small.jpg" alt="Ski Himlaya Powder in Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_05.JPG" title="Ski Himlaya Powder in Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_06_small.jpg" alt="Out of my Hotel in Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_06.JPG" title="Out of my Hotel in Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_07_small.jpg" alt="Himalaya to ski from Gulmarg Gondola">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_07.JPG" title="Himalaya to ski from Gulmarg Gondola"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_12_small.jpg" alt="Skiing some steep - Shark Fin Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_12.JPG" title="Skiing some steep - Shark Fin Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_16_small.jpg" alt="Sweet Drop - Monkey Hill - Gulmarg Backcountry">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_16.JPG" title="Sweet Drop - Monkey Hill - Gulmarg Backcountry"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_17_small.jpg" alt="Playing in Gulmarg Village">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_17.JPG"  title="Playing in Gulmarg Village"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid m-b-80 video">
    <div class="video-overlay"></div>
    <div class="container">
        <a href="https://vimeo.com/187066351" data-lightbox="iframe" class="video-play"><i class="fa fa-play" style="font-size: 64px"></i></a>
        <div class="video-description">
        <h3>Watch: Kashmir <i class="fa fa-snowflake-o"></i> Himalayas V: <a href="https://vimeo.com/user10412861"><b>Francois Lallier</b></a></h3>
        <h4>
            Vimeo video will appear in popover. P: <a href="https://www.flickr.com/photos/zachd1_618/8614477174/in/photolist-jGMx7D-e8erWw-qvESdx-aQRzp-6dKhuA-qBXUN6-9uzWZo-FzpWeT-Rt8CuQ-FZNeoz-4wMBvW-SLnrQY-23VgJNw-24jxgVo-aQRwK-4FGpci-aQRCF-26ncy4u-JH4aFk-6qHoKy-xMxi2-ryxoeS-qLTWgF-XY9Jk"><b>Zach Dischner</b></a>
            </h4>
        </div>
    </div>
</div>

<div class="container m-b-80" id="faq">
    <h2 class="home-section-header">常見問題</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="accordion fancy clean" style="margin-bottom: -1px">
                <article class="ac-item">
                    <h4 class="ac-title" id="one">何時是古爾默爾格(Gulmarg)最佳滑雪時期?</h4>
                    <div class="ac-content">
                        <p>
                            滑雪季節約在1月1日至3月31日這期間（如果雪況良好，安全和穩定，滑雪季可能會延長）。 Skigulmarg 團隊以過去多年經驗認為，在古爾默爾格(Gulmarg)滑雪的最佳時間是在1月的第3周至2月下旬之間。 通常這期間的雪量最充沛。選擇在3月來古爾默爾格(Gulmarg)，雖然那時遊客數量會比較少，雪量也夠，不過會因天氣慢慢變熱的因素，積雪變化也會變化較快 。最後，這裡要提醒各位，古爾默爾格(Gulmarg)沒有人工造雪服務，是依靠大自然的力量，營造這滑雪渡假聖地!
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="two">前往印度和喀什米爾需要簽證嗎？ 還需要哪些其他旅行證件？</h4>
                    <div class="ac-content">
                        <p>
                            所有前往印度 (India)和喀什米爾(Kashmir)的外國人必須持有有效的國家護照（必須有效至少6個月）並需要有印度簽證。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="three">在古爾默格(Gulmarg)有地方可以兌換當地貨幣盧比(rupees)嗎？</h4>
                    <div class="ac-content">
                        <p>
                            目前，古爾馬爾格(Gulmarg)只有一家銀行，您可以在銀行用外幣兌換盧比。 除了銀行外，幾乎沒有地方可以當地貨幣。 建議當您到達印度機場時，先在機場的銀行兌換貨幣。 記得兌換小面額的貨幣(例如 R100)，以免在小額購物時，面額太大商家無法找錢給您。 銀行位置請參閱我們的村莊地圖。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="four">在喀什米爾(Kashmir ) 及古爾馬爾格(Gulmarg)可以使用信用卡交易嗎?</h4>
                    <div class="ac-content">
                        <p>
                            印度是一個以現金為導向的國家。所以像購買滑雪票卷、食物和飲料..都須支付現金。唯有大型和較好的酒店及喀什米爾heliski高山滑雪和喀什米爾Alpine滑雪設備出租店有提供信用卡服務。誠心建議您，“在到達古爾馬格(Gulmarg)之前，盡可能多換點現金！”
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="five">古爾默格(Gulmarg)說什麼語言？</h4>
                    <div class="ac-content">
                        <p>
                            官方語言是烏爾都語(Urdu)，但主要使用的語言是克什米爾和多里，當然英語在古爾默格(Gulmarg)這也被廣泛使用。
                        </p>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion fancy clean" style="margin-bottom: -1px">
                <article class="ac-item">
                    <h4 class="ac-title" id="six">初學或低中級滑雪者，適合在古爾馬爾格(Gulmarg)滑雪嗎？</h4>
                    <div class="ac-content">
                        <p>
                            初學者或低、中級滑雪者是可以在古爾馬爾格(Gulmarg)滑雪的;不過，由於大多數古爾馬爾格(Gulmarg)是天然雪場是很難用人為方式控制雪場條件，所以初學者或低中級者滑雪的地方非常有限。但我們可以為初学者或低中级者安排有經驗滑雪教練及導遊，讓這些有需求的滑雪者也能在有限的地形內享受滑雪樂趣!
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="seven">當地除了滑雪外，有其他一日遊的行程嗎?該如何安排呢? </h4>
                    <div class="ac-content">
                        <p>
                            前往附近的斯利那加(Srinagar）的單日行程或過夜都是不錯的選擇。 這座城市以其美麗的花園和梯田草坪而聞名。 若您想過夜，船屋可停留在美麗的達爾湖(Dal Lake)上，讓您有個難忘的不同體驗。 這些行程都可由我們替您安排。想了解更多相關訊息，請參閱關於斯利那加(Srinagar）頁面
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="eight">在喀什米爾(Kashmir)安全嗎？ 那古爾馬爾格(Gulmarg)呢？</h4>
                    <div class="ac-content">
                        <p>
                            多年來，印度和巴基斯坦喀什米爾省之間存在著政治糾紛。 不過，在過去的十年裡，緊張局勢已經消退。 喀什米爾(Kashmir)仍然有著強大的軍隊存在，但只是為了確保人民及觀光客的安全。 至於古爾馬爾格(Gulmarg），它是一個偏離政治動盪的偏遠山村，遊客在古爾馬爾格(Gulmarg）的安全顧慮是不用太擔心的喔。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="nine">在前往印度前，尤其是到喀什米爾(Kashmir)是否需要先施打任何類型的疫苗呢？</h4>
                    <div class="ac-content">
                        <p>
                            有些疫苗接種可能不具強制性，但像A型肝炎和B型肝炎，破傷風、白喉因屬全球性疫情，建議在旅行前先到醫院旅遊醫學門診向醫生諮詢有關必要的疫苗接種。或是，上國家官網或CDC網站（疾病控制中心）- 國際重要疫情資訊查看。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="ten">古爾馬爾格(Gulmarg)有購物嗎？ 在哪裡可以購買紀念品？</h4>
                    <div class="ac-content">
                        <p>
                            古爾馬爾格(Gulmarg)有幾家商店，但購物選擇相當有限。 喀什米爾(Kashmir)以地毯和細緻的織品(Pashmina)而聞名，你可以在古爾馬爾格(Gulmarg)這些物品。 在古爾馬爾格(Gulmarg)村莊裡的一些裁縫店有當地毛織物的訂制連帽衫。 在斯利那加(Srinagar)有更多的購物機會，您可以購買手工絲綢、繡花披肩和刺繡氈墊等手工藝品。
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>