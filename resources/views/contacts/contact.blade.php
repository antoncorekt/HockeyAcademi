@extends('layouts.main')
@section('title', 'Hockey Academy Contacts')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">

    <style>
        .dubl-num{
            margin-left: 75px;
        }
     </style>   

@endsection
@section('content')
    <div class="contacts" >
    <div class="col-lg-4 col-md-5 col-xs-9 contact-inf">
        <div>
            <h2 class="h1-main-page">{{ trans('messages.Location') }}</h2>
            {{ trans('messages.ul') }}
            <br>{{ trans('messages.city') }},
            <br>{{ trans('messages.voevod') }}
            <br>{{ trans('messages.country') }},
            <br>23-098
        </div>
        <div>
            <h2 class="h1-main-page">{{ trans('messages.Telephone') }}</h2>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3 col-xs-9 country-contact contact-inf">
                    {{ trans('messages.ukr') }}:
                </div>
                <div class="col-lg-8 col-md-6  col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png"></span>+38 067 235 63 73 ({{ trans('messages.savchenko') }})
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.rus') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    +7 929 617 73 65 ({{ trans('messages.parfionov') }})
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.bel') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png"></span>+38 067 235 63 73 ({{ trans('messages.savchenko') }})
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.eur') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png"></span>+48 53 739 49 69 ({{ trans('messages.parfionov') }})
                    <br> +48 79 445 20 36 ({{ trans('messages.savchenko') }})
                </div>
            </div>

        </div>
        <div>
            <h2 class="h1-main-page">Email</h2></div>
                hockeyacademy@gmail.com
        </div>
        <div class="col-lg-5 col-md-6 col-xs-9">
        <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {lat:49.426109, lng: 20.953203};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: uluru,
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTqq_-8TG_veJApZ--iOBXdvxTKHTyAr4&callback=initMap">
            </script>
        </div>
    </div>



@endsection