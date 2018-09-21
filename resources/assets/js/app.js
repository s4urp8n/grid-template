$(document).ready(function () {

    /**
     * Remove no-js class
     */
    $('html').removeClass('no-js');

    /**
     * Mobile menu animation fix
     */
    $('.header-bar__label').on('click', function () {
        $('.header-content').slideToggle(300, function () {
            if ($('.header-content').is(':hidden')) {
                $('.header-content').removeAttr('style');
            }
        });
    });

    /**
     * Shuffles array in place.
     * @param {Array} a items An array containing the items.
     */
    function shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    }

    function getAbsoluteUrl(url) {
        var a;
        if (!a) a = document.createElement('a');
        a.href = url;
        return a.href;
    }

    /**
     * Change backgrounds
     */
    $('.backgroundChanger').each(function () {

        var that = $(this);

        var images = that.attr('data-backgrounds');

        if (images) {

            that.removeAttr('style');

            images = JSON.parse(images);

            shuffle(images);

            that.backstretch(images, {
                duration: 5000,
                transition: 'fade',
                transitionDuration: 'slow'
            });

        }

    });

    /**
     * Catalog mobile navigation
     */
    $('.catalog .dropdown-select').on('change', function () {
        var option = $(this).find('option:selected');
        var url = option.attr('href');
        window.location.href = url;
    });

    /**
     * Catalog mobile navigation current url fix
     */

    /**
     * Change urls to absolute
     */
    var currentURL = window.location.href;
    $('.catalog .dropdown-select option').each(function () {

        $(this).removeAttr('selected');
        $(this).attr('href', getAbsoluteUrl($(this).attr('href')));

        if ($(this).attr('href') == currentURL) {
            $(this).attr('selected', 'selected');
        }
    });

});