---
title: 'Contact Us'
description: 'You want to Ski or Snowboard Gulmarg, Kashmir, the Himalayas. You have questions you need answers. Contact Us, we will answer all your questions within 48h.'
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
            label: 'First Name'
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: lastName
            label: 'Last Name'
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            classes: form-control
            autocomplete: 'on'
            type: email
            validate:
                required: true
        -
            name: phone
            label: Phone
            classes: form-control
            autocomplete: 'on'
            type: tel
        -
            name: message
            label: 'Question and Comments'
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

#Contact Us — General Contact

It is through the valuable information provided to us by our clients that we continue to grow and improve. Skigulmarg.com welcomes your feedback and will answer any questions you might have. To help us respond to your Enquiry, please fill out the form below. Response times to e-mail requests vary, but we usually respond within 48 hrs.

**For immediate response, please contact us by phone.**

###Phone Numbers
Office Hours: 8h30-21h00 - Taiwan UTC-8 (Current time: <iframe style="margin-bottom:-6px;" src="https://freesecure.timeanddate.com/clock/i6l23j70/n3910/fs16/fc666/tct/pct/ts1" frameborder="0" width="62" height="20" allowTransparency="true"></iframe>) <br/>
Phone: [+886 907 819 131](tel:+886907819131) <br/>
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

**Please answer the below questions to help us send you YOUR desired information.** You can copy/paste these questions inside the "QUESTION AND COMMENTS" box, then answer.

- How many people travelling together?
- How many people skiing?
- Your level of skiing? Beginner, intermediate or advanced?
- What level of comfort you are looking for?
- Arrival and departure dates. ​

<!-- <h3>Contact Us</h3>
<span class="required">*</span> Indicates Required Fields -->
