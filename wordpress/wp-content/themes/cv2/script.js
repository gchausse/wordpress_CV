
jQuery.noConflict();

(function($) {

    $(document).ready(function() {
        $('#button').click(function(){

            if ($('#nav-bar').css('display') == 'flex'){
                $('#nav-bar').css("display", "none");
            }else{
                $('#nav-bar').css("display", "flex");
            }
        });
    });


})(jQuery);
