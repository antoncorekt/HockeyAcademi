@extends('layouts.main')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">

    <meta name="description" content="{{ trans('messages.description_contacts') }}">
    <title>East EHL - Contact</title>
    <style>
        .dubl-num{
            margin-left: 75px;
        }
     </style>   

@endsection
@section('content')
    <div class="contacts"  itemscope itemtype="http://schema.org/Organization">
    <div class="col-lg-4 col-md-5 col-xs-9 contact-inf">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <h2 class="h1-main-page">{{ trans('messages.Location') }}</h2>
            <span itemprop="streetAddress">{{ trans('messages.ul') }}</span>
            <br><span itemprop="addressLocality">{{ trans('messages.city') }},
            <br>{{ trans('messages.voevod') }}
            <br>{{ trans('messages.country') }},</span>
            <br><span itemprop="postalCode">23-098</span>
        </div>
        <div>
            <h2 class="h1-main-page">{{ trans('messages.Telephone') }}</h2>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3 col-xs-9 country-contact contact-inf">
                    {{ trans('messages.ukr') }}:
                </div>
                <div class="col-lg-8 col-md-6  col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png" alt="viber-icon"></span>
                    <span itemprop="telephone">+38 067 235 63 73</span><span itemprop="alumni" itemscope itemtype="http://schema.org/Person">(<span itemprop="name">{{ trans('messages.savchenko') }}</span>)</span>
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.rus') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    <span itemprop="telephone">+7 929 617 73 65</span><span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
                        (<span itemprop="name">{{ trans('messages.parfionov') }}</span>)</span>
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.bel') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png" alt="viber-icon-1"></span>
                    <span itemprop="telephone">+38 067 235 63 73</span><span itemprop="alumni" itemscope itemtype="http://schema.org/Person">(<span itemprop="name">{{ trans('messages.savchenko') }}</span>)</span>
                </div>
            </div>
            <div class="row tels-row">
                <div class="col-lg-3 col-sm-3  col-xs-9 country-contact contact-inf">
                    {{ trans('messages.eur') }}:
                </div>
                <div class="col-lg-8 col-md-6 col-xs-9 tel">
                    <span class="contact-ico"><img src="../images/viber.png" alt="viber-icon-2"></span>
                    <span itemprop="telephone">+48 53 739 49 69</span>
                    <span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
                        (<span itemprop="name">{{ trans('messages.parfionov') }}</span>)</span>
                    <br><span itemprop="telephone"> +48 79 445 20 36</span>
                    <span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
                        (<span itemprop="name">{{ trans('messages.savchenko') }}</span>)</span>
                </div>
            </div>

        </div>
        <div>
            <h2 class="h1-main-page">Email</h2></div>
            <span itemprop="email">academy@ehlab.org</span>
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