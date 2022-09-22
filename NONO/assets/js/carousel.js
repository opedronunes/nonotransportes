/**
 * CHAMADA DA FUNCTION
 */
$(document).ready(function(){
    /**
     * CONFIG CAROUSEL
     */
    $('#client').owlCarousel({
        loop:true,
        margin:5,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items: 3
            },
            500:{
                items:5
            }
        }
    })

    $('.equipamentos').owlCarousel({
        loop:true,
        margin:5,
        autoWidth:true,
        autoplay:true,
        autoplayTimeout:5000
    })   
    
    $('#carolsel1').owlCarousel({
        loop:true,
        autoplay:true,
        dots: false,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items: 1
            },
        }
    })

});
    

