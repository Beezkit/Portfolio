$( document ).ready(function() {

    var menuOpen = false;

    $('.list-skills', 'body').removeClass('activ');
    windowsWidth = $(window).width();
    windowsHeight = $( window ).height();

    $('#particles-js').css('height', windowsHeight);

    if (windowsWidth <= 768) {
        $('.btn-menu').addClass('menu-responive');
    } else {
        $('.btn-menu').removeClass('menu-responive');
    }

    $('.article-link > a').on('click', function(e) {
        var heightThis = $(this).parent().closest('.article-thumbnail').outerHeight(true);
        if ($(this).parent().hasClass('show')) {
            $('.article-link').removeClass('show');
        } else {
            $('.article-link').removeClass('show');
            $(this).parent().addClass('show');
        }
        e.preventDefault();
    });

    $('.btn-menu').on('click', function() {

        if (menuOpen === false) {
            $('nav').animate({
                right: "0px"
            }, function(){
                $('.overlay').fadeIn('fast');
            });

            menuOpen = true;
        } else if (menuOpen === true) {
            $('nav').animate({
                right: "-300px"
            }, function(){
                $('.overlay').fadeOut('fast');
            });

            menuOpen = false;
        }
    });

    $('.overlay').on('click', function() {
        $('.btn-menu').trigger('click');
    });

    $('.menu-item a, .scrollBot a').on('click', function(e) { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 1500; // Durée de l'animation (en ms)
        var match = page.match("\#(.+)");
        if (page.match("\#(.+)")) {
            e.preventDefault();
            $('html, body').animate( {
                scrollTop: $(page).offset().top
            }, speed, 'swing', function(){
                if (menuOpen === true) {
                    $('nav').animate({
                        right: "-300px"
                    }, function(){
                        $('.overlay').fadeOut('fast');
                    });

                    menuOpen = false;
                }
            } ); // Go
            if (e.target.closest('.scrollBot')) {
                $('li.menu-item').removeClass('current-menu-item');
                $('li.menu-item-65').addClass('current-menu-item');
            } else {
                $('li.menu-item').removeClass('current-menu-item');
                $(this).closest('li').addClass('current-menu-item');
            }
        }
	});

    $(window).on('scroll', function(){
        if ($('body').hasClass('home')) {
            windowsTop = $(window).scrollTop();
            skills = $('#skills').offset().top;
            aboutMe = $('#aboutme').offset().top - windowsTop;
            portfolio = $('#portfolio').offset().top;
            exp = $('#exp').offset().top;
            position = $('#aboutMe, #skills').offset().top - windowsTop;

            if (windowsTop >= skills) {
                $('.list-skills', 'body').addClass('activ');
            }
        }
    });

    $('#contact .form-group input, #contact .form-group textarea').on('click, focus', function(e) {
        var parent = $(this).closest('.form-group');

        if (parent.hasClass('activ')) {
            $(parent).removeClass('activ');
        } else {
            $('#contact .form-group').removeClass('activ');
            $(parent).addClass('activ');
        }

    });

    $('#contact .form-group input, #contact .form-group textarea').on('blur', function() {
        $('#contact .form-group').removeClass('activ');
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        dots: false,
        autoPlay: 1000, //Set AutoPlay to 1 seconds
        items: 2,
        mouseDrag: false,
        margin: 20,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1
            },
            768 : {
                items: 2
            }
        }
    });

    $('.owl-carousel .item img').on('click', function(){
        $.fancybox({
            href : $(this).attr('src'),
            helpers : {
                overlay: {
                    css: {'background': 'rgba(0, 0, 0, 0.8)'} // or your preferred hex color value
                } // overlay
            }
        });
    });

});
