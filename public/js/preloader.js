jQuery(document).ready(function($) {

    window.onload = new function() { $('#preloader').fadeOut('slow',function(){
        $(this).remove();});};
    // $(window).on('load',function(){
    //     $('#preloader').fadeOut('slow',function(){
    //         $(this).remove();});
    //     // $('#preloader').css("display","none");
    // });

});