/*内部リンクの動き*/
$(function () {
    $('a[href^="#"]').click(function () {
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 110;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});

(function ($) {
    $(function () {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function () {
            if ($(window).scrollTop() > 250) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
    });
})(jQuery);

$(document).ready(function () {
    $(".sec7--drop-button").on("click", function (event) {
        event.preventDefault();
        var $dropDown = $(this).next(".sec7--drop-down");
        $dropDown.slideToggle();

        var $image = $(this).find("img");
        $image.toggleClass("rotate"); // Just toggle the class without checking
    });
});
