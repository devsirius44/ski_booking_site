---
title: Esquíe en Gulmarg - El Mejor Lugar para Esquiar en la India

description: ¿Desea esquiar en la el Himalaya? Venga al mejor resort de la India! Gulmarg es el mejor resort de la India, aqui le ofrecemos informacion completa sobre guias de esquí, equipos para esquiar, esquiar en Gulmarg, esquiar en Cachemir y esquiar en la India.

keywords:

canonical: /es

alternate2: /en
alternateHrefLang2: en
alternate: /fr
alternateHrefLang: fr

form:
    name: Contáctenos
    fields:
        - name: firstName
          label: Nombre
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
        - name: subject
          label: Título
          classes: form-control
          autocomplete: on
          type: text
        - name: message
          label: Mensaje
          classes: form-control
          placeholder: Diganos como ayudarle
          type: textarea
          rows: 5
          minlength: 5
          validate:
            required: true
        - name: g-recaptcha-response
          label: Captcha
          type: captcha
          recaptcha_site_key: 6Lda8mgUAAAAALlZBQZFwfHVy1v0lHl7x67bCpIh
          recaptcha_not_validated: 'No se pudo validar el Captcha'
          validate:
            required: true
    buttons:
        - type: submit
          value: Validar
    process:
        - captcha:
            recaptcha_secret: 6Lda8mgUAAAAAFmEzz27bPKdg0tPpJEHVxoOrwcJ
            response: g-recaptcha-response
        - email:
            subject: "[Formulario de contacto] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
            from: '{{form.value.email}}'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Gracias por contactarnos.
        - display: /
---

<div class="container" id="about">
    <h2 class="home-section-header">Skigulmarg.com<br>Explore Gulmarg de una Manera Sencilla</h2>
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
                Como un nativo de Quebec, Canada. Esquiar en invierno siempre fué una parte integral de mi infancia, gracias a las grandes posibilidades para esquiar en Canada el deporte me apasionaba desde niño. Cuando crecí quise experimentar mas que antes y empecé a viajar a las Montañas Rocosas en Utah. Luego seguí Hacia Banff y Whistler Blackcomb en las Rocosas Canadienses. Pero mi pasion me llevo a buscar mas lugares, pensé que si cruzaba el hemisferio podría esquiar durante el verano, tal vez llendo a Argentina o Nueva Zelanda. Pero la calidad de la nieve en el hemisferio bajo no era buena asi que la busqueda continuó.。Eventualmente llegando a Japon donde la nieve era profunda y las montañas altas.
            </p>
        </div>
        <div class="col-md-4">
            <p>
                Aun recuerdo que fue en 2007 cuando escuché a los locales en Japon hablando de una pequeña ciudad, cerca de las montañas de Pyrpanjar en el Himalaya occidental, con condiciones naturales bastante buenas para esquiar. - Una pequeña zona de esquí con pocos esquiadores, pero con una profunda cultura de esquí. Esta ciudad era Gulmarg! y era justo lo que soñaba con encontrar. En enero de 2008, llegué a Gulmarg, un pueblo remoto en el hermoso Himalaya de Cachemir, India. ¡los japoneses no mentían! Me quedé en Gulmarg durante 42 días ese invierno. Mis primeras dos semanas en Gulmarg, tuve nieve fresca y espesa todos los días. Después de ese invierno, el Himalaya se convirtió en otro hogar para mi. Así que quise compartir esta hermosa experiencia con mis amigos mientras lo disfrutaba yo también... Es por eso que nació Skigulmarg.com.
            </p>
        </div>
        <div class="col-md-4">
            <p>
                En Skigulmarg.com trabajamos proporcionandole información completa, evaluando sus necesidades, planificando su viaje de manera fácil y eficiente, y reservando sus paquetes de esquí para una estadía inolvidable en Gulmarg-Kashimir a un precio razonable.
            </p>
        </div>
    </div>
</div>

