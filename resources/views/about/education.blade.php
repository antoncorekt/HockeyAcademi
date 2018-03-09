@extends('others.modal')
@section('title-modal')
    {{ trans('messages.education_title') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
        <p>
            {{ trans('messages.education_info') }}
            <br>{{ trans('messages.education_info1') }}
            <br>{{ trans('messages.education_info2') }}
        </p>
        <p>
            {{ trans('messages.education_info3') }}
            <br>{{ trans('messages.education_info4') }}
            <br>{{ trans('messages.education_info5') }}
            <br>{{ trans('messages.education_info6') }}
            <br>{{ trans('messages.education_info7') }}
            <br>{{ trans('messages.education_info8') }}

            <h5> <a href="http://www.isttravel.ru/index.pl?act=PRODUCT&id=214" target="_blank">
                    {{ trans('messages.education_info9') }}</a>
            </h5>
        </p>
    </div>
@endsection