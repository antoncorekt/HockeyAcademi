@extends('others.modal')
@section('title-modal')
    {{ trans('messages.ruzhana') }}
@endsection
@section('content-modal')
    <div class="img-modal">
        <img src="/../../design/first_page/res/tr4.jpg"/>
    </div>
    <div class="text-modal">
        <br>
       <p>{{ trans('messages.coach_first_class') }}. {{ trans('messages.ruzhana_inf') }}.</p>
        <p>{{ trans('messages.experience') }}:</p>
        <ul>
            <li>1994 - 2002 - {{ trans('messages.ruzhana_inf1') }};</li>
            <li>2000 - 2016 - {{ trans('messages.ruzhana_inf2') }} Publiczne Gimnazjum w Krynicy-Zdroju;</li>
            <li>2002 - настоящее время - {{ trans('messages.ruzhana_inf3') }};</li>
            <li>2016 - настоящее время - {{ trans('messages.ruzhana_inf4') }} .</li>
        </ul>
        <p>{{ trans('messages.success_inf') }}:</p>
        <ul>
            <li>{{ trans('messages.ruzhana_inf5') }}</li>
            <li>{{ trans('messages.ruzhana_inf6') }}</li>
        </ul>
        <p>{{ trans('messages.pupils') }}:</p>
        <ul>
            <li>{{ trans('messages.Grzegorz_Pasiut') }};</li>
            <li>{{ trans('messages.Radosław_Galant') }};</li>
            <li>{{ trans('messages.Jakub_Witecki') }}.</li>
        </ul>
    </div>
@endsection