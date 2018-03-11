@extends('layouts.main')
@section('title', 'Hockey Academy')

@section('header')
<link rel="stylesheet" href="{{asset('public/css/main.css')}}" media="all">
<script async  type="text/javascript" src="{{asset('js/VideoManager.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ThreeCanvas.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/SnowManaged.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/Snow.js')}}"></script>
<script  type="text/javascript" src="{{asset('public/js/preloader.js')}}"></script>
<style>

    div#preloader {
        position: fixed;
        left: 0; top: 0;
        z-index: 999;
        width: 100%;
        height: 100%;
        overflow: visible;
        background: #333 url('http://files.mimoymima.com/images/loading.gif') no-repeat center center;
    }


</style>

<script>
    $(document).ready(function () {
        
        $('.btn').click(function (){
            if ($('.fixed-container').is(':visible')){
                $('.fixed-container').css('display','none');
            }
            else{
                $('.fixed-container').css('display','block');
            }

            var destination = $(".flex-link-4").offset().top;
                $('html, body').animate({ scrollTop: destination }, 1500);

        });

        $(".flex-link-1").click(function (){
            window.location.href = "{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about?p=slov")}}";
        })
        $(".flex-link-2").click(function (){
            window.location.href = "{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about?p=edu")}}";
        })
        $(".flex-link-3").click(function (){
            window.location.href = "{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about?p=coach")}}";
        })
        $(".flex-link-4").click(function (){
            window.location.href = "{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about?p= ")}}";
        })
        $(".flex-link-5").click(function (){
            window.location.href = "{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about?p=krynica")}}";
        })

      
    });


</script>

@endsection

@section('before-nav')
<div id="preloader"></div>

<!-- <div id="video">

<button class="video-skip">Skip video</button>

<video width="100" height="100" src="../design/first_page/Akademia_pervyi_774_ekran.mp4" id="video-tag" type="video/mp4" preload="auto"
    autobuffer autoplay>
    <p>Requires HTML5 capable browser.</p>
</video>
</div> -->

<div class="fixed-container">

    <div class="flex-conteiner">
    
        <div class="flex-content flex-link-1">
            <div class="flex-text">
                Сильный регулярный европейский чемпионат Словакии в группе
                'Кадетты'. Гарантированное участие минимум в 23 играх;
            </div>
            <div class="flext-link">
                <div class="arrow right"></div>
            </div>
        </div>
        <div class="flex-content flex-link-2">
            <div class="flext-link ">
                <div class="arrow left"></div>
            </div>
            <div class="flex-text">
                ЕВРОПЕЙСКОЕ образования в лучших школах и университетах
                с возможностью получение диплома американского образца;
            </div>
        </div>
        <div class="flex-content flex-link-3">
            <div class="flex-text">
                Продвинутый тренировочный процесс и уникальные методики  
                под руководством ведущих специалистов Европы и СНГ. 
            </div>
            <div class="flext-link">
                <div class="arrow right"></div>
            </div>
        </div>
        <div class="flex-content flex-link-4">
            <div class="flext-link">
                <div class="arrow left"></div>
            </div>
            <div class="flex-text">
            Участие (по отдельному протоколу) в программе LEGASY GLOBAL SPORTS
            - "чемпионат мира" среди лучших юниорских хоккейных команд.
            </div>
        </div>
        
        <div class="flex-content flex-link-5">
            <div class="flex-text">
             Уникальное расположение в самом сердце Европы - круглогодичный 
             горный (горнолыжный) курорт с динамическим развитием.
             </div>
            <div class="flext-link flex-link-1">
                <div class="arrow right"></div>
            </div>
        </div>
    </div>
    
</div>

<div class="cont" >
<div id="snow"></div>
@endsection

@section('content')

        <div class="row" id="main-text">
            <h1 class="h1-main-page">{{ trans('messages.dream') }} -</h1>
            <h1 class="h1-main-page">{{ trans('messages.dream1') }}</h1>
            <p class="main-text-p">
                    {{ trans('messages.dream2') }}
                <br>{{ trans('messages.dream3') }}
                <br>{{ trans('messages.dream4') }}
            </p>
            <div  class="btn btn-main">{{ trans('messages.know_more') }}</div>
        </div>

        <div class="footer-main">
            <div class="row" id="events">
                <div class="col-sm-2 div-events">
                    <h5 class="h5-events" id="h5-events-1">
                        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}" style="color: white; z-index:10 !important;">{{ trans('messages.events') }}</a>
                    </h5>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/post/'.$posts[0]->idPText) }}">
                        <img src="{{$posts[0]->img_title}}" class="img-events">
                    </a>
                    <p class="text-events">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/post/'.$posts[0]->idPText) }}" style="color: white; z-index:10 !important;">
                            {{$posts[0]->title}}
                        </a>
                    </p>
                </div>
                <div class="col-sm-2 div-events">
                    <h5 class="h5-events" id="h5-events-2">
                        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}" style="color: white; z-index:10 !important;">{{ trans('messages.events') }}</a>
                    </h5>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/post/'.$posts[1]->idPText) }}">
                        <img src="{{$posts[1]->img_title}}" class="img-events">
                    </a>
                    <p class="text-events">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/post/'.$posts[1]->idPText) }} " style="color: white; z-index:10 !important;">
                            {{$posts[1]->title}}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection