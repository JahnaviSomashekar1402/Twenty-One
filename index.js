$(document).ready(function(){

// Featured Product
$("#featured-products .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000 : {
            items: 5
        }
    }
});

});

//Product Quantity
let $qtyplus = $(".qty .qty_plus");
let $qtyminus = $(".qty .qty_minus");
let $qtyinput = $(".qty .qty_input");

//Click on qty plus button
$qtyplus.click(function(e){
    if($qtyinput.val()>=1 && $qtyinput.val()<=9){
        $qtyinput.val(function(i,oldval){
            return ++oldval;
        });
    }
});

//Click on qty minus button
$qtyminus.click(function(e){
    if($qtyinput.val()>1 && $qtyinput.val()<=10){
        $qtyinput.val(function(i,oldval){
            return --oldval;
        });
    }
});
