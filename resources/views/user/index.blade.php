@extends('layouts.dashboard')
@section('section')
  @include('flash::message')
  <div class="users">
    <table class="table">
      <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Operaciones</th>
      </thead>
      @foreach ($users as $user)
        <tbody>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            {!!Form::open(['route'=>['user.destroy' , $user->id], 'method'=>'DELETE'])!!}
              <a href="{{ route('user.edit', $user->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>',
              [
                  'type' => 'button',
                  'class'=>'btn btn-danger',
                  'onclick' => 'if(confirm("¿Realmente desea eliminar este elemento? ")) {  $(form).submit(); }',
              ]) !!}
            {!!Form::close()!!}
          </td>
        </tbody>
      @endforeach
    </table>
    {!!$users->render()!!}
  </div>
@endsection
