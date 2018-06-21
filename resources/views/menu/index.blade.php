@extends('layouts.dashboard')
@section('section')
  @include('flash::message')
  <table class="table">
    <thead>
      <th>Nombre</th>
      <th>Operaciones</th>
    </thead>
    @foreach ($menus as $menu)
      <tbody>
        <tr>
          <td>{{$menu->menu}}</td>
          <td>
            {!!Form::open(['route'=>['menu.destroy' , $menu->id], 'method'=>'DELETE'])!!}
              <a href="{{ route('menu.edit', $menu->id) }}"><i class="btn btn-primary glyphicon glyphicon-pencil"></i></a>
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>',
              [
                  'type' => 'button',
                  'class'=>'btn btn-danger',
                  'onclick' => 'if(confirm("¿Realmente desea eliminar este elemento? ")) {  $(form).submit(); }',
              ]) !!}
            {!!Form::close()!!}
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection
