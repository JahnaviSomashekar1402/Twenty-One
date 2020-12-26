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
                items: 4
            }
        }
    });

    $("#related-products .owl-carousel").owlCarousel({
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
                items: 4
            }
        }
    });
    
    });
    
    //Product Quantity
    let $qtyplus = $(".qty .qty_plus");
    let $qtyminus = $(".qty .qty_minus");
    // let $qtyinput = $(".qty .qty_input");
    
    //Click on qty plus button
    $qtyplus.click(function(e){
        let $qtyinput = $('.qty_input[data-id='${$(this).data("id")}']');
        if($qtyinput.val()>=1 && $qtyinput.val()<=9){
            $qtyinput.val(function(i,oldval){
                return ++oldval;
            });
        }
    });
    
    //Click on qty minus button
    $qtyminus.click(function(e){
        let $qtyinput = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($qtyinput.val()>1 && $qtyinput.val()<=10){
            $qtyinput.val(function(i,oldval){
                return --oldval;
            });
        }
    });
    
    //select size
    $('.size-btn').click(function(e) {
    $('.size-btn').removeClass('active1');
    $(this).addClass('active1');
     });

