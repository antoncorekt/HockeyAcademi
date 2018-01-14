@extends('layouts.main')
@section('content')
    {{App\Http\Middleware\LocaleMiddleware::getLocale()}}
@endsection