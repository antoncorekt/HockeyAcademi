
$(document).ready(function(){
    
    $('.sldr').slick({
      dots: true,
      customPaging : function(slider, i) {
        var text = "no text";
        var lan = getLang();
        if (i === 0){
          text = "НАБОР 2018";
        } else {
          if (i === 1){
            text = "ГДЕ ИГРАЕМ"
          }
        }

        if (lan === undefined || lan == null) lan = "";
        
        return '<nobr class="mydots">' + text + '</nobr>';
      },
      adaptiveHeight: false
    });

    var PADDING = 10;
    
    // $(".slick-dots").css("bottom", $(".sldr").height()); sq-text-1

    $(".sldr").width($( window ).width()-PADDING);

    // $( ".sq-text-1" ).append( $( ".slick-dots" ) );

    $( window ).resize(function() {
       
        $(".sldr").width($( window ).width()-PADDING);
       // $(".slick-dots").css("bottom", $(".sldr").height()+65);
      });



    $("#btn-1rst-banner").click(function() {
      var bl = $("#s1rst-banner-last");

      if (bl.is(':visible')){
        $("#btn-1rst-banner").text("ПОДРОБНОСТИ");
        bl.slideUp();
      }else{
        $("#btn-1rst-banner").text("ПОДРОБНОСТИ");
        bl.slideDown();
      }
      
     
    });


    $("#btn-main").click(function () {
     
      var elementClick = $(".sldr");
      var destination = $(elementClick).offset().top-250;

      $('html, body').animate({ scrollTop: destination }, 1100);

    });

  });