
  $(function () {
    'use strict'

    // MENU
    $('.navbar .nav-link').on('click',function(){
        $(".navbar-collapse").collapse('hide');
    });

    $(window).on('scroll', function() {     
                                
        /*----------------------------------------------------*/
        /*  Navigtion Menu Scroll
        /*----------------------------------------------------*/    
        
        var b = $(window).scrollTop();
        
        if( b > 72 ){       
            $(".navbar").addClass("scroll");
        } else {
            $(".navbar").removeClass("scroll");
        }               
    });

    // TESTIMONIALS CAROUSEL
    $('#testimonials-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:2,
            },
            1200:{
                items:3,
                loop:false
            }
        }
    })

     // TESTIMONIALS CAROUSEL
     $('#work-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:2,
            },
            1200:{
                items:3,
                loop:false
            }
        }
    })

    // SMOOTHSCROLL
    $(function() {
      $('.navbar .nav-link').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
        event.preventDefault();
      });
    });   
     
  });

  function sendMail() {
    var params = {
        name: document.getElementById("cf-name").value,
        email: document.getElementById("cf-email").value,
        message: document.getElementById("cf-message").value,
    };

    const serviceID = "service_5mdj7cn";
    const templateID = "template_3ociqaw";

    emailjs.send(serviceID, templateID, params)
        .then(function() {
            console.log("Email sent successfully!");
            // Show success message using SweetAlert
            swal("Success!", "Your Message has been Send.", "success");
        })
        .catch(function(error) {
            // Show error message using SweetAlert
            swal("Error!", "Failed to send email: " + error, "error");
        });
}
