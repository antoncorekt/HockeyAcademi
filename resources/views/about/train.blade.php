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
    <h5 style="font-size: 16px; ">А что мы можем контролировать? </h5>
    Только тренировочный процесс, подготовку. 
    Традиционно мы говорим о результате - как о цели. <br>
    А результат мы не можем контролировать. 
    А значит ценность не в результате, а в росте игроков, <br>
     это мы можем контролировать и это и есть <b>ЦЕЛЬ - воспитание игроков!</b>

     <br>
     <br>
    Количество тренировок на льду: 5 раз в неделю по 1.30 часа плюс в выходной день,
    дополнительно по желанию, есть еще 1.30 льда для индивидуальной работы.
    <br>
    Каждый день, до и после тренировки, разминка и заминка, минимум по 30 минут.
    <br>
    А так же восстановительные мероприятия, бассеин, сауна.
    <br>
    Занятия по теории с использованием тематического материала, просмотров игр НХЛ, КХЛ,
     Чемпионатов Мира и Олимпийских Игр С дальнейшим разбором и анализом.
       

    </div>

@endsection