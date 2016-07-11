(function($) {
    function validateContacto() {
        $('<div class="lightbox-message"><div class="content__lightbox"><div class="content__lightbox__text"></div><p class="btn--icon js-close-lightbox"><span><svg><use xlink:href="#shape-icon-open" /></svg></span>Regresar</p></div></div>').hide().appendTo('.container-form');
        $.validator.addMethod("customemail", 
                              function(value, element) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(value);
        }, 
                              "Tu correo no es válido"
                             );
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.form--contact').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    consulta: "required",
                    name: "required",
                    phone: "required",
                    empresa: "required",
                    mail: {
                        required: true,
                        email: true,
                        customemail: true
                    },
                    mensaje: {
                        required:true,
                        minlength:8
                    },
                },
                messages: {
                    consulta: {
                        required: "Usa solo letras"
                    },
                    name: {
                        required: "Usa solo letras"
                    },
                    phone: {
                        required: "Usa solo letras"
                    },
                    empresa: {
                        required: "Usa solo letras"
                    },
                    mail: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido",
                        customemail: "Ingresa un Email válido"
                    },
                    mensaje: {
                        required: "Ingresar un mensaje/consulta",
                        minlength: "Ingresa al menos 8 caracteres."
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.input-group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form--contact .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.form--contact').attr('action'), $('.form--contact').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form--contact .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.form--contact .content__lightbox__text').html('<p class="success-msg">Thanks for your message.</p>').fadeIn();
                            $('.js-close-lightbox').parents('.lightbox-message').find('.content__lightbox__text').empty();
                            $('.form--contact').find('.form__valid').removeClass('form__valid');
                            $('.form--contact')[0].reset();
                        } else {
                            $('.form--contact .content__lightbox__text').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                            $('.js-close-lightbox').parents('.lightbox-message').find('.content__lightbox__text').empty();
                        }
                    });
                    return false;
                }
            });
        });
    }
    validateContacto();
})(jQuery);