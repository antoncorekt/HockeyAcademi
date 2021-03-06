<div id="load" style="position: relative;">

    @foreach($articles as $article)
        <div class="row where-photos1 where-text-1">
            <div class="col-lg-5 col-md-6 col-sm-5 col-xs-9">
                @if(is_null($article->video_title))
                    <img id="img-where" src="{{$article->img_title}}" alt="{{$article->title}}"/>
                @else
                    <iframe  class="video-blog" src="{{$article->video_title}}" style="border: 0;" allowfullscreen></iframe>
                @endif

            </div>
            <div class="col-lg-4 col-sm-6 col-xs-9">
                <p class="blog-date">{{$article->create_date}}</p>
                <h3 class="h3-team h1-team-page">{{$article->title}}</h3>
                <p class="team-text-p">
                <?php
                echo \App\ListOfBlog::getShortText($article);
                ?>
                <p>
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/post/'.$article->idPText) }}"
                   data-toggle="modal" data-target="#modalArt" class="btn blog-a">
                    {{ trans('messages.show_more') }}
                </a>

                </p>
            </div>
        </div>
    @endforeach

</div>
<div class="row pages" style="text-align: center">
    <p>
        {{ $articles->links() }}
    </p>
</div>
<script>
    $(function() {
        $('body').on('click', '.blog-a', function(e) {
            e.preventDefault();


            $('#load').append('<img class="loading-ic" src="/images/loading.gif"  alt="loading"/>');
            $('#load .row').css('visibility', 'hidden');

            var url = $(this).attr('href');
            getArticles(url);
            window.history.pushState("", "", url);
        });

        function getArticles(url) {
            $.ajax({
                method: 'GET', // Type of response and matches what we said in the route
                url:url, // This is the url we gave in the route
               // data: {'id' : 1}, // a JSON object to send back
                success: function(response){ // What to do if we succeed
                   // console.log(response);
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }

            }).done(function (data) {
                $('.articles').html(data);
            }).fail(function () {
                alert('Article could not be loaded.');
            });
        }
    });
</script>
