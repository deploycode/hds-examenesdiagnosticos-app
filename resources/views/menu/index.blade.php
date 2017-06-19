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
              {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['type' => 'submit', 'class'=>'btn btn-danger']) !!}
            {!!Form::close()!!}
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection
