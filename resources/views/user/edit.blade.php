@extends('layouts.dashboard')
@section('section')
  @include('request')
  {!!Form::model($user,['route'=>['user.update', $user->id], 'method' => 'PUT'])!!}
  @include('user.forms.usr')
  <div class="form-group">
    {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
  </div>
  {!!Form::close()!!}
@endsection
