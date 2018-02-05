@extends('layouts.main')
@section('title', 'Hockey Academy Blog')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>
@endsection
<style>
    body {
        background-image: none;
        background-color: white !important;
    }
</style>
@section('content')
    <div class="container-fluid bg-1 blog-1">
        <img src="../public/images/blog_img.png"/>
        <div class="row" id="blog-text">
            <h1 class="h1-main-page h1-about" >БЛОГ ХОККЕЙНОЙ</h1>
            <h1 class="h1-main-page h1-about">АКАДЕМИИ</h1>
        </div>
    </div>
    <div class="container-fluid bg-2">
        <div class="row blog-text">
            @foreach($articles as $article)
                <div class="row where-text-1" id="where-photos">
                    <div class="col-lg-5 col-md-6 col-sm-5 col-xs-9">
                        @if(is_null($article->video_title))
                            <img id="img-where" src="{{$article->img_title}}"/>
                        @else
                            <iframe  class="video-blog" src="{{$article->video_title}}" frameborder="0" allowfullscreen></iframe>
                        @endif

                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-9">
                        <p class="blog-date">{{$article->create_date}}</p>
                        <h3 class="h1-team-page" id="h3-team">{{$article->title}}</h3>
                        <p id="team-text-p">
                            <?php
                            echo \App\ListOfBlog::getShortText($article);
                            ?>
                        <p></p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-post/'.$article->idPText) }}"
                           data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                            РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                        </a>

                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row pages" style="text-align: center">
            <p>
                <a href="#" class="num-page">&#60;</a>
                <a href="#" class="num-page">1</a>
                <a href="#" class="num-page">2</a>
                <a href="#" class="num-page">...</a>
                <a href="#" class="num-page">12</a>
                <a href="#" class="num-page">&#62;</a>
            </p>
        </div>
    </div>
    <div class="modal fade" id="modalArt" tabindex="-1" role="dialog" aria-labelledby="modalArt" style="color:black">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
