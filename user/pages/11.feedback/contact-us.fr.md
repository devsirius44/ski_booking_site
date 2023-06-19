---
title: Formulaire de Feedback

description: You want to Ski or Snowboard Gulmarg, Kashmir, the Himalayas. You have questions you need answers. Contact Us, we will answer all your questions within 48h.

keywords:

canonical: /fr/commentaires

alternate: /feedback
alternateHrefLang: en
alternate2: /cn
alternateHrefLang2: zh-hans

slug: commentaires

form:
    name: Contact Us
    fields:
        - name: firstName
          label: Prénom
          classes: form-control
          autocomplete: on
          type: text
          validate:
            required: true
        - name: lastName
          label: Nom
          classes: form-control
          autocomplete: on
          type: text
          validate:
            required: true
        - name: email
          label: Adresse Électronique
          classes: form-control
          autocomplete: on
          type: email
          validate:
            required: true
        - name: phone
          label: Numéro de Téléphone
          classes: form-control
          autocomplete: on
          type: tel
        - name: message
          label: Questions et/ou Commentaires
          classes: form-control
          placeholder: Entrez votre message
          type: textarea
          rows: 5
          minlength: 5
          validate:
            required: true
        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recaptcha_site_key: 6Lda8mgUAAAAALlZBQZFwfHVy1v0lHl7x67bCpIh
          recaptcha_not_validated: 'Captcha non valide!'
          validate:
            required: true
    buttons:
        - type: submit
          value: Soumettre
    process:
        - captcha:
            recaptcha_secret: 6Lda8mgUAAAAAFmEzz27bPKdg0tPpJEHVxoOrwcJ
            response: g-recaptcha-response
        - email:
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
            from: '{{form.value.email}}'
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Merci pour vos commentaires!
        - display: /commentaires
---

#Feedback

Skigulmarg.com s’efforce d’organiser les meilleurs séjours au ski à Gulmarg. Nous essayons aussi d’offrir une satisfaction totale à nos clients et la meilleure expérience de recherche en ligne. Skigulmarg.com vous encourage à nous faire part de vos commentaires.

<span class="required">*</span> Champ Obligatoire