<div class="container m-b-80">
    <h2 class="home-section-header">Skigulmarg | FB Reviews</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="carousel arrows-visibile testimonial testimonial-single testimonial-blockquote" data-items="1" data-autoplay="true" data-loop="true" data-autoplay-timeout="3500">
        <div class="testimonial-item">
            <p>
                De no ser por la ayuda de Skigulmarg mis hermanos y yo probablemente nos hubiésemos quedado atrapados en el aeropuerto de Srinagar. No podemos estar más agradecidos por lo paciente que Yanik fue con nosotros, a pesar de tener que reorganizar nuestro viaje al menos 5 veces antes de llegar a las montañas. La próxima vez tendremos más cuidado de leer bien sus emails, y hacer caso de sus consejos. Ej: Organizar nuestras visas antes de viajar..
            </p>
            <p>
                If it wasn't for the help of Skigulmarg my brothers and I would probably still be stranded at Srinigar airport. Couldn't be more grateful for how patient Yanik was with us, despite rearranging all our travel plans at least 5 times before we even reached the mountain. Next time we'll make sure to read your emails properly and take your advice re: arranging visas prior to departure.
            </p>
            <span>Jennifer Rickward-5* Review</span>
        </div>
        <div class="testimonial-item">
            <p>
                Yanik es muy bueno en lo que hace. Su comunicación fue excelente, muy activa. Me ayudó a planear mi viaje y personalizar mi paquete de Ski. Recomiendo Skigulmarg enfáticamente y estoy muy satisfecho con sus servicios. Definitivamente les estaré contactando en el futuro. Muchas gracias a todos, les deseo un año estupendo y mucha nieve. Saludos!
            </p>
            <p>
                Yanik is very good at what he does. Her communication was great, very active. Helped me plan a trip and customize a ski package. I highly recommend Skigulmarg and am very satisfied with their services. Will definitely contact them in the future. Thanks everybody, wish you all an amazing year and a lot of snow. Cheers!
            </p>
            <span>Jesse Meza-5* Review</span>
        </div>
        <div class="testimonial-item">
            <p>
              Yanik es un tipo genial, muy confiable y atento. Él organizó todo perfectamente para nosotros. Nos dio sugerencias valiosas en Gulmarg, que sirvieron para mejorar nuestra experiencia. Gracias de nuevo y nos vemos el próximo año!  .
            </p>
            <p>
                Yanik is a great guy, very reliably and helpful. He organized everything perfectly for us. He gave us some valuable suggestions on Gulmarg, which greatly improved our overal experience there. Thanks again & see you next year!
            </p>
            <span>Danijel Kovačič-5* Review</span>
        </div>
        <div class="testimonial-item">
            <p>
                Excelente servicio, muy atento, útil y flexible. Seguro programaré otro paquete de viajes con Skigulmarg el año que viene.
            </p>
            <p>
                Great service, very responsive, helpful and flexible. I will certainly book a full package via Skigulmarg again next year.
            </p>
            <span>Adam Davidson-5* Review</span>
        </div>
        <div class="testimonial-item">
            <p>
                Estos muchachos nos dieron el mejor servicio. Todo se acordó por medio de email y aun así todo salió de maravilla. Gracias!
            </p>
            <p>
                These guys provided us with the greatest service! Everything happened via email and still played out perfectly! Thank you
            </p>
            <span>Petru Du Toit-5*  Review</span>
        </div>
    </div>
</div>

<div class="container m-b-80" id="service">
    <h2 class="home-section-header">Paquetes</h2>
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
                        <img src="/user/themes/skigulmarg/images/packages/deluxe/KHYBER-6.jpg" alt="paquetes esquí todo incluido">
                    </span>
                </div>
                <div class="package-description">
                    <h3>​​Paquetes Todo Incluido</h3>
                    <p>
                    ¿Desea esquiar en Gulmarg?<br>
​​Le ofrecemos traslado desde el aeropuerto, los mejores guias y una amplia gama de hoteles y paquetes, desde los mas economicos hasta los mas lujosos, para que elija la opcion que mejor se ajuste a sus necesidades。
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
                        Reservar
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
                                    <h4 class="modal-title">Paquetes Todo Incluido</h4>
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
                        <img src="/user/themes/skigulmarg/images/packages/heliski/ski_gulmarg_11.JPG" alt="Esquiar para Principiantes">
                    </span>
                </div>
                <div class="package-description red">
                    <h3>Paquetes para Principiantes</h3>
                    <p>
                    ¿Desea aprender a esquiar en Gulmarg?<br>
