@extends('layouts.main')
@section('content')
    <style>
        body {
            background-image: none;
        }
    </style>
    <div class="container-fluid bg-1" id="about-1">
        <img src="../../design/first_page/res/about_main.png"/>
        <div class="row" id="main-text">
            <h1 class="h1-main-page">{{ trans('messages.dream') }} -</h1>
            <h1 class="h1-main-page">{{ trans('messages.dream1') }}</h1>
            <p id="main-text-p">
                {{ trans('messages.dream2') }}
                <br>{{ trans('messages.dream3') }}
            </p>
            <button class="btn btn-main">{{ trans('messages.know_more') }}</button>
        </div>
    </div>
@endsection