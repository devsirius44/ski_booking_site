---
title: '聯繫我們 | 單板滑雪 | 滑雪 | 喀什米爾Kashmir | 古爾馬爾格Gulmarg | 印度India | Skigulmarg.com'
description: '想到喜馬拉雅山Himalayas-喀什米爾Kashmir-古爾馬爾格Gulmarg 滑雪或單板滑雪嗎? 若有任何問題都可聯繫我們，我們將在48小時內回答您的所有問題。'
keywords: '古爾馬爾格Gulmarg,古爾馬爾格滑雪 Gulmarg Ski, 古爾馬爾格滑雪渡假村Gulmarg Ski Resort, 喀什米爾滑雪Skiing in the Himalayas, 印度滑雪Skiing in India, 喜馬拉雅Himalaya, 喀什米爾Kashmir, Skigulmarg.com'
canonical: /contact-us
alternate: /fr/contactez-nous
alternateHrefLang: fr
alternate2: /cn
alternateHrefLang2: zh-hans
form:
    name: 'Contact Us'
    fields:
        -
            name: firstName
            label: 名
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: lastName
            label: 姓
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: 電子郵件
            classes: form-control
            autocomplete: 'on'
            type: email
            validate:
                required: true
        -
            name: phone
            label: 電話號碼
            classes: form-control
            autocomplete: 'on'
            type: tel
        -
            name: message
            label: 問題和評論
            classes: form-control
            placeholder: 'Enter your message'
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
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            captcha:
                recaptcha_secret: 6Lda8mgUAAAAAFmEzz27bPKdg0tPpJEHVxoOrwcJ
                response: g-recaptcha-response
        -
            email:
                subject: '[Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
                from: '{{form.value.email}}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
        -
            display: /contact-us
---

#聯繫我們 – 聯繫方式

透過客戶提供給我們的有價值的信息回饋，才能讓我們不斷發展和進步。 Skigulmarg.com歡迎您的建議與反應，我們會盡可能回答您的任何問題。為幫助我們回覆您的詢問，請填寫下面的表格。 電子郵件諮詢的回覆時間通常會在48小時內回覆。

**如需即時回覆，敬請致電。**

###電話號碼
營業時間：8:30-21:00  - 東八區UTC-8（當前時間:<iframe style="margin-bottom:-6px;" src="https://freesecure.timeanddate.com/clock/i6l23j70/n3910/fs16/fc666/tct/pct/ts1" frameborder="0" width="62" height="20" allowTransparency="true"></iframe>) <br/>
電話： [+886 907 819 131](tel:+886907819131) <br/>
Skype: <a href="skype:skigulmarg?call" title="Skype Us">skigulmarg</a>

###E-mail
<script>
// A wizard to generate this code is at http://www.jottings.com/obfuscator/
{
coded = "t4uI5OEYUI@t4uI5OEYUI.xfE"
key = "PkVsmpif9OwxLrY1vSdW7qAn084KtEXugyT6jFUeJbBNoHlQc2zaCR3h5IMGDZ"
shift=coded.length
link=""
for (i = 0; i < coded.length; i++) {
    if (key.indexOf(coded.charAt(i)) == -1) {
        ltr = coded.charAt(i)
        link += (ltr)
    }
    else {
        ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length
        link += (key.charAt(ltr))
    }
}
document.write("<p><a href='mailto:" + link + "'>" + link + "</a></p>")
}
</script>

<noscript><p>Sorry, you need Javascript on to email me.</p></noscript>

<!-- <h3>Contact Us</h3>
<span class="required">*</span> Indicates Required Fields -->
