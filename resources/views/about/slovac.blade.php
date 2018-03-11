@extends('others.modal')
@section('title-modal')
    {{ trans('messages.Slovakia_tour') }}
@endsection
@section('content-modal')
    <div class="text-modal" style="font-size: 16px; line-height: 1.5em;">
        <p>
            {{ trans('messages.slovac_info') }}
        </p>
        <p>{{ trans('messages.slovac_info1') }}</p>
        <p>{{ trans('messages.slovac_info2') }} - <b>23</b>.</p>
        <p>{{ trans('messages.slovac_info3') }} - <b>44</b>.</p>
        <p>{{ trans('messages.slovac_info4') }}</p>
        <p>{{ trans('messages.slovac_info5') }}</p>
    </div>
@endsection