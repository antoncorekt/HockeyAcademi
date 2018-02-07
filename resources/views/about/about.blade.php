@extends('layouts.main')
@section('header')
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick-theme.css')}}"/>
    <script type="text/javascript" src="{{asset('public/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/SliderManaged.js')}}"></script>

    <script>
    $(document).ready(function () {
        var params = window
        .location
        .search
        .replace('?','')
        .split('&')
        .reduce(
            function(p,e){
                var a = e.split('=');
                p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );



        $(".photo-kryn").click(function (){
            
            $(".photo-kryn").css("display","none");
            $(".video-kryn").css("display","block");
        });

        // console.log( params['data']);

        // alert(params['par']);

        if (params["p"] == "slov"){
            var elementClick = $(".sldr");
            var destination = $(elementClick).offset().top-250;
            $('html').animate({ scrollTop: destination }, 1100);
            $(".sldr").slick("slickNext");
        }
        else if (params["p"] == "edu"){
            var elementClick = $(".edu");
            var destination = $(elementClick).offset().top-590;
            $('html').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "coach"){
            var elementClick = $(".coach");
            var destination = $(elementClick).offset().top-650;
            $('html').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "selects"){
            var elementClick = $(".sldr");
            var destination = $(elementClick).offset().top-250;
            $('html').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "krynica"){
            var elementClick = $(".kryn");
            var destination = $(elementClick).offset().top-650;
            $('html').animate({ scrollTop: destination }, 1100);
            }
        
    
            
        

    });

    </script>

@endsection
@section('content')
    <style>
        body {
            background-image: none;
            background-color: white;
        }

        .photo-kryn{
            display: block;
        }

        .video-kryn{
            display: none;
        }
    </style>
    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>
    
    <div class="container-fluid bg-1" id="about-1">
        <img src="../../design/first_page/res/about_main.png"/>
        <div class="row" id="main-text">
            <h1 class="h1-about h1-main-page" >{{ trans('messages.grow') }} </h1>
            <h1 class="h1-about h1-main-page">{{ trans('messages.grow1') }}</h1>
            <p class="main-text-p" id="t-about">
                {{ trans('messages.care') }}
                <br>{{ trans('messages.care1') }}
            </p>
            <button class="btn btn-main btn-about" id="btn-main">{{ trans('messages.know_more1') }}</button>
        </div>

    </div>

    <div class="container-fluid bg-2" id="about-2">
        <img src="../../design/first_page/res/white_sql.png"/>
        <div class="row" id="sq-text" >
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-1">
                <h1>21</h1>
                <p>
                    {{ trans('messages.70text') }}
                    <br>{{ trans('messages.70text1') }}
                </p>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-2">
                <h1>4</h1>
                <p>
                    {{ trans('messages.10text') }}
                    <br>{{ trans('messages.10text1') }}
                </p>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-3">
                <h1>10</h1>
                <p>
                    {{ trans('messages.12text') }}
                    <br>{{ trans('messages.12text1') }}
                </p>
            </div>
        </div>
        <div class="sldr">
            <div class="row team euro" id="team-text">


                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-9">
                        <img src="../../design/first_page/res/photo-1.png"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <h5 class="h4-main-page selects">#НАБОР2018 #ТВОЙШАНС</h5>
                        <h3 class="h1-team-page">EEHL ОБЬЯВЛЯЕТ НОВЫЙ НАБОР В АКАДЕМИЮ</h3>
                        <!-- <h3 class="h1-team-page">С 15 АВПРЕЛЯ 2018 ГОДА</h3> -->

                        <p class="text-style-1rst-banner">
                            <div class="text-style-1rst-banner text-style-1rst-banner-if_you">Если ты: </div>
                            <ul class="text-style-1rst-banner">
                                <li>2004-2005 годов рождения;</li>
                                <li>Хоккей – это твоя жизнь;</li>
                                <li>Хочешь быть учеником лучших тренеров Европы и СНГ;</li>
                                <li>Хочешь получить европейское образование;</li>
                                <li>Мечтаешь играть в профессиональных лигах Европы;</li>
                            </ul>

                        </p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-details') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                            ПОДРОБНОСТИ
                        </a>
                    </div>
            </div>
            <div class="row team" id="team-text">


                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-9">
                        <img src="../../design/first_page/res/photo-6.png"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">

                        <h5 class="h4-main-page">#EEHL #SELECTS</h5>
                        <h3 class="h1-team-page">EEHL - академия с амбициями</h3>
                        <div class="text-style-1rst-banner"> Мы с гордостью можем сообщить что: </div>
                        <ul class="text-style-1rst-banner">
                            <li> Мы участвуем в регулярном чемпионате Словакии; </li>
                            <li> EEHL официальный представитель компании LEGACY GLOBAL SPORTS.
                                <br>Данная программа позволяет каждому учаснику попасть
                                в профессиональных хоккей на уровне НХЛ и получить образование в колледжах и университетах США;
                            </li>
                            <li> Участвуем в международных турнирах SELECTS; </li>
                        </ul>
                        <p></p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-selects') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                            О SELECTS?
                        </a>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-slovac') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                           О ЧЕМПИОНАТЕ СЛОВАКИИ
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3" id="about-3">
        <img src="../../design/first_page/res/textur.png" style="height: 100%;"/>
        <div class="row coach-text">
            <h5 class="h5-coach-text">{{ trans('messages.learn') }}?</h5>
            <h3 class="h3-coach-text">{{ trans('messages.coach') }}
                <br>{{ trans('messages.coach1') }}
            </h3>
        </div>
        <div class="row coach-text" id="coach-photos">
            <div class="col-md-2 col-sm-2 col-xs-3 coach ">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/parf') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/tr1.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/parf') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Андрей Парфенов</a>
                </h5>
                <p>Тренер специалист</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/savchenko') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/tr2.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/savchenko') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Андрей Савченко</a>
                </h5>
                <p>Тренер специалист</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ivlev') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/tr3.jpg"/></a>

                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ivlev') }}"
                   data-toggle="modal" data-target="#modalArt" >
                        Александр Ивлев</a>
                </h5>
                <p>Помощник тренера</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/2') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/coach.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/1') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Иванов Иван</a>
                </h5>
                <p>Тренер вратарей</p>
            </div>

        </div>
        <div class="row coach-text" id="coach-btn"  >
            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/train') }}"
               data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about" >
                {{ trans('messages.coaches') }}
            </a>

        </div>
    </div>
    <div class="container-fluid bg-4" id="about-4">
        <div class="row where-text">
            <h4 class="h4-main-page">{{ trans('messages.where') }}</h4>
            <h3 class="h3-where-text">{{ trans('messages.where1') }}
                <br>{{ trans('messages.where2') }}
            </h3>
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-9">
                    <img id="img-where" src="../../design/first_page/res/photo-2.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <h3 class="h1-team-page kryn" id="h3-team">ИДЕАЛЬНЫЙ КЛИМАТ ДЛЯ СПОРТМЕНА</h3>
                    <p id="team-text-p">
                    Академия находится в европейском спортивном центре c большой и современной инфраструктурой – 
                    в Польской Швейцарии городе Крыниця-Здруй. 
                    Это излюбленное место многих горнолыжников, хоккеистов и других спортсменов. 
                    Но город живёт не только зимой, но и летом.
                    Наши тренеры решили, что это место с его прекрасным климатом 
                    и минеральными источниками идеально подходит для взращивания 
                    лучших спортсменов Европы и всего мира.
                    <p></p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-krynica') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                        ПОСМОТРЕТЬ ГДЕ ЗАНИМАЮТСЯ ХОККЕИСТЫ
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1 edu"  id="where-photos1">
                <div class="col-lg-4 col-sm-6">
                    <h3 class="h1-team-page">ХОККЕЙ ИЛИ ОБРАЗОВАНИЕ? ХОККЕЙ И ОБРАЗОВАНИЕ!</h3>
                    <p id="team-text-p">
                    Думаешь, что хоккей и образование не совместимы? 
                    Или так думают твои родители? 
                    В EEHL можешь стать и успешным, и умным! 
                    Ведь мы считаем, что ты не должен бросать учёбу ради хоккея, 
                    и хоккей ради учёбы. И знаем, как вам помочь!

                    У Академии есть контракт на обучение студентов в местной школе. 
                    У тебя будут полноценные и школьные, и тренировочные занятия! Но это ещё не всё.

                    После окончания Академии ты можешь получить образование в колледжах и университетах Европы и США.

                    </p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-education') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                        БОЛЬШЕ ОБ ОБРАЗОВАНИИ В ПОЛЬШЕ
                    </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4  col-xs-9">
                    <img src="../../design/first_page/res/photo-3.jpg" id="img-where" class="photo-kryn"/>
                    <div class="video-kryn">
                        <iframe src="https://www.youtube.com/embed/lQsFMf2Fl5I"  id="img-where" height="300px" frameborder="1" allowfullscreen></iframe>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-5" id="about-5">
        <img src="../../design/first_page/res/img-faq.jpg"/>
        <div class="row"  id="form-text">
            <h4>ВАЖНО ЗНАТЬ</h4>
            <div class="col-lg-6 col-md-6 col-xs-9 col-list">
                <ul class="list-know">
                    <li>Ознакомительные туры в период весенних каникул 24.03-25.03.2018 и
                        31.03-01.04.2018 года</li>
                    <li>Полноценный летний лагерь в июле 2018 года</li>
                    <li>Ознакомление со школьной и тренировочной программой</li>
                    <li>Возможность получить вид на жительство для вас и ребёнка</li>
                    <li>Помощь с оформлением документов</li>
                    <li>В сезоне 2018/19 команда Академии участвует в трех турнирах 'Selects': в
                        Сан-Себастьяне (Испания), Ярославле (РФ) и в Филадельфии (США)</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-9  col-list">

                <ul class="list-know">

                    <li>Поступление в 8 класс (аналог 9 класса в странах СНГ) без экзаменов с обучением на польском языке</li>
                    <li>Помогаем с поступлением в Европейский университет</li>
                    <li>Помощь в выборе размещения и проживания в г.Крыница-Здруй</li>
                    <li>Языковая помощь</li>
                    <li>Русскоговорящие тренера</li>
                    <li>Существует система скидок и бонусов на обучение в Академии</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container-fluid bg-6" id="about-6">
        
        <div class="row where-text" id="cost-text">
            <h4 class="h4-main-page">{{ trans('messages.cost') }}?</h4>
            <h3 class="h3-where-text">{{ trans('messages.cost1') }}
                <br>{{ trans('messages.cost2') }}
            </h3>
        </div>
        <div class="row"  id="cost-photos1">
            <div class="col-md-3 col-xs-3 old-cost">
                <h2>1699€ / мес.</h2>
                <p>{{ trans('messages.old_cost') }}</p>
            </div>
            <div class="col-md-3 col-xs-3 offer-cost">
                <h2>1250€ / мес.</h2>
                <p>{{ trans('messages.offer_cost') }}</p>
            </div>
        </div>
        <div class="row" id="cost-btn">
            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-enrol') }}" data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about">{{ trans('messages.write_learn') }}</a>
        </div>
    </div>
    @include('layouts.footer')

    <div class="modal fade" id="modalArt" tabindex="-1" role="dialog" aria-labelledby="modalArt" style="color:black">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> </div>
        </div>
    </div>

        @if(Session::has('mes'))
            @include('others.messModal')
            <script>
                $(function() {
                    $('#modalMes').modal('show');
                });
            </script>
        @endif

@endsection