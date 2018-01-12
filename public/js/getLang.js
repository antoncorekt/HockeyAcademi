/**
 * Created by Nadine on 12.01.2018.
 */

/**
 * Function for getting lang value and showing it at lang dropdownlist
 */
function getLang(){
    let str = $(location).attr('href');
    if (str.search("ru") > -1){
        $("#flag").attr("src","../public/images/ru.png");
        $('#selected').text("РУССКИЙ");
    }
    else if (str.search("en") > -1){
        $("#flag").attr("src","../public/images/en.ico");
        $('#selected').text("ENGLISH");
    }
    else if (str.search("pl") > -1){
        $("#flag").attr("src","../public/images/pl.ico");
        $('#selected').text("POLSKI");
    }
}
