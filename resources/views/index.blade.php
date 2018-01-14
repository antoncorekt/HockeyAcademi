@extends('layouts.main')
@section('title', 'Hockey Academy')
@section('content')
    <div class="row" id="main-text">
        <h1 class="h1-main-page">{{ trans('messages.dream') }} -</h1>
        <h1 class="h1-main-page">{{ trans('messages.dream1') }}</h1>
        <p id="main-text-p">
            {{ trans('messages.dream2') }}
            <br>{{ trans('messages.dream3') }}
        </p>
        <button class="btn btn-main">{{ trans('messages.know_more') }}</button>
    </div>

    <div class="footer-main">
        <div class="row" id="events">
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
@endsection