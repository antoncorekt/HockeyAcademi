@extends('others.modal')
@section('title-modal')
    {{ trans('messages.parfionov') }}
@endsection
@section('content-modal')
<div class="img-modal">
    <img src="../../design/first_page/res/tr1.jpg" alt=" {{ trans('messages.parfionov') }}"/>
</div>
<div class="text-modal">
    <br>
    <p>{{ trans('messages.parf_info') }}</p>
    <p>{{ trans('messages.parf_info1') }} </p>
    <ul>
        <li>1992-2002 – {{ trans('messages.parf_info2') }} </li>
        <ul>
            <li>{{ trans('messages.parf_info3') }} </li>
            <li>{{ trans('messages.parf_info4') }} </li>
        </ul>
        <li> 1998 - {{ trans('messages.parf_info5') }}</li>
        <li> 2002 - {{ trans('messages.parf_info6') }}</li>
        <li> 2003 - {{ trans('messages.parf_info7') }}</li>
        <li> 2002-2003 {{ trans('messages.parf_info8') }}</li>
            <ul>
                <li>{{ trans('messages.parf_info9') }}</li>
                <li>{{ trans('messages.parf_info10') }}</li>
            </ul>

        <li>{{ trans('messages.parf_info11') }}</li>
        <li style="margin-bottom: -11px;">2005-2008 {{ trans('messages.parf_info12') }}</li>
            <ul>
                <li style="margin-bottom: -11px;">{{ trans('messages.parf_info13') }}</li>
                <li>{{ trans('messages.parf_info14') }}</li>
            </ul>

        <li>2008-2009{{ trans('messages.parf_info15') }}
            <ul style="margin-top: -19px;"> 
                <li>{{ trans('messages.parf_info16') }}</li>
            </ul>
        </li>
        <li>2009-2010 {{ trans('messages.parf_info17') }}</li>
        <li>{{ trans('messages.parf_info18') }}</li>
        <li>{{ trans('messages.parf_info19') }}
            <ul>
                <li>{{ trans('messages.parf_info20') }}</li>
            </ul>
        </li>
        <li> 2009-2010 {{ trans('messages.parf_info21') }}</li>
        <li> {{ trans('messages.parf_info22') }}</li>
        <li>{{ trans('messages.parf_info23') }}
            <ul>
                <li> {{ trans('messages.parf_info24') }}</li>
            </ul>
        </li>
        <li>{{ trans('messages.parf_info25') }}</li>
        <li style="margin-top: -10px;">{{ trans('messages.parf_info26') }}
            <ul>
                <li>{{ trans('messages.parf_info27') }}</li>
            </ul>
        </li>
    </ul>
    <p>{{ trans('messages.parf_info28') }}</p>
    <ul>
        <li>{{ trans('messages.parf_info29') }}</li>
        <li>{{ trans('messages.parf_info30') }}</li>
        <li>{{ trans('messages.parf_info31') }} </li>
    </ul>
    <p style="color: black">{{ trans('messages.parf_info32') }}</p>
</div>

@endsection