@extends('others.modal')
@section('title-modal')
    {{ trans('messages.ivlev') }}
@endsection
@section('content-modal')
<div class="img-modal">
    <img src="../../design/first_page/res/tr3.jpg" alt=" {{ trans('messages.ivlev') }}"/>
</div>
<div class="text-modal">
    <h4>{{ trans('messages.ivlev') }}</h4>
    <p>{{ trans('messages.ivlev_inf') }}. </p>
    <p>{{ trans('messages.coach_career') }}: </p>
    <ul>
        <li>2007-2008 – {{ trans('messages.dn_wolves') }}</li>
        <li>2008-2010 – {{ trans('messages.donbass') }}</li>
        <li>2006-2010 – {{ trans('messages.ivlev_inf1') }}</li>
        <li>2008-2010 – {{ trans('messages.ivlev_donbass') }}</li>
        <li>2016-2017 – {{ trans('messages.ivlev_inf2') }}</li>
        <li>2017-2018 – {{ trans('messages.ivlev_inf3') }} </li>
</ul>
</p> 
</div>

@endsection