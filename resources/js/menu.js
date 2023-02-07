$(document).ready(function() {
    $('.hamburger').on('click', function() {
        that = $(this).parent();
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
        } else {
            $(this).addClass('is-active');
        }
        if ($('.main-menu').is(':visible')) {
            $('.main-menu').slideUp();
        } else {
            $('.main-menu').slideDown();
        }
    });
    $('.expand').on('click', function() {
        var exp = $(this),
        that = $(this).parent();
        if (that.next().is(':visible')) {
            exp.removeClass('flip');
            that.removeClass('clicked');
            that.next().slideUp();
        } else {
            exp.addClass('flip');
            that.addClass('clicked');
            that.next().slideDown();
        }
    });
    var resize = 0;
    $(window).resize(function() {
        if ($(window).outerWidth() > 1023) {
            window.resize = 1;
            $('.main-menu').css('display', 'block');
            $('.expand').removeClass('flip');
            $('.has-sub-menu').removeClass('clicked');
            $('.main-menu ul li ul').css('display', 'none');
        } else {
            if (window.resize == 1) {
                $('.hamburger').removeClass('is-active');
                $('.main-menu').css('display', 'none');
                window.resize = 0;
            }
        }
    });
});
