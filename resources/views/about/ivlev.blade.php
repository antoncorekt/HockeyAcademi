@extends('others.modal')
@section('title-modal')
    {{ trans('messages.ivlev') }}
@endsection
@section('content-modal')
<div class="img-modal">
    <img src="../../design/first_page/res/tr3.jpg"/>
</div>
<div class="text-modal">
    <h4>{{ trans('messages.ivlev') }}</h4>
    <p>{{ trans('messages.ivlev_inf') }}. </p>
    <p>{{ trans('messages.coach_career') }}: </p>
    <ul>
        <li>2007-2008 – {{ trans('messages.dn_wolves') }}</li>
        <li>2008-2010 – ХК Донбасс</li>
        <li>2006-2010 – вице-президент федерации хоккея Донецкой области</li>
        <li>2008-2010 – вице-президент ХК Донбасс</li>
        <li>2016-2017 – тренер вратарей ДЮСШ ХК Донбасс</li>
        <li>2017-2018 – тренер ДЮСШ Льдинка 2007</li>
</ul>
</p> 
</div>

@endsection