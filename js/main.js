$(document).ready(function () {
    document.getElementById("year").innerHTML = new Date().getFullYear();

    $('.btn').click(function () {
        if ($(this).hasClass('open')) {
            $('.signin').slideUp("slow");
            $(this).removeClass('open');
        } else {
            $('.signin').slideDown("slow");
            $(this).addClass('open');
        }
    });

    $('.remember').click(function () {
        $('.d-none').css('display', 'block');
        $('.enter').css('display', 'none');
    });

    $('.pass').click(function () {
        $('.enter').css('display', 'block');
        $('.d-none').css('display', 'none');
    })

    $('.filter li').click(function () {
        var type = $(this).data('type');
        $('.type_wrapper i').each(function () {
            $(this).css('display', 'none');

            if ($(this).data('typ') == type) {
                $(this).css('display', 'block');
            }
        })
    })
});
