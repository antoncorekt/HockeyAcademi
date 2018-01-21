
$(document).ready(function () {
    let el = document.getElementById("video");
    var flag = true;

    function start_snow(){
        if (flag){
            init();
            flag = false;
        }
    }

    if (el == null || el == undefined){
        console.log("Element video not found")
        $(".cont").css("display", "block");
        start_snow();
    }

    $("#video-tag").on('ended', function () {
        $(".cont").css("display", "block");
        $("#video").remove();
        start_snow();
    });

    $(".video-skip").click(function(){
        $(".cont").css("display", "block");
        $("#video").remove();
        start_snow();
    })
});