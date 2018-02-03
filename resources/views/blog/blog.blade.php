@extends('layouts.main')
@section('title', 'Hockey Academy Blog')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
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
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-6 col-sm-5 col-xs-9">
                    <iframe  class="video-blog" src="https://www.youtube.com/embed/6cOoiAoa2CY" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">20/10/2017</p>
                    <h3 class="h1-team-page" id="h3-team">Питерский СКА в Крынице-Здруй</h3>
                    <p id="team-text-p">
                        Место для Академии было выброно не случайно:
                        Материально техническая база, природный ланшафт,
                        целебные питьевые источники.
                        Все это соответствует даже таким грандам и звездам Российского хоккея как
                        Питерский СКА. Ну и что еще делает очень привлекательным нашу
                        Академию, так это территориальная близость
                    <p></p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-krynica') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                        РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-9">
                    <img id="img-where" src="../../images/Selects_Hockey_2_large.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">31/12/2017</p>
                    <h3 class="h1-team-page" id="h3-team">SELECTS НАБОР В ИСПАНИИ</h3>
                    <p id="team-text-p">
                        Академия примет участие в наборе SELECTS, который будет проиходить в Памплоне (Испания) в мае 2018.
                        За более детальной информацией обращайтесь к нашим тренерам.
                        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/contacts")}}">Узнать всё о наборе.</a>

                    <p></p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-krynica') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                        РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                    </a>
                    </p>
                </div>
            </div>

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

    @include('layouts.footer')
@endsection
