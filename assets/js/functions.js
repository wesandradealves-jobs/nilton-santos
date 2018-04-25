jQuery(document).ready(function () {
    $('.carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 140,
        itemMargin: 5,
        prevText:"",
        nextText:"",
        asNavFor: '.slide'
    });
    $('.slide').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        prevText:"",
        nextText:"",
        slideshow: false,
        sync: ".carousel"
    });
    $('.webdoor').flexslider({
        animation: "fade",
        controlNav: true,
        directionNav: false
    });  
    $('.produtos').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 260,
        itemMargin: 30,
        prevText:"",
        nextText:"",
        controlNav:false
    });
});

function mobileNavigation() {
    $("#wrap").children("nav").first().toggleClass("toggle");
}



