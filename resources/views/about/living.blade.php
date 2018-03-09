@extends('others.modal')
@section('title-modal')
    {{ trans('messages.concept_acc') }}
@endsection
@section('content-modal')
    <div class="text-modal" >
        <p style="font-size: 16px; line-height: 1.5em;">{{ trans('messages.living_info') }}</p>
        <p style="font-size: 16px; line-height: 1.5em;">{{ trans('messages.living_info1') }}</p>
        <p style="font-size: 16px; line-height: 1.5em;">{{ trans('messages.living_info2') }}</p>
        <p style="font-size: 16px; line-height: 1.5em;">{{ trans('messages.living_info3') }}</p>
    </div>
@endsection