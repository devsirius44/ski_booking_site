---
title: 'Nous Contacter'
slug: contactez-nous
description: 'You want to Ski or Snowboard Gulmarg, Kashmir, the Himalayas. You have questions you need answers. Contact Us, we will answer all your questions within 48h.'
canonical: /fr/contactez-nous
alternate: /contact-us
alternateHrefLang: en
alternate2: /cn
alternateHrefLang2: zh-hans
form:
    name: 'Contactez Nous'
    fields:
        -
            name: firstName
            label: Prénom
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: lastName
            label: Nom
            classes: form-control
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: 'Adresse Électronique'
            classes: form-control
            autocomplete: 'on'
            type: email
            validate:
                required: true
        -
            name: phone
            label: 'Numéro de Téléphone'
            classes: form-control
            autocomplete: 'on'
            type: tel
        -
            name: message
            label: 'Questions et/ou Commentaires'
            classes: form-control
            placeholder: 'Entrez votre message'
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
            recaptcha_not_validated: 'Captcha non valide!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Soumettre
    process:
        -
            captcha:
                recaptcha_secret: 6Lda8mgUAAAAAFmEzz27bPKdg0tPpJEHVxoOrwcJ
                response: g-recaptcha-response
        -
            email:
                subject: '[Formulaire de contact] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
                from: '{{form.value.email}}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Merci de rester en contact!'
        -
            display: /contactez-nous
---

#Nous Contacter – Formulaire de Contact

C’est grâce à la qualité de l’information fournie à nos clients que nous nous améliorons et que nous nous développons. Skigulmarg.com vous invite à nous faire part de vos questions et commentaires. Aidez-nous à répondre à vos questions en remplissant le formulaire ci-dessous. Le temps de réponse peut varier, mais nous répondons généralement sous 48 heures.

**Pour obtenir une réponse immédiate, merci de nous téléphoner.**

###Téléphone 
Heures de travail: 8h30-21h00 - Taiwan UTC-8 (Heure actuelle: <iframe style="margin-bottom:-6px;" src="https://freesecure.timeanddate.com/clock/i6l23j70/n3910/fs16/fc666/tct/pct/ts1" frameborder="0" width="62" height="20" allowTransparency="true"></iframe>) <br/>
Phone: [+886 907 819 131](tel:+886907819131) <br/>
Skype: <a href="skype:skigulmarg?call" title="Skype">skigulmarg</a>

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

<noscript><p>Désolé, vous avez besoin de Javascript pour m'envoyer un email.</p></noscript>

<!-- <h3>Nous Contacter</h3>
<span class="required">*</span> Champ Obligatoire -->