​​Si desea traslado al aeropuerto, rentar su equipo, los mejores instructores de Gulmarg, clases preparadas a su nivel y diferentes tipos de restaurantes, ¡puede elegir el paquete que mejor se ajuste a usted; aquí!
                    </p>
                    <button
                        class="btn btn-rounded btn-outline"
                        type="button"
                        data-target="#modal-checkfront-2"
                        data-toggle="modal"
                        data-checkfront-target="CHECKFRONT_WIDGET_02"
                        data-checkfront-item-id="112,118,126,131,139,144"
                        data-checkfront-options="hidesearch">
                        Reservar
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
                                    <h4 class="modal-title">Paquetes para Principiantes</h4>
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
                        <img src="/user/themes/skigulmarg/images/packages/heliski/mainslider.jpg" alt="Esquiar con Heliski">
                    </span>
                </div>
                <div class="package-description red">
                    <h3>Esquí con Helicoptero</h3>
                    <p>
                    ¿Quiere ver el gran paisaje de Gulmar desde los Cielos?！<br>
​​Elija un paquete de esquí con helicoptero (Heliski) y haga su sueño realidad. Puede agregar paseos individuales, de medio dia o dia completo!  Opciones para todos los gustos.
                    </p>
                    <button
                        class="btn btn-rounded btn-outline"
                        type="button"
                        data-target="#modal-checkfront-3"
                        data-toggle="modal"
                        data-checkfront-target="CHECKFRONT_WIDGET_03"
                        data-checkfront-item-id="21,31"
                        data-checkfront-options="hidesearch">
                        Reservar
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
                                    <h4 class="modal-title">Esqui con Helicoptero</h4>
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
    <h2 class="home-section-header">Galería</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="carousel" data-lightbox="gallery" data-items-lg="6" data-items-md="5" data-items-sm="4" data-items-xs="3" data-items-xxs="2" data-items-xxxs="1" data-margin="10" data-loop="true">
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_01_small.jpg" alt="Ocaso en Apharwat - Ski Gulmarg en Sunshine Peak">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_01.JPG" title="Sunset on Apharwat - Ski Gulmarg to Sunshine Peak"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_02_small.jpg" alt="Sunshine Peak en la distancia desde Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_02.JPG" title="Distant Sunshine Peaks from Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_03_small.jpg" alt="Sunshine Couloir visto desde el Gulmarg Ski Resort">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_03.JPG" title="Sunshine Couloir viewed from Gulmarg Ski Resort"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_04_small.jpg" alt="Una tarde en Gulmarg - Esquiar en el Himalaya es un Paraiso">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_04.JPG" title="One evening in Gulmarg - A ski Himalaya Paradise"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_05_small.jpg" alt="Esquiando el Himalaya - Nieve en Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_05.JPG" title="Ski Himlaya Powder in Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_06_small.jpg" alt="Saliendo de mi Hotel en Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_06.JPG" title="Out of my Hotel in Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_07_small.jpg" alt="Esquiando el Himalaya desde la Gondola de Gulmarg">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_07.JPG" title="Himalaya to ski from Gulmarg Gondola"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_12_small.jpg" alt="Esquiando en Vertical - Pico Shark Fin">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_12.JPG" title="Skiing some steep - Shark Fin Gulmarg"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_16_small.jpg" alt="Halucinantes Saltos -  Monkey Hill - Terreno fuera del mapa">
                </div>
                <div class="grid-description">
                    <a data-lightbox="gallery-item" href="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_16.JPG" title="Sweet Drop - Monkey Hill - Gulmarg Backcountry"></a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-wrap">
                <div class="grid-image">
                    <img src="http://www.hivermonde.com/_images/pics_image_page/gulmarg/ski_gulmarg_17_small.jpg" alt="Jugando en la Villa de Gulmarg">
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
        <h3>Ver: Kashmir <i class="fa fa-snowflake-o"></i> Himalayas V: <a href="https://vimeo.com/user10412861"><b>de Francois Lallier</b></a></h3>
        <h4>
            El Vimeo aparecerá como popover. P: <a href="https://www.flickr.com/photos/zachd1_618/8614477174/in/photolist-jGMx7D-e8erWw-qvESdx-aQRzp-6dKhuA-qBXUN6-9uzWZo-FzpWeT-Rt8CuQ-FZNeoz-4wMBvW-SLnrQY-23VgJNw-24jxgVo-aQRwK-4FGpci-aQRCF-26ncy4u-JH4aFk-6qHoKy-xMxi2-ryxoeS-qLTWgF-XY9Jk"><b>Zach Dischner</b></a>
            </h4>
        </div>
    </div>
