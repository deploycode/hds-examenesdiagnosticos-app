@extends('layouts.dashboard')
@section('section')
  @include('request')
  {!!Form::model($post,['route'=>['examen.update',$post->id],'method'=>'PUT','files'=>true])!!}
    @include('post.forms.post')
    <div class="row">
      @for ($i=0; $i<$images->count(); $i++)
        <div class="col-xs-4">
          <input type="file" name="image{{$i}}">
          <input type="hidden" name="image_id{{$i}}" value="{{$images[$i]->id}}">
          <img src= {{asset('posts/'. $images[$i]->route)}} class="img-thumbnail img-responsive miniatura" alt="" /><br>
          <input type="text" name="alt{{$i}}" value="{{$images[$i]->alt}}" class="form-control">
        </div>
      @endfor
    </div>
    <div class="form-group text-right">
      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    </div>
  {!!Form::close()!!}
@endsection
