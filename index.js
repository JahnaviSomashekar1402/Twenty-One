$(document).ready(function(){

// Featured Product
$("#featured-products .owl-carousel").owlCarousel({
    loop:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

});