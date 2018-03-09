@extends('others.modal')
@section('title-modal')
    {{ trans('messages.details') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
            {{ trans('messages.details_info') }}
        <br> {{ trans('messages.details_info1') }}
        <br>{{ trans('messages.details_info2') }}
        <ul >
            <li style="font-size: 16px">{{ trans('messages.ztrf') }} {{ trans('messages.parfionov') }};</li>
            <li style="font-size: 16px">{{ trans('messages.msmk') }} {{ trans('messages.savchenko') }};</li>
        </ul>
        {{ trans('messages.details_info3') }}
    <!-- <br>Всем зачисленным в Академию предоставляется вид на жительство. -->
        
        <hr>
        {{ trans('messages.details_info4') }}
        <br>
        {{ trans('messages.details_info5') }}
        <br> <b>{{ trans('messages.details_info6') }}</b> {{ trans('messages.details_info7') }}
        <br> {{ trans('messages.details_info8') }}
            <a href="http://poland-consult.com/vnzh-i-pmzh/karta-pobytu/kak-oformit.html">
            '{{ trans('messages.karta') }}'
            </a>
        ,{{ trans('messages.details_info9') }}
        <hr>
        {{ trans('messages.details_info10') }}
    </div>
@endsection