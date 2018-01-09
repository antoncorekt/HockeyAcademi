<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Hockey Academy</title>
</head>

<body>

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
                <li class="nav-el men-main"><a href="#">{{ trans('messages.main') }}</a></li>
                <li class="nav-el"><a class=" men-about" href="#">{{ trans('messages.about') }}</a></li>
                <li class="nav-el menu-logo"><a href="#"></a></li>
                <li class="nav-el men-blog"><a href="#">{{ trans('messages.blog') }}</a></li>
                <li class="nav-el men-contacts"><a href="#">{{ trans('messages.cont') }}</a></li>
                <li class="nav-el men-lang">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{@getLangURI('en')}}">English</a></li>
                            <li><a href="{{@getLangURI('ru')}}">Русский</a></li>
                            <li><a href="{{@getLangURI('pl')}}">Polski</a>
                            </li>
                        </ul>
                    </div>

                    </li>
            </ul>
        </div>
    </nav>
    <div id="main-text">
        <h1 id="h1-main-page">{{ trans('messages.dream') }} -</h1>
        <h1 id="h1-main-page">{{ trans('messages.dream1') }}</h1>
        <p id="main-text-p">
            {{ trans('messages.dream2') }}
            <br>{{ trans('messages.dream3') }}
        </p>
        <button class="btn btn-success">{{ trans('messages.know_more') }}</button>
    </div>
</div>



</body>

</html>