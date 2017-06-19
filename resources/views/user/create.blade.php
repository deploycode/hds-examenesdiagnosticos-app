@extends('layouts.dashboard')
@section('section')
  @include('request')
  {!!Form::open(['route'=>'user.store', 'method' => 'POST'])!!}
    @include('user.forms.usr')
    <div class="form-group text-right">
      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}
@endsection
