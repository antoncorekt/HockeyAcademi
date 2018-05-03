$(function() {
    $('body').on('click', '.pagination a', function(e) {
       var url =  byClickAjax(e);
       getArticles(url);
       window.history.pushState("", "", url);
    });

    function getArticles(url) {
        $.ajax({
            url : url
        }).done(function (data) {
            $('.articles').html(data);
        }).fail(function () {
            alert('Articles could not be loaded.');
        });
    }

    function byClickAjax(e){
        e.preventDefault();


        $('#load').append('<img class="loading-ic" src="/images/loading.gif" alt="loading"  />');
        $('#load .row').css('visibility', 'hidden');

        var url = $(this).attr('href');
        return url;

    }
});