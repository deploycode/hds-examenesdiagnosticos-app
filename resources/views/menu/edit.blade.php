@extends('layouts.dashboard')
@section('section')
  @include('request')
  {!!Form::model($menu, ['route'=>['menu.update', $menu->id], 'method'=>'PUT'])!!}
    @include('menu.form.menu')
    <div class="form-group text-right">
      {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}
@endsection
