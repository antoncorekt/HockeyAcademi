@extends('layouts.main')
@section('header')


    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick-theme.css')}}"/>
    <script type="text/javascript" src="{{asset('public/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/SliderManaged.js')}}"></script>

@endsection
@section('content')
    <style>
        body {
            background-image: none;
            background-color: white;
        }

       


    </style>
    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>
    <div class="container-fluid bg-1" id="about-1">
        <img src="../../design/first_page/res/about_main.png"/>
        <div class="row" id="main-text">
            <h1 class="h1-main-page h1-about" >{{ trans('messages.grow') }} </h1>
            <h1 class="h1-main-page h1-about">{{ trans('messages.grow1') }}</h1>
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
                <h1>40</h1>
                <p>
                    {{ trans('messages.70text') }}
                    <br>{{ trans('messages.70text1') }}
                </p>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-2">
                <h1>7</h1>
                <p>
                    {{ trans('messages.10text') }}
                    <br>{{ trans('messages.10text1') }}
                </p>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-3">
                <h1>12</h1>
                <p>
                    {{ trans('messages.12text') }}
                    <br>{{ trans('messages.12text1') }}
                </p>
            </div>
        </div>
        <div class="sldr">
            <div class="row team" id="team-text">
    
            
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-9">
                        <img src="../../design/first_page/res/photo-1.png"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <h5 class="h4-main-page">#НАБОР2018 #ТВОЙШАНС</h5>
                        <h3 class="h1-team-page">EHL ОБЬЯВЛЯЕТ НОВЫЙ НАБОР В АКАДЕМИЮ</h3>
                        <!-- <h3 class="h1-team-page">С 15 АВПРЕЛЯ 2018 ГОДА</h3> -->

                        <p class="text-style-1rst-banner">
                            <div class="text-style-1rst-banner text-style-1rst-banner-if_you">Если ты: </div> 
                            <ul class="text-style-1rst-banner">   
                                <li>2003-2004 годов рождения;</li>
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
                    <!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="s1rst-banner-last">
                        <div class="text-style-1rst-banner text-style-1rst-banner-ab"> 
                                С <b>15 апреля 2018 года</b> Международная Европейская Хоккейная Академия <b>Euro Hockey Lab</b> (EHL) 
                                начинает селекционный отбор претендентов на зачисление в Академию.
                                В конкурсе участвуют ведущие скауты и тренеры Европы.
                                <br>
                                Возглавляют отбор главные тренеры Академии:
                                <ul class="text-style-1rst-banner text-style-1rst-banner-ab">
                                    <li>З.Т.Р.Ф Парфенов А.В;</li>
                                    <li>М.С.М.К Савченко А.Н. - главный тренер сборной «Европейской Университетской Команды».</li>
                                </ul>
                        </div>
                    </div> -->
            </div>
            <div class="row team" id="team-text">
    
            
                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-9">
                        <img src="../../design/first_page/res/photo-6.png"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">

                        <h5 class="h4-main-page">#EHL #SELECT</h5>
                        <h3 class="h1-team-page">EHL - академия с амбициями</h3>
                        <div class="text-style-1rst-banner"> Мы с гордостью можем сообщить что: </div>
                        <ul class="text-style-1rst-banner">
                            <li> Мы участвуем в регулярном чемпионате Словакии; </li>
                            <li> EHL официальный представитель компании LEGACY GLOBAL SPORTS.
                                <br>Данная программа позволяет каждому учаснику попасть 
                                в профессиональных хоккей на уровне НХЛ и получить образование в колледжах и университетах США;
                            </li>
                            <li> Участвуем в международных турнирах SELECT; </li>
                        </ul> 
                        <p></p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-selects') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                            ЧТО ТАКОЕ SELECT?
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3" id="about-3">
        <img src="../../design/first_page/res/textur.png"/>
        <div class="row coach-text">
            <h5 class="h5-coach-text">{{ trans('messages.learn') }}?</h5>
            <h3 class="h3-coach-text">{{ trans('messages.coach') }}
                <br>{{ trans('messages.coach1') }}
            </h3>
        </div>
        <div class="row coach-text" id="coach-photos">
            <div class="col-md-2 col-sm-2 col-xs-3 coach ">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/1') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/tr1.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/1') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Андрей Парфенов</a>
                </h5>
                <p>Тренер специалист</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/2') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/tr2.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/1') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Андрей Савченко</a>
                </h5>
                <p>Тренер специалист</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/2') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/coach.jpg"/></a>

                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/2') }}"
                   data-toggle="modal" data-target="#modalArt" >
                        Andriej Parfionow</a>
                </h5>
                <p>Помощник тренера</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/2') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="../../design/first_page/res/coach.jpg"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/1') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        Andriej Parfionow</a>
                </h5>
                <p>Тренер вратарей</p>
            </div>

        </div>
        <div class="row coach-text" id="coach-btn">
            <button class="btn btn-main btn-about">{{ trans('messages.coaches') }}</button>
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
                    <h3 class="h1-team-page" id="h3-team">ИДЕАЛЬНЫЙ КЛИМАТ ДЛЯ СПОРТМЕНА</h3>
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
            <div class="row where-text-1"  id="where-photos1">
                <div class="col-lg-4 col-sm-6">
                    <h3 class="h1-team-page">ХОККЕЙ ИЛИ ОБРАЗОВАНИЕ? ХОККЕЙ И ОБРАЗОВАНИЕ!</h3>
                    <p id="team-text-p">
                    Думаешь, что хоккей и образование не совместимы? Или так думают твои родители? В EHL можешь стать и успешным, и умным! Ведь мы считаем, что ты не должен бросать учёбу ради хоккея, и хоккей ради учёбы. И знаем, как вам помочь!

У Академии есть контракт на обучение студентов в местной школе. У тебя будут полноценные и школьные, и тренировочные занятия! Но это ещё не всё.

После окончания Академии ты можешь получить образование в колледжах и университетах Европы и США.

                    </p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-education') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-1rst-banner">
                        БОЛЬШЕ ОБ ОБРАЗОВАНИИ В ПОЛЬШЕ
                    </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4  col-xs-9">
                    <img src="../../design/first_page/res/photo-3.jpg" id="img-where"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-5" id="about-5">
        <img src="../../design/first_page/res/img-faq.jpg"/>
        <div class="row"  id="form-text">
            <h4>ВАЖНО ЗНАТЬ</h4>
            <div class="col-lg-4 col-md-3 col-xs-9">
                <ul class="list-know">
                    <li>Бесплатный адаптационный период с 15.04.2018 по 15.05.2018</li>
                    <li>Ознакомление со школьной и тренировочной программой</li>
                    <li>Возможность получить вид на жительство для вас и ребёнка</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-9">
                <ul class="list-know">
                    <li>Помощь с оформлением документов</li>
                    <li>Поступление в 8 школьный класс без экзаменов</li>
                    <li>Помогаем с поступлением в Европейский университет</li>

                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-9">
                <ul class="list-know">
                    <li>Обеспечение жильём и питанием</li>
                    <li>Языковая помощь</li>
                    <li>Русскоговорящие тренера</li>
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
                <h2>2000$</h2>
                <p>{{ trans('messages.old_cost') }}</p>
            </div>
            <div class="col-md-3 col-xs-3 offer-cost">
                <h2>1000$</h2>
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