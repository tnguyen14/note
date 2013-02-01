jQuery(document).ready(function ($) {
    
    // Change the note title upon focus
    var default_title = $('.title').html();
    $('.title').focus(function (e) {
        if ($(this).html() === default_title) {
            $(this).removeClass('default');
            $(this).html('');
        }

    });
    
    $('.title').blur(function (e) {
        if ($(this).html() === '' || $(this).html() === '<br>') {
            $(this).addClass('default');
            $(this).html(default_title);
        }
        document.title = $(this).html();

    });
    
    
});