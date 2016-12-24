$( document ).ready(function() {

    windowsWidth = $(window).width();
    windowsHeight = $( window ).height();
    headerTop = $('header').offset().top;

    $('#particles-js').css('height', windowsHeight);

    if (windowsWidth <= 768) {
        $('.btn-menu').addClass('menu-responive');
    } else {
        $('.btn-menu').removeClass('menu-responive');
    }

    $('.article-link a').on('click', function(e) {
        console.log($(this).parent());
        if ($(this).parent().hasClass('show')) {
            $('.article-link').removeClass('show');
        } else {
            $('.article-link').removeClass('show');
            $(this).parent().addClass('show');
        }
        e.preventDefault();
    });

    $(window).on('scroll', function(){
        windowsTop = $(window).scrollTop();

        if (windowsTop >= headerTop) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
    });

});
