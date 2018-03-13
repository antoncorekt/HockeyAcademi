@extends('layouts.main')
@section('header')
    <meta name="description" content="{{ trans('messages.description_about') }}" />
    <title>East EHL - About</title>

    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick-theme.css')}}"/>

    <script src="{{asset('public/slick/slick.min.js')}}"></script>
    <script src="{{asset('public/js/SliderManaged.js')}}"></script>
    <script src="{{asset('public/js/imgGalManaged.js')}}"></script>
    <script src="{{asset('public/js/preloader.js')}}"></script>
    <script src="{{asset('public/js/wow.min.js')}}"></script>
    <script src="{{asset('js/modalWindow.js')}}"></script>

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

    <script type="text/javascript">
    $(document).ready(function () {
        new WOW().init();

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
            $('html, body').animate({ scrollTop: destination }, 1100);
            $(".sldr").slick("slickNext");
        }
        else if (params["p"] == "edu"){
            var elementClick = $(".edu");
            var destination = $(elementClick).offset().top-590;
            $('html, body').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "coach"){
            var elementClick = $(".coach");
            var destination = $(elementClick).offset().top-650;
            $('html, body').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "selects"){
            var elementClick = $(".sldr");
            var destination = $(elementClick).offset().top-250;
            $('html, body').animate({ scrollTop: destination }, 1100);
            }
        else if (params["p"] == "krynica"){
            var elementClick = $(".kryn");
            var destination = $(elementClick).offset().top-650;
            $('html, body').animate({ scrollTop: destination }, 1100);
            }
    });

    </script>
    <style>
        .video-kryn{
            display: none;
        }

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

