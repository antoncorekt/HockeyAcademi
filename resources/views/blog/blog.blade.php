@extends('layouts.main')

@section('header')
    <meta name="description" content="Европейская Хоккейная Академия в Польше.
        Блог Хоккейной академии - здесь вы узнаете наши крайние новости и другие интересные события. Летние лагеря в Крынице-Здруй! SELECTS НАБОР В CАН-СЕБАСТЬЯН!">
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/paginateAjax.js')}}"></script>
    <title>East EHL - Blog</title>
    <style>
        body {
            background-image: none;
            background-color: white !important;
        }
    </style>

@endsection

@section('content')
    <div class="container-fluid bg-1 blog-1">
        <img src="/../public/images/blog_img.png" alt="hockey-player-blog"/>
        <div class="row" id="blog-text">
            <h1 class="h1-main-page h1-about" >{{ trans('messages.blogTitle') }}</h1>
            <h1 class="h1-main-page h1-about">{{ trans('messages.blogTitle1') }}</h1>
        </div>
    </div>
    <div class="container-fluid bg-2">
        <div class="row blog-text">
            @if (isset($articles) && count($articles) > 0)
                <section class="articles">
                    @include('blog.listOfArticles')
                </section>
            @endif
                @if (isset($post))
                    <section class="articles">
                        @include('blog.article')
                    </section>
                @endif
        </div>

    </div>
    @include('layouts.footer')
@endsection