@extends('others.modal')
@section('title-modal')
    {{ trans('messages.where') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
        <p>
            {{ trans('messages.school1') }}
            <br>{{ trans('messages.school2') }}
            <br>{{ trans('messages.school3') }}
            {{ trans('messages.school4') }}
           <br> {{ trans('messages.school5') }}
        </p>
        <p>
            {{ trans('messages.school6') }}
            {{ trans('messages.school7') }}
        </p>
        <p>
            {{ trans('messages.school8') }}
        </p>
    </div>
@endsection