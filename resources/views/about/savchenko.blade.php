@extends('others.modal')
@section('title-modal')
    {{ trans('messages.savchenko') }}
@endsection
@section('content-modal')
<div class="img-modal">
    <img src="../../design/first_page/res/tr2.jpg" alt="{{ trans('messages.savchenko') }}"/>
</div>
<div class="text-modal">
    <br>
    <p> {{ trans('messages.savchenko_inf1') }}
    <p>{{ trans('messages.savchenko_inf2') }}:</p>
    
    <ul>
        <li>{{ trans('messages.savchenko_Wings') }}</li>
        <li>{{ trans('messages.severstal') }}</li>
        <li>{{ trans('messages.cska') }}</li>
        <li>{{ trans('messages.sokol') }}</li>
        <li>{{ trans('messages.hungarian_hc') }}</li>
        <li>{{ trans('messages.maribor') }}</li>
        <li>Ice Bears (Knoxville)</li> 
    </ul>
    <p>{{ trans('messages.savchenko_inf3') }}:
    <ul>
        <li>{{ trans('messages.savchenko_inf4') }}</li>
        <li>{{ trans('messages.ukr_team') }} (1995-2000) </li>
    </ul>
    </p>

    <p>{{ trans('messages.coach_career') }}: {{ trans('messages.coach_career_sav') }}, </p>
    <ul>
        <li>{{ trans('messages.savchenko_inf5') }} </li>
        <li>{{ trans('messages.savchenko_inf6') }} </li>
        <li>{{ trans('messages.savchenko_inf7') }} </li>
        <li>{{ trans('messages.savchenko_inf8') }}.</li>
    </ul>
   
    </p>
</div>

@endsection