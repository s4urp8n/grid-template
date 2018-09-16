$(document).ready(function () {

    $('.header-bar__label').on('click', function () {
        $('.header-content').slideToggle(300, function () {
            $('.header-content').removeAttr('style');
        });
    });

});