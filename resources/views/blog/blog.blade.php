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
                    <img id="img-where" src="../../design/first_page/res/photo-2.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">20/08/2017</p>
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
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                        РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-9">
                    <img id="img-where" src="../../design/first_page/res/photo-2.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">20/08/2017</p>
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
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                        РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-9">
                    <img id="img-where" src="../../design/first_page/res/photo-2.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">20/08/2017</p>
                    <h3 class="h1-team-page" id="h3-team">ИДЕАЛЬНЫЙ КЛИМАТ  СПОРТМЕНА</h3>
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
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a" >
                        РАЗВЕРНУТЬ ВЕСЬ ТЕКСТ
                    </a>
                    </p>
                </div>
            </div>
            <div class="row where-text-1" id="where-photos">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-9">
                    <img id="img-where" src="../../design/first_page/res/photo-2.jpg"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <p class="blog-date">20/08/2017</p>
                    <h3 class="h1-team-page" id="h3-team">ИДЕАЛЬНЫЙ</h3>
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
                       data-toggle="modal" data-target="#modalArt" class="btn blog-a">
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