</div>

<div class="container m-b-80" id="faq">
    <h2 class="home-section-header">Preguntas Frecuentes</h2>
    <div class="separator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.968 17.761">
            <path d="M3.185,2.741,5.4,1.9l-.33-.853L2.2,2.137-.18.669a1.828,1.828,0,0,0,.043-.4A1.946,1.946,0,0,0-.171-.1L1.975-1.4,4.7.019,5.123-.8,2.9-1.956l2.965-1.8L5.187-4.863,2.4-3.175l.26-2.352-.912-.1L1.407-2.574-.845-1.211a1.923,1.923,0,0,0-.592-.327V-4.076l2.619-1.6L.7-6.457l-2.139,1.31V-8.614h-1.3v3.257L-4.616-6.8l-.559.725L-2.74-4.2v2.682a1.9,1.9,0,0,0-.5.3L-5.493-2.611l-.328-3.214-.913.094.256,2.514L-9.16-4.872l-.681,1.107L-7.133-2.1l-2.1,1.069.417.817,2.6-1.322,2.3,1.42a1.952,1.952,0,0,0-.04.376,2.077,2.077,0,0,0,.04.388l-2.4,1.455L-9.335.93l-.335.854,2.357.92-2.7,1.632.675,1.115L-6.612,3.8l-.011,2.358H-5.7L-5.7,3.241l2.46-1.49a1.806,1.806,0,0,0,.494.29v2.8L-5.3,6.807l.558.73,2-1.54v3.15h1.3V5.966L.576,7.193l.477-.784-2.49-1.517V2.074a1.908,1.908,0,0,0,.562-.307L1.411,3.18,1.393,6.244l.917.005.013-2.506,2.948,1.82.684-1.109Z" transform="translate(10.013 8.614)"/>
        </svg>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="accordion fancy clean" style="margin-bottom: -1px">
                <article class="ac-item">
                    <h4 class="ac-title" id="one">¿Cuando es el mejor momento para esquiar en Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                        La temporada de Ski va desde el 1ero. de Enero hasta el  31 de Marzo (podría extenderse si las condiciones son buenas, seguras y estables). En nuestra opinión, el mejor momento para esquiar en Gulmarg es entre la 3era semana de Enero hasta los últimos de Febrero. En esas fechas es que típicamente tenemos la mayor cantidad de nieve. Marzo tambien puede ser sorpresivamente bueno, con muy pocos turistas y muchas tormentas. Durante ese tiempo puede ponerse muy caliente y la nieve se va rápidamente. Tengan en mente que el Resort de Ski en Gulmarg no tienen máquinas de nieve artificial, así que dependemos de la madre naturaleza por completo.
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="two">¿Necesito Visa para viajar a India y Cachemire? Que otros documentos de viaje necesito?
</h4>
                    <div class="ac-content">
                        <p>
                            Todos los extranjeros que viajen a la India y Cachemir deben tener un Pasaporte Nacional Válido (que debe ser vigente por al menos 6 meses al momento de entrar a India) y obtener una Visa para la India. Vea nuestra página de Formalidades en India para tener detalles completos.
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="three">¿Donde puedo cambiar mi dinero a la moneda local de Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                        Ahora que Gulmarg tiene un Banco, puede intercambiar monedas extranjeras a Rupias. Además del banco, hay muy pocos o ningún lugar para cambiar su dinero una vez que llega a Gulmarg. Es mejor cambiar el dinero al momento de llegar a la india en algún banco en el aeropuerto. Asegúrese de pedir billetes pequeños, por ejemplo de R100 ya que los va a necesitar para hacer compras pequeñas, y tal vez sea difícil conseguir cambio en Gulmarg. Observe nuestro Mapa de la Villa para ver la ubicación del banco。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="four">¿Qué tarjetas de crédito aceptan en India, Cachemir y Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                          Los hoteles más grandes y lujosos, la agencia Kashmir Heliski y Kashmir Rental Shop aceptan Tarjetas de Crédito. India es un país orientado al uso de efectivo. Necesitará pagar por sus pases de góndola, comida y bebidas en efectivo en casi todos los lugares. Su hotel tal vez acepte pagar por su pases y llevarle una cuenta por sus comidas y comprar y luego permitirle que pague con tarjeta de crédito al final de la estadía. Pero mi consejo es “Consiga todo el efectivo que pueda antes de llegar a Gulmarg!”
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="five">¿Qué idioma se habla en Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                            El lenguaje oficial es el Urdu, pero los idiomas principales son el Cachemir y Dogri. El Hindú también se tiene como un segundo idioma. El Inglés se habla bastante también。
                        </p>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion fancy clean" style="margin-bottom: -1px">
                <article class="ac-item">
                    <h4 class="ac-title" id="six">¿Que pasa si soy un principiante o intermedio en el SKi? ¿Recomiendan que haga esquí en Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                        Los principiantes e intermedios bajos puede esquiar en Gulmarg; sin embargo; ya que la mayor parte de Gulmarg no está regulada, hay poco terreno para un esquiador principiante. Podemos organizarles paquetes para principiantes y snowboarders, incluyendo instructores y guías!
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="seven">¿De querer tomar un descanso del esquí; que otras posibilidades hay para pasear y cómo se organizan? </h4>
                    <div class="ac-content">
                        <p>
                            Viajes de un dia o por la noche a Srinagar son una buena opción. La ciudad es conocida por sus bellos jardines y céspedes aéreos. Si se queda de noche, es casi obligatorio dormir en una Casa acuática en el bello Lago Dal. Podemos organizarle estos paseos para usted. Vea nuestra página Acerca de Srinagar para mayor información.
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="eight">¿Es Cachemire seguro?¿Que tal Gulmarg?</h4>
                    <div class="ac-content">
                        <p>
                            Durante muchos años, hubo disputas políticas entre la India y Pakistán sobre la provincia de Cachemir. SIn embargo, las tensiones han desaparecido en la última década. Todavía hay una fuerte presencia militar en Cachemire, pero están allí para garantizar su seguridad. Gulmarg (localizada en el estado Cachemir de la India) es una villa montañera remota aislada de todo el conflicto político, y así los turistas pueden sentirse seguros allí。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="nine">¿Necesito algún tipo de vacuna para viajar a la India y; específicamente; a Cachemir?</h4>
                    <div class="ac-content">
                        <p>
                            Debes consultar con tu doctor en relación a cualquier tipo de vacuna necesaria antes del viaje. Algunas inyecciones pueden no ser obligatorias pero recomendadas e incluyen Hepatitis A y B, Tétano, Difteria y Cólera. Tu doctor también deberá tener una lista completa de vacunas necesarias. Puede además consultar el sitio web de su gobierno o el sitio web de la CDC (Centro de Control de Enfermedades) antes de ir a la India。
                        </p>
                    </div>
                </article>
                <article class="ac-item">
                    <h4 class="ac-title" id="ten">¿Hay tiendas en Gulmarg?¿Donde podré comprar souvenirs?</h4>
                    <div class="ac-content">
                        <p>
                            Hay unas cuantas tiendas en Gulmarg, pero las compras son limitadas. Cachemir es conocido por sus alfombras y finas telas como la Pashmina y puede encontrar abundancia de estos en Gulmarg. Puede comprar una sudadera personalizada hecha con lana local en algunas sastrerías en la Villa de Gulmarg. En Srinagar hay más posibilidades de comprar pues hay tiendas donde venden manualidades como prendas de seda tejidas a mano, shawls bordados y Namdahs (alfombras de fieltro bordado)。
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
