<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 23.01.2018
 * Time: 12:57
 */

?>
@extends('layouts.main')

@section('header')
    <meta name="description" content="{{ trans('messages.description_blog') }}">
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <script src="{{asset('js/modalWindow.js')}}"></script>
    <script src="{{asset('js/paginateAjax.js')}}"></script>
    <title>East EHL - 404</title>
    <style>
        body {
            background-image: none;
            background-color: white !important;
        }
    </style>

@endsection

@section('content')
    <div class="container-fluid bg-1 blog-1">
        <img src="/../public/images/blog_img.png" alt="hockey-player-blog"/>
        <div class="row" id="blog-text">
            <h1 class="h1-main-page h1-about" >404</h1>
        </div>
    </div>
     <div class="container my-404">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h3 class="h1-main-page h1-about">Oops!</h3>
                        </h1>
                    <h3 class="h1-main-page h1-about">
                        404 Not Found</h3>
                    <div class="error-details">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

