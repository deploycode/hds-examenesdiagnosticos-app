@extends('layouts.main')
@section('section')
  <div class="row" style="background-color:white;">

    <ol class="breadcrumb">
      <li><a href="{!!URL::to('/')!!}">Inicio</a></li>
      @foreach ($menus as $menu)
        @if($post->menu_id==$menu->id)
          <li class="active">{{$menu->menu}}</li>
        @endif
      @endforeach
      <li class="active">{{$post->title}}</li>
    </ol>

    <article class="container" style="margin-bottom:5em;">
      <div class="row" style="margin-bottom:5em;">

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 text-left">
          @foreach ($menus as $menu)
            @if($post->menu_id==$menu->id && $post->menu_id<>5)
              <img src= {{asset('img/'. $menu->icon)}} class="img ver-miniatura" alt="" />
            @endif
          @endforeach
          @foreach ($images as $image)
            @if ($image->route && $image->post->menu_id==5)
              <img src= {{asset('posts/'. $image->route)}} class="img-thumbnail img-responsive miniatura" alt="" /><br>
              <label for="" style="padding:0.5em">{{$image->alt}}</label>
            @endif
          @endforeach
        </div>

        <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
          <h1 class="ver-h1"> {!!$post->title!!} </h1>
          <p>  {!!$post->content!!} </p>
        </article>

      </div>

      <div class="row">
        @for ($i=0; $i < $images_number; $i++)
          @if($images_number==2)

            @if ($i==0)
              <div class="col-xs-12 col-sm-4 text-center">
                <img src= {{asset('posts/'. $images[$i]->route)}} class="img-thumbnail  miniatura" alt="" /><br>
                <label for="" style="padding:0.5em">{{$images[$i]->alt}}</label>
              </div>
            @else
              <div class="col-xs-12 col-sm-8 text-center">
                <img src= {{asset('posts/'. $images[$i]->route)}} class="img-thumbnail  miniatura2" alt="" /><br>
                <label for="" style="padding:0.5em">{{$images[$i]->alt}}</label>
              </div>
            @endif

          @elseif($images[$i]->post->menu_id<>5)
            <div class="col-xs-12 col-sm-4 text-center">
              <img src= {{asset('posts/'. $images[$i]->route)}} class="img-thumbnail  miniatura" alt="" /><br>
              <label for="" style="padding:0.5em">{{$images[$i]->alt}}</label>
            </div>
          @endif

        @endfor
      </div>
    </article>
  </div>


@endsection
