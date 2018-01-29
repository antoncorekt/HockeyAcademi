<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/getLang.js')}}"></script>
    <script>
    $(document).ready(function () {
        getLang();
        });
    </script>
    @yield('header')
    
</head>

<body>

@yield('before-nav')

<div class="container-fluid" id="body-main">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
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
                <li class="nav-el men-blog"><a href="#">{{ trans('messages.blog') }}</a></li>
                <li class="nav-el men-contacts"><a href="#">{{ trans('messages.cont') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-el men-lang">
                    <div class="dropdown">
                        <button class="dropdown-toggle lang" type="button" data-toggle="dropdown">
                            <span class="flag"><img src="" class="flag-ico" id="flag"></span>
                            <span class="drop-text"><span id="selected"></span>
                            <span class="caret"></span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{@getLangURI('ru')}}">
                                    <span class="flag">
                                        <img src="../../public/images/ru.png" class="flag-ico">
                                    </span>
                                    <span class="drop-text">РУССКИЙ</span></a>
                            </li>
                            <li>
                                <a href="{{@getLangURI('en')}}">
                                     <span class="flag">
                                        <img src="../../public/images/en.ico" class="flag-ico">
                                    </span>
                                    <span class="drop-text">ENGLISH</span></a>
                            </li>
                            <li>
                                <a href="{{@getLangURI('pl')}}">
                                    <span class="flag">
                                        <img src="../../public/images/pl.ico" class="flag-ico">
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