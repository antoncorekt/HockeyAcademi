<div class="row where-text-1 article" id="where-photos">
    <div class="col-lg-5 col-md-6 col-sm-5 col-xs-9">
        <p class="blog-date"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}" class="back-link">{{ trans('messages.BackToBlog') }}</a></p>
        @if(is_null($post->video_title))
            <img id="img-where" src="{{$post->img_title}}" alt="{{$post->title}}"/>
        @else
            <iframe  class="video-blog" src="{{$post->video_title}}" frameborder="0" allowfullscreen></iframe>
        @endif

    </div>
    <div class="col-lg-4 col-sm-6 col-xs-9">
        <p class="blog-date">{{$post->create_date}}</p>
        <h3 class="h1-team-page" id="h3-team">{{$post->title}}</h3>
        <p id="team-text-p">
        <?php
            $article = iconv('CP1251', 'UTF-8', file_get_contents($post->text));
            echo $article;
        ?>

    </div>
</div>