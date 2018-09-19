$(document).ready(function () {

    $('html').removeClass('no-js');

    $('.header-bar__label').on('click', function () {
        $('.header-content').slideToggle(300, function () {
            if ($('.header-content').is(':hidden')) {
                $('.header-content').removeAttr('style');
            }
        });
    });

    $('.content').html('width=' + $(window).width() + "<br>height=" + $(window).height());

});