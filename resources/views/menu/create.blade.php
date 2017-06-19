@extends('layouts.dashboard')
@section('section')
  {!!Form::open(['route'=>'menu.store', 'method'=>'POST'])!!}
    @include('flash::message')
    @include('request')
    @include('menu.form.menu')
    <div class="form-group text-right">
      {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}
@endsection
