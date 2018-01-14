

$(document).ready(function () {
    $("#video-tag").on('ended', function () {
        $(".cont").css("display", "block");
        $("#video").css("display", "none");
    });

    $(".video-skip").click(function(){
        $(".cont").css("display", "block");
        $("#video").css("display", "none");
    })
});