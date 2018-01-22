<?php
/**
 * Created by PhpStorm.
 * User: Nadine
 * Date: 21.01.2018
 * Time: 16:45
 */?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<h3>Website for renovation</h3>
@php
    if(Session::has('message'))
        echo "<div class='alert alert-danger' >".Session::get("message")."</div>";
@endphp

<div class="row">
    {{Auth::check() }}
    <h3>If you are admin or developer</h3>
    {!! Form::open(['url' => ['auth/login']]) !!}
    <div class="form-group">
        {!! Form::label('login', 'Login:') !!}
        {!! Form::text('login', $value = 'admin', $attributes = array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}

        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">

        {!! Form::submit('Login', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}
    </div>
</div>
</div>