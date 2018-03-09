@extends('others.modal')
@section('title-modal')
    {{ trans('messages.selects_title') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
        <p>{{ trans('messages.selects_info') }} <b>'EEHL'</b>
            {{ trans('messages.selects_info1') }} </p>
        <p>{{ trans('messages.selects_info2') }}</p>
        <p>{{ trans('messages.selects_info3') }}</p>
    <ul>
        <li style="font-size: 16px; ">{{ trans('messages.selects_tur') }}</li>
        <li style="font-size: 16px; ">{{ trans('messages.selects_tur1') }}</li>
        <li style="font-size: 16px; ">{{ trans('messages.selects_tur2') }}</li>
    </ul>
    <a href="http://www.lgstours.com/page/show/1001318--" target="_blank">{{ trans('messages.select_more_link') }}</a>
    </div>
@endsection