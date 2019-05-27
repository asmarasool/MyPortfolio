$(document).ready(function () {

    $('#slides').superslides({
        animation: 'fade',
        play: 4000,
        pagination: false,
    });

    var typed = new Typed(".typed", {
        strings: ["Software Developer.", "Student."],
        typeSpeed: 90,
        loop: true,
        showCursor: false,
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            938: {
                items: 4
            }
        }
    });




    $("[data-fancybox]").fancybox();


    //Sticky Navbar *************************************************
    const nav = $("#navigation");
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navigation");
    var sticky = navbar.offsetTop;
    var body = $("body");

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            body.css("padding-top", nav.outerHeight() + "px");
            navbar.classList.add("sticky")
        } else {
            body.css("padding-top", 0);
            navbar.classList.remove("sticky");
        }
    }

    
    /* Navigation scroll **********************************/
    //makes a smoth move to the section scrolling to
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });


});
