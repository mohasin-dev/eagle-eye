
/*================================
                Services
    =================================*/
    $(function(){ //short version of document.ready
        //animate on scroll
        new WOW().init();
    });

    /*================================
                Work
    =================================*/
    $(document).ready(function() {
        //magnific-popup
        $('#work').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    /*================================
                Testimonial
    =================================*/
    $(document).ready(function() {
        //owl-carousel
        $('#customers-testimonial').owlCarousel({
            items: 1,
            dots: true,
            //nav: true,
            autoplay: true,
            smartSpeed: 700,
            loop: true,
            autoplayHoverPause: true,
        });
    });


    /*================================
                Clients
    =================================*/
    $(document).ready(function() {
        //owl-carousel
        $('#clients-list').owlCarousel({
            items: 6,
            autoplay: true,
            smartSpeed: 700,
            loop: true,
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items: 1
                },
                480:{
                    items: 3
                },
                768:{
                    items: 5
                },
                992:{
                    items: 6
                },
            }
        });
    });

    //Close mobile menu onclick
    // $(function(){
    //     $(".navbar-collapse ul li a").on("click touch", function(){
    //         $(".navbar-toggler").click();
    //     });
    // });


    $( function() {
    if(window.innerWidth <991)
        {
            $("#services .container").addClass('container-fluid');
            $("#services .container").removeClass('container');
            $("#subscribe .container").addClass('container-fluid');
            $("#subscribe .container").removeClass('container');

            $("#main-footer .container").addClass('container-fluid');
            $("#main-footer .container").removeClass('container');
        }
    });



    $( function() {
        if(window.innerWidth <767)
            {
                $("#about .container").addClass('container-fluid');
                $("#about .container").removeClass('container');
            }
        });

/*======================================
        Show hide scroll to top button
========================================*/
        // $(window).scroll(function() {
        //     if ($(this).scrollTop()<200){
        //         $('#back-to-top').hide(1000);
        //      }
        //     else{
        //       $('#back-to-top').show(1000);
        //      }
        //  });


/*================================
        Scroll to top
=================================*/
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();

//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });

$(document).ready(function() {
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#back-to-top').fadeIn(1200);
        }else{
            $('#back-to-top').fadeOut(1200);
        }
    });
    $("#back-to-top").click(function(){
        $('html, body').animate({scrollTop: 0}, 1200);
    });
});
