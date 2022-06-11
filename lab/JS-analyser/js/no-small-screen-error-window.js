function no_small_screen_error_window_for_unload () {
    if($(window).width() > 1200) {
        $('.no-small-screen-error-window-box').hide();
        $('#mainContainer').show();
    }
    else {
        $('.no-small-screen-error-window-box').show();
        $('#mainContainer').hide();
    }
    
};

function no_small_screen_error_window_for_resize () {

    $(window).resize(()=>{
        if($(window).width() > 1200) {
            $('.no-small-screen-error-window-box').hide();
            $('#mainContainer').show();
        }
        else {
            $('.no-small-screen-error-window-box').show();
            $('#mainContainer').hide();
        }     
    });

};

export {no_small_screen_error_window_for_unload, no_small_screen_error_window_for_resize};