<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="yandex-verification" content="d016d5a75b4d8148" />
    <meta name="google-site-verification" content="cKvkfXewbPJQvro-OrgNGP9dw-1CRdVsHKIwCKqeS9w" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('js/getLang.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/css/corrections.css')}}" >
    <script>
        $(document).ready(function () {
            getLang();
            var click = 0;
            $("#navbar-btn").click(function() {
                if(click == 0) {
                    $(".navbar-header").css("background-color", "rgba(88, 46, 99, 0.9)");
                    click = 1;
                }
                else{
                    $(".navbar-header").css("background-color", "transparent");
                    click = 0;
                }
            });
        });
    </script>
    @yield('header')
    <!-- Yandex.Metrika counter -->
    <script>
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter47835631 = new Ya.Metrika({
                        id:47835631,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114787633-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114787633-1');
    </script>
        <!-- /Yandex.Metrika counter -->
</head>
<body>
@yield('before-nav')
<div class="container-fluid" id="body-main">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <img src="/../images/log.gif" id="logo-navheader" alt="eehl-logo-2018">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" id="navbar-btn">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-default navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-el men-main"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/")}}">{{ trans('messages.main') }}</a></li>
                <li class="nav-el"><a class=" men-about" href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/about")}}">{{ trans('messages.about') }}</a></li>
                <li class="nav-el menu-logo"><a href="#"></a></li>
                <li class="nav-el men-blog"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/blog")}}">{{ trans('messages.blog') }}</a></li>
                <li class="nav-el men-contacts"><a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale()."/contacts")}}">{{ trans('messages.cont') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-el men-lang">
                    <div class="dropdown">
                        <button class="dropdown-toggle lang" type="button" data-toggle="dropdown">
                            <span class="flag"><img src="/../../public/images/en.ico" class="flag-ico" id="flag" alt="flag"></span>
                            <span class="drop-text"><span id="selected"></span>
                            <span class="caret"></span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{@getLangURI('ru')}}">
                                    <span class="flag">
                                        <img src="/../../public/images/ru.png" class="flag-ico" alt="ru">
                                    </span>
                                    <span class="drop-text">РУССКИЙ</span></a>
                            </li>
                            <li>
                                <a href="{{@getLangURI('en')}}">
                                     <span class="flag">
                                        <img src="/../../public/images/en.ico" class="flag-ico" alt="en">
                                    </span>
                                    <span class="drop-text">ENGLISH</span></a>
                            </li>
                            <li>
                                <a href="{{@getLangURI('pl')}}">
                                    <span class="flag">
                                        <img src="/../../public/images/pl.ico" class="flag-ico" alt="pl">
                                    </span>
                                    <span class="drop-text">POLSKI</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
@yield('content')
</body>
</html>