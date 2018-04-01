<div class="row where-text-1 article" id="where-photos"  style="overflow: hidden;">
    <div class="col-lg-9 col-sm-9 col-xs-9">
        <div  class="col-lg-6 col-sm-6 col-xs-9" style=" float: left;">
            <p class="blog-date"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}" class="back-link">{{ trans('messages.BackToBlog') }}</a></p>
            @if(is_null($post->video_title))
                <img id="img-where" src="{{$post->img_title}}" alt="{{$post->title}}"/>
            @else
                <iframe  class="video-blog" src="{{$post->video_title}}" style="border: 0;" allowfullscreen></iframe>
            @endif

        </div>
        <p class="blog-date">{{$post->create_date}}</p>
        <h3 class="h1-team-page" id="h3-team">{{$post->title}}</h3>
        <?php
            $article = file_get_contents($post->text);
            echo $article;
        ?>
    </div>
</div>