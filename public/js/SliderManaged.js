
$(document).ready(function(){
    
    $('.sldr').slick({
      dots: true,
      customPaging : function(slider, i) {
        var text = "no text";
        var lan = getLang();
        if (i == 0){
          text = "НАБОР 2018";
        } else {
          if (i == 1){
            text = "ГДЕ ИГРАЕМ"
          }
        }

        if (lan == undefined || lan == null) lan = "";
        
        return '<nobr class="mydots">' + text + lan +'</nobr>';
      },
      adaptiveHeight: false
    });

    var PADDING = 10;
    

    $(".sldr").width($( window ).width()-PADDING);

    $( window ).resize(function() {
        console.log("max->" + $( window ).width() + " min" + ($( window ).width()-PADDING));
        $(".sldr").width($( window ).width()-PADDING);
      
      });



    $("#btn-1rst-banner").click(function() {
      var bl = $("#s1rst-banner-last");

      if (bl.is(':visible')){
        $("#btn-1rst-banner").text("ПОДРОБНОСТИ");
        bl.slideUp();
      }else{
        $("#btn-1rst-banner").text("СКРЫТЬ ПОДРОБНОСТИ");
        bl.slideDown();
      }
      
     
    });


    $("#btn-main").click(function () {
     
      var elementClick = $(".sldr");
      var destination = $(elementClick).offset().top-250;
      console.log("l " +destination)
      // if ($.browser.safari) {
      //     $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость
      // } else {
          $('html').animate({ scrollTop: destination }, 1100);
      // }
      return false; 
    });

  });