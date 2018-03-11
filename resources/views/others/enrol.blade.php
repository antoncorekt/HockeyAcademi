
@extends('others.modal')
@section('title-modal')
    Записаться на обучение
@endsection
@section('content-modal')
    {!! Form::open(['url' => ['enrol'], 'class'=>'form-group', 'id' => 'enrol']) !!}

    <h4>Заполните следующие поля:</h4>

    <div class="form-group">
        {!! Form::label('name', 'Ваше имя:') !!}
        {!! Form::text('name', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "Иван Иванов", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Почта: ') !!}
        {!! Form::email('email', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "ivan@email.com",'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Мобильный телефон: ') !!}
        {!! Form::text('phone', $value = null, $attributes = array('class' => 'form-control', 'id' => 'phone',
        'placeholder' => "+380004535672", 'required' => true)) !!}
        <p id="error"></p>
    </div>

    <div class="form-group">
        {!! Form::label('nameHock', 'Имя хоккеиста:') !!}
        {!! Form::text('nameHock', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "Вася Иванов", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('height', 'Рост в см:') !!}
        {!! Form::number('height', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "170", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('weight', 'Вес в кг:') !!}
        {!! Form::number('weight', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "80", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Возраст:') !!}
        {!! Form::number('age', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "14", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('add', 'Дополнительная инфомация (команды, школы):') !!}
        {!! Form::textarea('add', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "Напишите здесь в каких командах играл ваш хоккеист, в школах учился и чемпионатах участвовал")) !!}
    </div>



    {!! Form::submit('Send', ['class' => 'btn btn-default', 'id' => 'btn']) !!}
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    {!! Form::close() !!}

@endsection
<script>
   /* $(document).ready(function() {
        $('#phone').inputmask("+48 999 999 999", { showMaskOnFocus: true, showMaskOnHover: true} );
       // $('#feedback').validator();
        console.log($('#phone')[0].checkValidity());
    });*/
    $(document).ready(function() {
        $('#phone').keyup(function() {
            var re = /^[\+]?[0-9]{3}[-\s\.]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{4,6}$/im;
            var valid = re.test($(this).val());
            if (valid) $("#error").html("");
            else $("#error").html("Телефон неверен");
        });
    });
</script>