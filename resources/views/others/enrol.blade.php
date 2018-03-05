
@extends('others.modal')
@section('title-modal')
    {{ trans('messages.write_learn_form') }}
@endsection
@section('content-modal')
    {!! Form::open(['url' => ['enrol'], 'class'=>'form-group', 'id' => 'enrol']) !!}

    <h4>{{ trans('messages.fill_fields') }}:</h4>

    <div class="form-group">
        {!! Form::label('name', trans('messages.your_name')) !!}
        {!! Form::text('name', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' =>  trans('messages.placeholder_name'), 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', trans('messages.email')) !!}
        {!! Form::email('email', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "ivan@email.com",'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', trans('messages.phone')) !!}
        {!! Form::text('phone', $value = null, $attributes = array('class' => 'form-control', 'id' => 'phone',
        'placeholder' => "+380004535672", 'required' => true)) !!}
        <p id="error"></p>
    </div>

    <div class="form-group">
        {!! Form::label('nameHock', trans('messages.nameHock')) !!}
        {!! Form::text('nameHock', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => trans('messages.placeholder_name'), 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('height', trans('messages.height')) !!}
        {!! Form::number('height', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "170", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('weight',  trans('messages.weight')) !!}
        {!! Form::number('weight', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "80", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', trans('messages.age')) !!}
        {!! Form::number('age', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' => "14", 'required' => true)) !!}
    </div>

    <div class="form-group">
        {!! Form::label('add', trans('messages.add_form')) !!}
        {!! Form::textarea('add', $value = null, $attributes = array('class' => 'form-control',
        'placeholder' =>  trans('messages.placeholder_add_form'))) !!}
    </div>



    {!! Form::submit(trans('messages.send'), ['class' => 'btn btn-default', 'id' => 'btn']) !!}
    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('messages.cancela') }}</button>
    {!! Form::close() !!}

@endsection
<script>
    $(document).ready(function() {
        $('#phone').keyup(function() {
            var re = /^[\+]?[0-9]{3}[-\s\.]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{4,6}$/im;
            var valid = re.test($(this).val());
            if (valid) $("#error").html("");
            else $("#error").html("Телефон неверен");
        });
    });
</script>