@extends('layouts.main')
@section('title', 'Hockey Academy Contacts')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
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
           {{ trans('messages.ukr') }}: +38 050 000 00 00
            <br>{{ trans('messages.rus') }}: +79 009 000 00 00
            <br>{{ trans('messages.bel') }}: +37 500 000 00 00
            <br>{{ trans('messages.eur') }}: +48 733 000 00 00
        </div>
        <div>
            <h2 class="h1-main-page">Email</h2></div>
                hockeyacademy@gmail.com
        </div>
        <div class="col-lg-5 col-md-6 col-xs-9">
        <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {lat:49.409461, lng: 20.956848};
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