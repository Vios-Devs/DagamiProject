$(document).ready(function(){


    $("#showBtn").on('click', function(){
        $(this).css({
            'z-index': '0'
        })
        $("#side-nav").css({
            'height': '100%'
        })
    })

    $(".closeBtn").on('click', function(){
        $("#side-nav").css({
            'height': '0',
            'transition': '0.3s ease-in-out'
        })
    })


    




    // DARK MODE

        // $("header").on("click", function(){
        //     $("header").css({
        //         'background': '#111'
        //     });
            
        //     $("body").css({
        //         'background': '#111'
        //     });
        //     $("header .header-container .nav-section .ul li a").css({
        //         'color': '#fff'
        //     });
        //     $("h1").css({
        //         'color': '#ccc'
        //     });
        //     $("h2").css({
        //         'color': '#ccc'
        //     });
        //     $("p").css({
        //         'color': '#ccc'
        //     });
        //     $(".container").css({
        //         'background': '#111'
        //     })
            
        //     $("#most-visit-content").css({
        //         'background': '#111'
        //     });

        //     $("footer").css({
        //         'background': '#111'
        //     });

            

        // });

       


        // SLIDER //

    //     $('.slider').slick({
    //         dots: false,
    //         infinite: true,
    //         speed: 500,
    //         slidesToShow: 3,
    //         slidesToScroll: 1,
    //         autoplay: true,
    //         autoplaySpeed: 2000,
    //         arrows: true,
    //         responsive: [{
    //           breakpoint: 600,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 1
    //           }
    //         },
    //         {
    //            breakpoint: 400,
    //            settings: {
    //               arrows: false,
    //               slidesToShow: 1,
    //               slidesToScroll: 1
    //            }
    //         }]
    //     });
    // });

    
})
