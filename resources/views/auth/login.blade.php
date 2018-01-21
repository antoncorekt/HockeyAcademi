<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 21.01.2018
 * Time: 16:45
 */?>
<h2>Enter a password</h2>
@php
    if(Session::has('message'))
        echo "<div class='alert alert-danger' >".Session::get("message")."</div>";
@endphp
<div class="row">
    {{Auth::check() }}
    <h3>Введите данные для входа</h3>
    {!! Form::open(['url' => ['auth/login']]) !!}
    <div class="form-group">
        {!! Form::label('email', 'Почта') !!}
        {!! Form::email('email', $value = null, $attributes = array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Пароль') !!}

        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::submit('Login', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}
    </div>
</div>
