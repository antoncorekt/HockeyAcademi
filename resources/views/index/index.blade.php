@extends('layouts.main')
@section('title', 'Hockey Academy')

@section('header')
<link rel="stylesheet" href="{{asset('public/css/main.css')}}">
<script type="text/javascript" src="{{asset('js/VideoManager.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ThreeCanvas.js')}}"></script>
<script type="text/javascript" src="{{asset('js/SnowManaged.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Snow.js')}}"></script>
<style>
        



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
        });
       
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            
            var destination = $(".fixed-container").offset().top-250;
                $('html').animate({ scrollTop: destination }, 1100);
        }
        

      
    });


</script>

@endsection

@section('before-nav')
<!-- <div id="video">

<button class="video-skip">Skip video</button>

<video width="100" height="100" src="../design/first_page/Akademia_pervyi_774_ekran.mp4" id="video-tag" type="video/mp4" preload="auto"
    autobuffer autoplay>
    <p>Requires HTML5 capable browser.</p>
</video>
</div> -->

<div class="fixed-container">
<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about")}}">
    <div class="flex-conteiner">
    
        <div class="flex-content">
        
        Сильный регулярный европейский чемпионат Словакии в группе 'Кадетты' и гарантированное участие мин. в 23 играх;
        </div>
        <div class="flex-content">
        Получение ЕВРОПЕЙСКОГО образования в лучших школах и университетах; 
        </div>
        <div class="flex-content">
        Продвинутый тренировочный процесс под руководством ведущих специалистов;
        </div>
        <div class="flex-content">
        Участие (по отдельному протоколу) в программе 'Selects', 
        </div>
        <div class="flex-content">
        Уникальное расположение в сердце Европы - круглогодичный горный (горнолыжный) курорт с динамическим развитием.
        </div>
    </div>
    </a>
</div>

<div class="cont" >
<div id="snow"></div>
@endsection

@section('content')



        <div class="row" id="main-text">
            <!-- <h4 class="h1-main-page" style="color:red"> ТУТ ОЧЕНЬ КОРОТКИЙ ТЕКСТ</h4> -->
            
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
                <!-- <h4  style="color:red">НОВОСТИ ИЗ БЛОГА</h4> -->
                <div class="col-sm-2 col-lg-2 col-md-2 div-events">
                    <h5 class="h5-events" id="h5-events-1">{{ trans('messages.events') }}</h5>
                    <img src="../public/images/news.jpg" class="img-events">
                    <p class="text-events">EUHL: pierwsze punkty<br> Academy 1929 KTH</p>
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2 div-events">
                    <h5 class="h5-events" id="h5-events-2">{{ trans('messages.events') }}</h5>
                    <img src="../public/images/news.jpg" class="img-events">
                    <p class="text-events">EUHL: pierwsze punkty<br> Academy 1928 KTH</p>
                </div>
            </div>
        </div>
    </div>
@endsection