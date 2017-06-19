@extends('layouts.main-side')
@section('section')
  {!!Form::open(['route'=>'mail.store','method'=>'POST','class'=>'form-citas'])!!}
    <div class="form-group">
      @include('request')
      @include('flash::message')
    </div>
    <div class="form-group">
      {!!Form::label('Examen de ínteres:')!!}
      {!!Form::text('examen',null,['class'=>'form-control', 'placeholder'=>'Favor ingrese nombre del examen de interés',] )!!}
    </div>
    <div class="form-group">
      {!!Form::label('Nombre Completo:')!!}
      {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Favor ingrese su nombre completo', ])!!}
    </div>
    <div class="form-group">
      {!!Form::label('Numero de contacto:')!!}
      {!!Form::text('number',null,['class'=>'form-control', 'placeholder'=>'Favor ingrese un número fijo o celular para contactarle',] )!!}
    </div>
    <div class="form-group">
      {!!Form::label('Email:')!!}
      {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Favor ingrese un correo electrónico'])!!}
    </div>
    <div class="form-group text-right">
      {!!Form::submit('Solicitar',['class'=>'btn btn-info pull-right'])!!}
    </div>
  {!!Form::close()!!}
@endsection
