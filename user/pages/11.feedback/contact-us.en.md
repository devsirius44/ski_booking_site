---
title: Feedback Form

description: We welcome your feedback. We want to offer the best Gulmarg Ski website.  Your feedbacks are what make us improve and grow.

keywords:

canonical: /feedback

alternate: /fr/commentaires
alternateHrefLang: fr
alternate2: /cn
alternateHrefLang2: zh-hans

form:
    name: Feedback
    fields:
        - name: firstName
          label: First Name
          classes: form-control
          autocomplete: on
          type: text
          validate:
            required: true
        - name: lastName
          label: Last Name
          classes: form-control
          autocomplete: on
          type: text
          validate:
            required: true
        - name: email
          label: Email
          classes: form-control
          autocomplete: on
          type: email
          validate:
            required: true
        - name: phone
          label: Phone
          classes: form-control
          autocomplete: on
          type: tel
        - name: message
          label: Feedback or Comments
          classes: form-control
          placeholder: Enter your message
          type: textarea
          rows: 5
          minlength: 5
          validate:
            required: true
        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recaptcha_site_key: 6Lda8mgUAAAAALlZBQZFwfHVy1v0lHl7x67bCpIh
          recaptcha_not_validated: 'Captcha not valid!'
          validate:
            required: true
    buttons:
        - type: submit
          value: Submit
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
        - message: Thank you for your feedback!
        - display: /feedback
---

#Feedback

Skigulmarg.com not only strives to be the best at organizing ski trips in Gulmarg. We also strive to offer the best customer satisfaction and the best online browsing experience. Skigulmarg.com welcomes your feedback.

<span class="required">*</span> Indicates Required Fields