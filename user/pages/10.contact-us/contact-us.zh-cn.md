---
title: 联系我们 |单板滑雪 | 滑雪 | 喀什米尔Kashmir | 古尔马尔格Gulmarg | 印度India | Skigulmarg.com

description: 想到喜马拉雅山Himalayas-喀什米尔Kashmir-古尔马尔格Gulmarg 滑雪或单板滑雪吗? 若有任何问题都可联系我们，我们将在48小时内回答您的所有问题。

keywords: 古尔马尔格Gulmarg,古尔马尔格滑雪Gulmarg Ski, 古尔马尔格滑雪渡假村Gulmarg Ski Resort, 喀什米尔滑雪Skiing in the Himalayas, 印度滑雪Skiing in India, 喜马拉雅Himalaya, 喀什米尔Kashmir, Skigulmarg.com

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
            label: '名'
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: lastName
            label: '姓'
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: '电子邮件'
            classes: form-control
            autocomplete: 'on'
            type: email
            validate:
                required: true
        -
            name: phone
            label: '电话号码'
            classes: form-control
            autocomplete: 'on'
            type: tel
        -
            name: message
            label: '问题和评论'
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

#联系我们–联系方式

透过客户提供给我们的有价值的信息回馈，才能让我们不断发展和进步。 Skigulmarg.com欢迎您的建议与反应，我们会尽可能回答您的任何问题。为帮助我们回覆您的询问，请填写下面的表格。电子邮件咨询的回复时间通常会在48小时内回复。

**如需即时回复，敬请致电。**

###电话号码
营业时间：8:30-21:00  - 东八区UTC-8（当前时间:<iframe style="margin-bottom:-6px;" src="https://freesecure.timeanddate.com/clock/i6l23j70/n3910/fs16/fc666/tct/pct/ts1" frameborder="0" width="62" height="20" allowTransparency="true"></iframe>) <br/>
电话：[+886 907 819 131](tel:+886907819131) <br/>
Skype: <a href="skype:skigulmarg?call" title="Skype Us">skigulmarg</a>

###电子邮件
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
