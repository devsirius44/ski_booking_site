---
title:

description:

keywords:

canonical: /

alternate:
alternateHrefLang:

slug:

form:
    name: Contact Us

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
          label: Question and Comments
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
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
            from: '{{form.value.email}}'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for getting in touch!
        - display: /feedback
---

#Contact Us — General Contact

It is through the valuable information provided to us by our clients that we continue to grow and improve. Skigulmarg.com welcomes your feedback and will answer any questions you might have. To help us respond to your Enquiry, please fill out the form below. Response times to e-mail requests vary, but we usually respond within 48 hrs.

**For immediate response, please contact us by phone.**

###Pnone Numbers
Canada: [+1(888)336-9392](tel:+18883369392)<br>
United States: [+1(886)802-3663](tel:+18868023663)<br>
New Zealand: [+64-32-88-01-80](tel:+6432880180)<br>
United Kingdom: [+44-800-088-5696](tel:+448000885696)

###E-mail
[skigulmarg@skigulmarg.com](mailto:skigulmarg@skigulmarg.com)

##Contact Us
<span class="required">*</span> Required Fields