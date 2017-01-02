$( document ).ready(function() {
    $('.list-skills', 'body').removeClass('activ');
    windowsWidth = $(window).width();
    windowsHeight = $( window ).height();
    headerTop = $('header').offset().top;

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

    $('.menu-item a, .scrollBot a').on('click', function(e) { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 1500; // Durée de l'animation (en ms)
        var match = page.match("\#(.+)");
        if (page.match("\#(.+)")) {
            e.preventDefault();
            $('html, body').animate( {
                scrollTop: $(page).offset().top
            }, speed, 'swing' ); // Go
        }

	});

    $(window).on('scroll', function(){
        windowsTop = $(window).scrollTop();
        skills = $('#skills').offset().top;

        if (windowsTop >= headerTop) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }

        if (windowsTop >= skills) {
            $('.list-skills', 'body').addClass('activ');
            $('.list-skills.activ .progress-bar .bar').each(function(i,e){
                var width = $(this).data('width');
                $(this).animate({
                    width: width+'%'
                }, 1000);
            });
        }



    });

});
