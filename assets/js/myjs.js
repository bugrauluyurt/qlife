/* Write here your custom javascript codes */
jQuery(document).ready(function() {
    $('.logo-attach-2').hide();
    if ($.browser.desktop || $(window).width() > 1023) {
        if ($('#dna-image').hasClass('hidden')) {
            $('#dna-image').removeClass('hidden');
        }
        $(window).scroll(function() {
            if ($(this).scrollTop()>0)
             {
                $('.logo-attach-1').hide();
                $('.logo-attach-2').show();
             } else {
                $('.logo-attach-1').show();
                $('.logo-attach-2').hide();
             }
        });
    } else {
        $('#dna-image').addClass('hidden');
    }

    $(".typed-text").typed({
        strings: ["7436", "QGEN"],
        typeSpeed: 800,
        loop:true,
        showCursor: false
    });
});