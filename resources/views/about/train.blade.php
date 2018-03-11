@extends('others.modal')
@section('title-modal')
    {{ trans('messages.training_title') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
    <h4>{{ trans('messages.train_info') }}</h4>
    <br>
        {{ trans('messages.philosophy_Ac') }} EEHL - <b>{{ trans('messages.philosophy_Ac1') }}.</b>
    <br>
        {{ trans('messages.train_info1') }}
    <ul style="list-style-type: decimal; font-size: 16px; ">
        <li style="font-size: 16px; "> {{ trans('messages.train_info2') }} </li>
        <li style="font-size: 16px; "> {{ trans('messages.train_info3') }} </li>
        <li style="font-size: 16px; "> {{ trans('messages.train_info4') }}</li>
        <li style="font-size: 16px; "> {{ trans('messages.train_info5') }}</li>
        <li style="font-size: 16px; "> {{ trans('messages.train_info6') }}</li>
    </ul>
    <br>
    <h5 style="font-size: 16px; ">{{ trans('messages.train_info7') }} </h5>
        {{ trans('messages.train_info8') }}<br>
        {{ trans('messages.train_info9') }}<br>
        {{ trans('messages.train_info10') }} <b>{{ trans('messages.train_info11') }}</b>
     <br>
     <br>
        {{ trans('messages.train_info12') }}
    <br>
        {{ trans('messages.train_info13') }}
    <br>
        {{ trans('messages.train_info14') }}
    <br>
        {{ trans('messages.train_info15') }}
    </div>

@endsection