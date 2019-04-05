$(document).ready(function () {

    $('#dismiss-activation-email-notif').click(function() {
        $.getJSON(APP_URL + 'dismiss-activation-email', function(result) {
            $('#activation-email-notif').hide();
        });
    });

    $('#dismiss-upgrade-premium-notif').click(function() {
        $.getJSON(APP_URL + 'dismiss-upgrade-premium', function(result) {
            $('#upgrade-premium-notif').hide();
        });
    });

    $('#resend-activation-code').click(function(e) {
        e.preventDefault();

        $('#resend-activation-code').button('loading');
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
  
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: APP_URL + 'resend-activation', // the url where we want to POST
            data: [], // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true,
            success: function (result) {
  
                if(result.status){
                  $('#resend-activation-code-sent-modal').modal('show'); 
                }else{
                  alert(result.message);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus);
            }
        });

        $('#resend-activation-code').button('reset');
    });

    // Force scroll to top
    $(this).scrollTop(0);

    // Fade in .navbar
    $(function () {
        $(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
            if ($(this).scrollTop() > 1) {
                $('#animatedheader').addClass('navbar-shrink');

            } else {
                $('#animatedheader').removeClass('navbar-shrink');
            }
        });
    });

    $(function () {
        $("[data-toggle=popover]").each(function (i, obj) {

            $(this).popover({
                html: true,
                content: function () {
                    var id = $(this).attr('id')
                    return $('#popover-content-' + id).html();
                }
            });

        });
    });

    // Show Menu on Book
    $(window).bind('scroll', function () {
        var navHeight = $(window).height() - 100;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    // Floating labels
    var handleInput = function (el) {
        if (el.val() != "") {
            el.addClass('edited');
        } else {
            el.removeClass('edited');
        }
    }

    $('body').on('keydown', '.form-md-floating-label .form-control', function (e) {
        handleInput($(this));
    });
    $('body').on('blur', '.form-md-floating-label .form-control', function (e) {
        handleInput($(this));
    });



    $('.partner-logo-company').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 6
            },
            1000: {
                items: 6
            }
        }
    });

    $('.find-topic-slider, .related-book').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        dots: false,
        navText: ["<i class='material-icons'>chevron_left</i>", "<i class='material-icons'>chevron_right</i>"],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });

    $('.expert').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        navText: ["<i class='material-icons'>chevron_left</i>", "<i class='material-icons'>chevron_right</i>"],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 4
            }
        }
    });

    $('.upcoming-events').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        navText: ["<i class='material-icons'>chevron_left</i>", "<i class='material-icons'>chevron_right</i>"],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $('.blog-header').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    
    $('.testimoni-slider').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('.profile-complete').each(function (i) {
        $(this).appear(function () {
            $(this).animate({opacity: 1, left: "0px"}, 1200);
            var b = $(this).find(".wrapper span").attr("data-width");
            $(this).find("span").animate({
                width: b + "%"
            }, 1700, "swing");
        });
    });

    $('.form-md-floating-label .form-control').each(function () {
        if ($(this).val()) {
            $(this).addClass('edited');
        }
    });

    /* ========================================================================
     Tooltip
     ========================================================================== */
    $('[data-toggle="tooltip"]').tooltip();


});
