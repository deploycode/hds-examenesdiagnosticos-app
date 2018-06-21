@extends('layouts.dashboard')
@section('section')
  @include('flash::message')
  <table class="table">
    <thead>
      <th>Nombre</th>
      <th>Menu</th>
      <th>Operaciones</th>
    </thead>
    @foreach ($posts as $post)
      <tbody>
        <td>{{$post->title}}</td>
        <td>{{$post->menu->menu}}</td>
        <td>
          {!!Form::open(['route'=>['examen.destroy',$post->id], 'method'=>'DELETE'])!!}
            <div class="form-group">
              <a href="{{ route('examen.edit', $post->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
                {!! Form::button('<span class="glyphicon glyphicon-trash"></span>',
                [
                    'type' => 'button',
                    'class'=>'btn btn-danger',
                    'onclick' => 'if(confirm("¿Realmente desea eliminar este elemento? ")) {  $(form).submit(); }',
                ]) !!}
            </div>
          {!!Form::close()!!}
        </td>
      </tbody>
    @endforeach
  </table>
@endsection
