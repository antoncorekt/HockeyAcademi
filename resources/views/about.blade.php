@extends('layouts.main')
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
            <button class="btn btn-main btn-about">{{ trans('messages.know_more1') }}</button>
        </div>

    </div>

    <div class="container-fluid bg-2" id="about-2">
        <img src="../../design/first_page/res/white_sql.png"/>
        <div class="row" id="sq-text" >
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-1">
                <h1>70</h1>
                <p>
                    {{ trans('messages.70text') }}
                    <br>{{ trans('messages.70text1') }}
                </p>
            </div>
            <div class="col-md-2 col-sm-2 sq-text" id="sq-text-2">
                <h1>10</h1>
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
        <div class="row team" id="team-text">
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-9">
                <img src="../../design/first_page/res/photo-1.png"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                <h5 class="h4-main-page">{{ trans('messages.team') }}</h5>
                <h3 class="h1-team-page">{{ trans('messages.team1') }}</h3>
                <h3 class="h1-team-page">{{ trans('messages.team2') }}</h3>

                <p id="team-text-p">
                    {{ trans('messages.team3') }}
                    <br>{{ trans('messages.team4') }}
                    <br>{{ trans('messages.team5') }}
                    <br>{{ trans('messages.team6') }}
                    <br>{{ trans('messages.team7') }}
                    <br>{{ trans('messages.team8') }}

                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3" id="about-3">
        <img src="../../design/first_page/res/textur.png"/>
        <div class="row coach-text">
            <h5 class="h5-coach-text">{{ trans('messages.learn') }}?</h5>
            <h3 class="h3-coach-text">{{ trans('messages.coach') }}
                <br>{{ trans('messages.10text') }}
            </h3>
        </div>
        <div class="row coach-text" id="coach-photos">
            <div class="col-md-2 col-sm-2 col-xs-3 coach ">
                <img src="../../design/first_page/res/coach.jpg"/>
                <h5>Andriej Parfionow</h5>
                <p>Trener specjalista</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <img src="../../design/first_page/res/coach.jpg"/>
                <h5>Andriej Parfionow</h5>
                <p>Trener specjalista</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <img src="../../design/first_page/res/coach.jpg"/>
                <h5>Andriej Parfionow</h5>
                <p>Trener specjalista</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 coach">
                <img src="../../design/first_page/res/coach.jpg"/>
                <h5>Andriej Parfionow</h5>
                <p>Trener specjalista</p>
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
                    <img src="../../design/first_page/res/photo-2.jpg" id="img-where"/>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-9">
                    <h3 class="h1-team-page">{{ trans('messages.school') }}</h3>
                    <p id="team-text-p">
                        {{ trans('messages.school1') }}
                        <br>{{ trans('messages.school2') }}
                        <br>{{ trans('messages.school3') }}
                        <br>{{ trans('messages.school4') }}
                        <br>{{ trans('messages.school5') }}

                    </p>
                </div>
            </div>
            <div class="row where-text-1"  id="where-photos1">
                <div class="col-lg-4 col-sm-6">
                    <h3 class="h1-team-page">{{ trans('messages.school') }}</h3>
                    <p id="team-text-p">
                        {{ trans('messages.school1') }}
                        <br>{{ trans('messages.school2') }}
                        <br>{{ trans('messages.school3') }}
                        <br>{{ trans('messages.school4') }}
                        <br>{{ trans('messages.school5') }}

                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4  col-xs-9">
                    <img src="../../design/first_page/res/photo-3.jpg" id="img-where"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-5" id="about-5">
        <img src="../../design/first_page/res/writel.png"/>
        <div class="row"  id="form-text">
            <h4>{{ trans('messages.form') }}
            <br> {{ trans('messages.form1') }}</h4>
            <form action="">
                <div class="form-group">
                    <input type="email" class="form-control" id="email"  placeholder="Ваше имя">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" placeholder="Ваш телефон">
                </div>
            </form>
            <button class="btn btn-main  btn-about">{{ trans('messages.know_more2') }}!</button>
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
            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale().'/modal') }}" data-toggle="modal" data-target="#modalArt" class="btn btn-main btn-about">{{ trans('messages.write_learn') }}</a>
        </div>
    </div>
    @include('layouts.footer')

    <div class="modal fade" id="modalArt" tabindex="-1" role="dialog" aria-labelledby="modalArt" style="color:black">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> </div>
        </div>
    </div>

@endsection