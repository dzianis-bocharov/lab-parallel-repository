function error_window_open(item){
    if($('#error_box').hasClass('error_window_normal')) {
        $('#error_box').removeClass('error_window_normal');
    }
    if(!$('#error_box').hasClass('error_window_active')) {
        $('#error_box').addClass('error_window_active');
    }
    $('#error_message').append(item);
};
function error_window_close() {
    if($('#error_box').hasClass('error_window_active')) {
        $('#error_box').removeClass('error_window_active');
    }
    if(!$('#error_box').hasClass('error_window_normal')) {
        $('#error_box').addClass('error_window_normal');
    }
};
export {error_window_open, error_window_close};