(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowsHeight = $window.height();
    function menuMobile() {
        var button = $('.js-open-menu'),
            menu = $('.js-menu'),
            opac = $('.opac'),
            windowsHeight = $window.height() - 50,
            mobile = $('.menu--mobile'),
            body = $('body, html');
        if (windowSize < 980) {
            mobile.css('height', windowsHeight);
            button.click(function() {
                menu.toggleClass('open');
                opac.stop().fadeToggle();
            });
        }
    }
    function slide() {
        $('.js-slide').flexslider({
            animation: "slide",
            slideshow : true,
            nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
            prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>'
        });
    }
    function buscador() {
        var search = $('.js-search'),
            cancel = $('.js-cancel'),
            text = $('.input-text'),
            nav = $('.nav');
        if(windowSize > 980) {
            search.click(function() {
                $(this).parents('.search-bar').addClass('buscar');
                $(this).removeClass('js-search');
                text.focus();
                nav.fadeOut(200);
            });
            cancel.click(function() {
                search.parents('.search-bar').removeClass('buscar');
                search.addClass('js-search');
                $(this).removeClass('.js-cancel');
                nav.fadeIn();
            });
        }
    }
    function accordeonproductos() {
        var accordeon = $('.js-title'),
            content = $('.js--contenido');
        if(accordeon.length > 0) {
            if(windowSize < 740) {
                var trigger = $('.js-title'),
                    items   = $('.js--contenido');
                trigger.on('click', function(){
                    if (!$this.parent().find('.js--contenido').is(':animated')) {
                        console.log('hola');
                        var $this   = $(this);
                        items.stop(true, true).addClass('open');
                        if ( $this.parent().hasClass('open') ) {
                            $this.parent().siblings().removeClass('open');
                            $this.parent().removeClass('open');
                        }
                        items.slideUp(300);
                        trigger.removeClass('open');
                        var target = $this;
                        $this.parent().find('.js--contenido').stop().slideToggle(300, function(){
                            $('html, body').stop().animate({
                                'scrollTop': target.offset().top - 60
                            }, 900, 'swing');
                        });
                        $this.stop().toggleClass('open');
                    }
                });
            }
        }
    }
    function smoothScroll() {
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    }
    function form() {
        var input = $('input, textarea, select'),
            select = $('.style-select');
        input.focus(function() {
            $(this).parents('.input-group').addClass('done');
            $(this).parents('.input-group').siblings().removeClass('done');
        });
        input.blur(function() {
            if( !$(this).val() ) {
                $(this).parents('.input-group').removeClass('done');
            }
        });
        select.change(function() {
            $(this).parents('.input-group').removeClass('done');
        });
    }
    function responseLightbox() {
        var light = $('.lightbox-message'),
            close = $('.js-close-lightbox'),
            text = $('.content__lightbox__text');
        close.click(function() {
            light.fadeOut();
            text.empty();
        });
    }
    function sidebar() {
        var text = $('.js-sidebar-text'),
            list = $('.js-sidebar-list'),
            child = $('.child');
        text.click(function() {
            list.slideToggle();
        });
        if (windowSize > 1030) {
            list.find('li .icon').click(function() {
                $(this).parent().find('.child').stop().slideToggle();
                $(this).parents('li').siblings().find('.child').slideUp();
                $(this).parents('li').siblings().find('.icon').removeClass('open');
                $(this).toggleClass('open');
            });
            child.find('li .icon-child').click(function() {
                $(this).parent().find('.third').stop().slideToggle();
                $(this).parents('li').siblings().find('.third').slideUp();
                $(this).parents('li').siblings().find('.icon-child').removeClass('open');
                $(this).toggleClass('open');
            });
        }
    }
    function sidebarFixed() {
        var sidebar = $('.sidebar'),
            sidebarWidth = sidebar.outerWidth(),
            sidebarHeight = $('.js-sidebar-list').outerHeight() + 75,
            page = $('.js-productos'),
            scrollTop = $window.scrollTop();
        if(windowSize > 1030) {
            if(page.length) {
                var start = page.offset().top + 50,
                    brand = $('.brand-container').offset().top,
                    brandBot = $('.brand-container').outerHeight(),
                    bot = brandBot + sidebarHeight + 56,
                    stop = brand - sidebarHeight,
                    left = page.offset().left + 10;
                if(scrollTop > start && scrollTop < stop) {
                    sidebar.css({
                        height: 'auto',
                        position: 'fixed',
                        top: '0',
                        left: left,
                        bottom: 'auto',
                        paddingTop: '0'
                    });
                } else if(scrollTop > stop) {
                    sidebar.css({
                        height: sidebarHeight,
                        position: 'absolute',
                        top: 'auto',
                        bottom: '0',
                        left: '10px',
                        paddingTop: '0'
                    });
                } else {
                    sidebar.css({
                        height: 'auto',
                        position: 'relative',
                        top: 'auto',
                        left: 'auto',
                        bottom: 'auto',
                        paddingTop: '50px'
                    });
                }
            }
        }
    }
    function accordeon() {
        var accordeon = $('.js-open'),
            content = $('.js-text--box'),
            padre = $('.nosotros__title');
        $('.nosotros__title').each(function() {
            $(this).append('<div class="detection"></div>');
            $('.detection').hide();
        });
        if(accordeon.length > 0) {
            if(windowSize < 740) {
                var trigger = $('.js-open'),
                    items   = $('.js-text--box');
                trigger.on('click', function(){
                    $(this).parent().find('.detection').fadeIn().delay(600).fadeOut();
                    var $this   = $(this);
                    items.stop(true, true).addClass('open');
                    if ( $this.parent().hasClass('open') ) {
                        $this.parent().siblings().removeClass('open');
                        $this.parent().removeClass('open');
                    }
                    items.slideUp(300);
                    trigger.removeClass('open');
                    var target = $this;
                    $this.parents('.nosotros__container').find('.js-text--box').stop().slideToggle(300, function(){
                        $('html, body').stop().animate({
                            'scrollTop': target.parents('.nosotros__title').offset().top - 60
                        }, 900, 'swing');
                    });
                    $this.stop().toggleClass('open');
                });
            }
        }
        accordeon.click(function() {
            $(this).toggleClass('js-close');
            $(this).parents('.nosotros__item').siblings().find('.js-open').removeClass('js-close');
        });
    }
    $('.error404').css('height', windowsHeight);
    function ocultarProducto() {
        var item = $('.js-sidebar-list .list__item');
        item.each(function() {
            $(this).find('li').parents('.list__item').show();
        });
    }
    function gallery() {
        var slide = $('.js-slider__gallery'),
            galleryTitle = $('.gallery__text .gallery__title'),
            galleryContent = $('.gallery__text .gallery__content'),
            galleryLink = $('.gallery__text .gallery__link'),
            fullscreen = $('.gallery__fullscreen');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlsContainer: $(".custom__icons"),
                prevText: '<svg><use xlink:href="#shape-icon-back" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
                start: function(slider) {
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-title'),
                        text = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-text'),
                        link = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-link');
                    galleryTitle.empty().css('opacity', 0).text(title).stop().delay(100).animate({'opacity' : 1});
                    galleryContent.empty().css('opacity', 0).text(text).stop().delay(400).animate({'opacity' : 1});
                    galleryLink.css('opacity', 0).attr('href', link).stop().delay(700).animate({'opacity' : 1});
                },
                after: function(slider) {
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-title'),
                        text = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-text'),
                        link = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('data-link');
                    galleryTitle.empty().css('opacity', 0).text(title).stop().delay(100).animate({'opacity' : 1});
                    galleryContent.empty().css('opacity', 0).text(text).stop().delay(400).animate({'opacity' : 1});
                    galleryLink.css('opacity', 0).attr('href', link).stop().delay(700).animate({'opacity' : 1});
                }
            });
        });
    }
    menuMobile();
    slide();
    buscador();
    accordeonproductos();
    smoothScroll();
    form();
    responseLightbox();
    sidebar();
    accordeon();
    ocultarProducto();
    gallery();
    /*VIDEO*/
    window.onload = function() {

        // Video
        var video = document.getElementById("video");
        if($('#video').length) {
            // Buttons
            var playButtonBig = document.getElementById("play-pause-big");
            var playButton = document.getElementById("play-pause");
            var muteButton = document.getElementById("mute");
            var fullScreenButton = document.getElementById("full-screen");
            var videoContainer = document.getElementById("video-container");
            var controlContent = document.getElementById("controls--content");

            // Sliders
            var seekBar = document.getElementById("seek-bar");
            var volumeBar = document.getElementById("volume-bar");
            // Event listener for the play/pause button
            $('#play-pause-big, #play-pause').click( function() {
                if (video.paused == true) {
                    // Play the video
                    video.play();
                    controlContent.className = "";
                    video.className = "banner__video playable";
                    // Update the button text to 'Pause'
                    playButtonBig.innerHTML = " ";
                    playButton.innerHTML = "<svg><use xlink:href='#shape-icon-pause' /></svg>";
                } else {
                    // Pause the video
                    video.pause();
                    controlContent.className = "controls--hide";
                    // Update the button text to 'Play'
                    playButtonBig.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
                    playButton.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
                }
            });
            // Change class if video is playing or pause
            video.onplay = function(e) {
                videoContainer.className = "banner onplay";
            }
            video.onpause = function(e) {
                videoContainer.className = "banner";
            }
            // Check when video end
            video.onended = function(e) {
                playButtonBig.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
                playButton.innerHTML = "<svg><use xlink:href='#shape-icon-play' /></svg>";
            };





            // Event listener for the seek bar
            seekBar.addEventListener("change", function() {
                // Calculate the new time
                var time = video.duration * (seekBar.value / 100),
                    bar = seekBar.value;
                // Update the video time
                video.currentTime = time;
                $('.seek-done').css('width', bar + '%');
                playButtonBig.innerHTML = " ";
                playButton.innerHTML = "<svg><use xlink:href='#shape-icon-pause' /></svg>";
            });
            // Update the seek bar as the video plays
            video.addEventListener("timeupdate", function() {
                // Calculate the slider value
                var value = (100 / video.duration) * video.currentTime,
                    bar = video.currentTime;

                // Update the slider value
                seekBar.value = value;
                $('.seek-done').css('width', value + '%');
            });
            // Pause the video when the slider handle is being dragged
            seekBar.addEventListener("mousedown", function() {
                video.pause();
            });

            // Play the video when the slider handle is dropped
            seekBar.addEventListener("mouseup", function() {
                video.play();
            });
            // Event listener for the mute button
            muteButton.addEventListener("click", function() {
                if (video.muted == false) {
                    // Mute the video
                    video.muted = true;

                    // Update the button text
                    $('.mute-bar span').html("<svg><use xlink:href='#shape-icon-mute' /></svg>");
                } else {
                    // Unmute the video
                    video.muted = false;

                    // Update the button text
                    $('.mute-bar span').html("<svg><use xlink:href='#shape-icon-volume' /></svg>");
                }
            });
        }
    }
})(jQuery);
