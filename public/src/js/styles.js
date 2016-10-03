$(".header_image").vegas({
    delay:9000,
    timer:false,
    slides: [
        { src: "/images/slide1.jpg" },
        { src: "/images/slide2.jpg" },
    ],
    transition: [ 'slideLeft' ]
});

$(document).ready(function() {

    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
    }
});



