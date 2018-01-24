
@extends('others.modal')
@section('title-modal')
    Записаться на обучение
@endsection
@section('content-modal')
    {!! Form::open(['url' => ['enrol'], 'class'=>'form-group', 'id' => 'enrol']) !!}

    <h4>Заполните следующие поля:</h4>
    {!! Form::open(['url' => ['enrol']]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Ваше имя:') !!}
        {!! Form::text('name', $value = null, $attributes = array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Почта: ') !!}
        {!! Form::email('email', $value = null, $attributes = array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Телефон: ') !!}
        {!! Form::text('phone', $value = null, $attributes = array('class' => 'form-control', 'id' => 'phone')) !!}
    </div>

    {!! Form::submit('Send', ['class' => 'btn btn-default', 'id' => 'btn']) !!}
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    {!! Form::close() !!}

@endsection
<script>
    $(document).ready(function() {
        $('#phone').inputmask("+48 999 999 999", { showMaskOnFocus: true, showMaskOnHover: true} );
       // $('#feedback').validator();
        console.log($('#phone')[0].checkValidity());
    });
</script>