@extends('layouts.dashboard')
@section('section')
  @include('request')
  @include('flash::message')
  {!!Form::open(['route'=>'examen.store','method'=>'POST', 'files'=>true])!!}
    @include('post.forms.post')
    <div class="row">

      <div class="col-xs-4">
        <div class="form-group div_file">
          <p class="glyphicon glyphicon-picture" ></p>
          {!! Form::file('name1', ['class' => 'input_file']) !!}
        </div>
        <div class="form-group">
          {!!Form::label('content','Descripción de la imagen')!!}
          {!!Form::text('alt1', null,['class'=>'form-control', 'placeholder'=>'Ingrese la descripcion de la imagen'])!!}
        </div>
      </div>

      <div class="col-xs-4">
        <div class="form-group div_file">
          <p class="glyphicon glyphicon-picture" ></p>
          {!! Form::file('name2', ['class' => 'input_file']) !!}
        </div>
        <div class="form-group">
          {!!Form::label('content','Descripción de la imagen')!!}
          {!!Form::text('alt2', null,['class'=>'form-control', 'placeholder'=>'Ingrese la descripcion de la imagen'])!!}
        </div>
      </div>

      <div class="col-xs-4">
        <div class="form-group div_file">
          <p class="glyphicon glyphicon-picture" ></p>
          {!! Form::file('name3', ['class' => 'input_file']) !!}
        </div>
        <div class="form-group">
          {!!Form::label('content','Descripción de la imagen')!!}
          {!!Form::text('alt3', null,['class'=>'form-control', 'placeholder'=>'Ingrese la descripcion de la imagen'])!!}
        </div>
      </div>

    </div>

    <div class="form-group text-right">
      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}
@endsection