@endsection
@section('content')
    <div id="preloader"></div>

    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>

    <div class="container-fluid bg-1" id="about-1">
        <img src="/../../design/first_page/res/about_main.png" alt="Hockey Player About"/>
        <div class="row" id="main-text">
            <h1 class="h1-about h1-main-page " data-wow-duration="1s" >{{ trans('messages.grow') }} </h1>
            <h1 class="h1-about h1-main-page" data-wow-duration="1s" data-wow-delay="1.3s" >{{ trans('messages.grow1') }}</h1>
            <p class="main-text-p" id="t-about">
                {{ trans('messages.care') }}
                <br>{{ trans('messages.care1') }}
            </p>
            <button class="btn btn-main btn-about wow slideInLeft" data-wow-duration="2s" id="btn-main">{{ trans('messages.know_more1') }}</button>
        </div>

    </div>

    <div class="container-fluid bg-2" id="about-2">
        <img src="/../../design/first_page/res/white_sql.png" alt="White square background"/>
        <div class="row" id="sq-text" >

            <div class="col-md-2 col-sm-2 sq-text " id="sq-text-1">
                <div class="wow slideInLeft">
                <h1>21</h1>
                <p>
                    {{ trans('messages.70text') }}
                    <br>{{ trans('messages.70text1') }}
                </p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-2">
                <div class="wow slideInDown">
                <h1>4</h1>
                <p>
                    {{ trans('messages.10text') }}
                    <br>{{ trans('messages.10text1') }}
                </p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-3">
                <div class="wow slideInRight">
                <h1>10</h1>
                <p>
                    {{ trans('messages.12text') }}
                    <br>{{ trans('messages.12text1') }}
                </p>
                </div>
            </div>
        </div>
        <div class="sldr">
            <div class="row team euro team-text">


                    <div class="col-lg-6 col-md-5 col-sm-9 col-xs-9">
                        <img src="/../../design/first_page/res/photo-1.png" alt="EEHL is Your Chance"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-9">
                        <h5 class="h4-main-page selects">#{{ trans('messages.enrolment') }} #{{ trans('messages.your_chance') }}</h5>
                        <h3 class="h1-team-page">{{ trans('messages.new_enrolment') }}</h3>

                        <p class="text-style-1rst-banner">
                            <div class="text-style-1rst-banner text-style-1rst-banner-if_you">{{ trans('messages.if_you') }} </div>
                            <ul class="text-style-1rst-banner">
                                <li>{{ trans('messages.years_old') }};</li>
                                <li>{{ trans('messages.hock_life') }};</li>
                                <li>{{ trans('messages.want_student') }};</li>
                                <li>{{ trans('messages.want_euro') }};</li>
                                <li>{{ trans('messages.dream_leagues') }};</li>
                            </ul>

                        </p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-details') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-3rst-banner">
                            {{ trans('messages.details') }}
                        </a>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-living') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-4rst-banner">
                            {{ trans('messages.concept_acc') }}
                        </a>
                    </div>
            </div>
            <div class="row team team-text">


                    <div class="col-lg-6 col-md-5 col-sm-9 col-xs-9">
                        <img src="/../../design/first_page/res/photo-6.png" alt="selects"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-9">

                        <h5 class="h4-main-page">#EEHL #SELECTS</h5>
                        <h3 class="h1-team-page">{{ trans('messages.eehl_ambitions') }}</h3>
                        <div class="text-style-1rst-banner">{{ trans('messages.proudly') }}: </div>
                        <ul class="text-style-1rst-banner">
                            <li>{{ trans('messages.Slovakia_season') }}; </li>
                            <li>{{ trans('messages.official_LGS') }}
                                <br>{{ trans('messages.official_LGS1') }};
                            </li>
                            <li>{{ trans('messages.tournaments_Selects') }}; </li>
                        </ul>
                        <p></p>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-selects') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-5rst-banner">
                            {{ trans('messages.about_selects') }}?
                        </a>
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-slovac') }}"
                           data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-6rst-banner">
                           {{ trans('messages.Slovakia_tour') }}
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3" id="about-3">
        <img src="/../../design/first_page/res/textur.png" alt="texture" />
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
                    <img src="/../../design/first_page/res/tr1.jpg" alt="{{ trans('messages.parfionov') }}"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/parf') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        {{ trans('messages.parfionov') }}</a>
                </h5>
                <p> {{ trans('messages.coach_spec') }}</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/savchenko') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="/../../design/first_page/res/tr2.jpg" alt="{{ trans('messages.savchenko') }}"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/savchenko') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        {{ trans('messages.savchenko') }}</a>
                </h5>
                <p>{{ trans('messages.coach_spec') }}</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ivlev') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="/../../design/first_page/res/tr3.jpg" alt="{{ trans('messages.ivlev') }}"/></a>

                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ivlev') }}"
                   data-toggle="modal" data-target="#modalArt" >
                        {{ trans('messages.ivlev') }}</a>
                </h5>
                <p>{{ trans('messages.coach_goalkeeper') }}</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ruzhana') }}"
                   data-toggle="modal" data-target="#modalArt" >
                    <img src="/../../design/first_page/res/tr4.jpg" alt="{{ trans('messages.ruzhana') }}"/></a>
                <h5> <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-coach/ruzhana') }}"
                        data-toggle="modal" data-target="#modalArt" >
                        {{ trans('messages.ruzhana') }}</a>
                </h5>
                <p>{{ trans('messages.coach_spec') }}</p>
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
                    <div class="img-container">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01" alt="modal-content">
                            <div id="caption"></div>
                        </div>
                        <div class = "yellow-back">
                            <img id="img-where" src="{{asset('images/gal/yell.jpg')}}" alt="yellow square"/>
                        </div>
                        <a class="prev arr-gal" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next arr-gal" onclick="plusSlides(1)">&#10095;</a>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/2.jpg')}}" alt="EEHL school"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/1.jpg')}}" alt="EEHL school in Krynica-Zdrój"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/3.jpg')}}" alt="Painting mountains"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/4.jpg')}}" alt="Polish Switzerland"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/5.jpg')}}" alt="Excellent mountain climate"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/6.jpg')}}" alt="Modern infrastructure"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/7.jpg')}}" alt="SPACIOUS STADIUMS"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/8.jpg')}}" alt="room at the school"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/9.jpg')}}" alt="rest at the school"/>
                        </div>
                        <div class="img-galary">
                            <img id="img-where" class="img-mod" src="{{asset('images/gal/10.jpg')}}" alt="the hockey stadium"/>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <h3 class="h1-team-page kryn" id="h3-team">{{ trans('messages.climate') }}</h3>
                    <p id="team-text-p">
                        {{ trans('messages.about_town') }}
                    </p>
                    <p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-krynica') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn btn-about btn-main "  id="btn-1rst-banner">
                        {{ trans('messages.see_where') }}
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1 edu"  id="where-photos1">
                <div class="col-lg-4 col-sm-6 edu">
                    <h3 class="h1-team-page">{{ trans('messages.hockey_educ') }}!</h3>
                    <p id="team-text-p">
                        {{ trans('messages.hockey_educ1') }}

                    </p>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal-education') }}"
                       data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about"  id="btn-2rst-banner">
                        {{ trans('messages.more_about_educ') }}
                    </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6  col-xs-9">
                    <img src="/../../design/first_page/res/photo-3.jpg" id="img-where" class="photo-kryn" alt="Krynica-Zdrój"/>
                    <div class="video-kryn">
                        <iframe src="https://www.youtube.com/embed/lQsFMf2Fl5I"  id="img-where" height="300"  style="border: 1px;" allowfullscreen></iframe>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-5" id="about-5">
        <img src="/../../design/first_page/res/img-faq.jpg" alt="hockey player"/>
        <div class="row"  id="form-text">
            <h4>{{ trans('messages.imp_to_know') }}</h4>
            <div class="col-lg-6 col-md-6 col-xs-9 col-list">
                <ul class="list-know" itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
                    <li itemprop="name">{{ trans('messages.tours') }}</li>
                    <li itemprop="name">{{ trans('messages.summer_camp') }}</li>
                    <li itemprop="name">{{ trans('messages.introduce') }}</li>
                    <li itemprop="name">{{ trans('messages.permit') }}</li>
                    <li itemprop="name">{{ trans('messages.doc_help') }}</li>
                    <li itemprop="name">{{ trans('messages.three_Selects') }}</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-9  col-list">

                <ul class="list-know" itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">

                    <li itemprop="name">{{ trans('messages.class_room') }}</li>
                    <li itemprop="name">{{ trans('messages.help_admis') }}</li>
                    <li itemprop="name">{{ trans('messages.help_living') }}</li>
                    <li itemprop="name">{{ trans('messages.help_lang') }}</li>
                    <li itemprop="name">{{ trans('messages.rus_lang_coach') }}</li>
                    <li itemprop="name">{{ trans('messages.system_offer') }}</li>
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
                <h2>1699€ / {{ trans('messages.month') }}.</h2>
                <p>{{ trans('messages.old_cost') }}</p>
            </div>
            <div class="col-md-3 col-xs-3 offer-cost">
                <h2>1250€ / {{ trans('messages.month') }}.</h2>
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