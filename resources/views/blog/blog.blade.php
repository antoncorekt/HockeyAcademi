@extends('layouts.main')
@section('title', 'Hockey Academy Blog')

@section('header')
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <script type="text/javascript" src="{{asset('js/modalWindow.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/paginateAjax.js')}}"></script>

@endsection
<style>
    body {
        background-image: none;
        background-color: white !important;
    }
</style>
@section('content')
    <div class="container-fluid bg-1 blog-1">
        <img src="/../public/images/blog_img.png"/>
        <div class="row" id="blog-text">
            <h1 class="h1-main-page h1-about" >БЛОГ ХОККЕЙНОЙ</h1>
            <h1 class="h1-main-page h1-about">АКАДЕМИИ</h1>
        </div>
    </div>
    <div class="container-fluid bg-2">
        <div class="row blog-text">
            @if (isset($articles) && count($articles) > 0)
                <section class="articles">
                    @include('blog.listOfArticles')
                </section>
            @endif
                @if (isset($post))
                    <section class="articles">
                        @include('blog.article')
                    </section>
                @endif
        </div>

    </div>
    @include('layouts.footer')
@endsection