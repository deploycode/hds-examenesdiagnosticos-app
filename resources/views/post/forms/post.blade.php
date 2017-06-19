<div class="form-group">
  {!!Form::label('menu','Seleccione un menu: ')!!}
  {!!Form::select('menu_id', $menus,null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
  {!!Form::label('title','Nombre del examen')!!}
  {!!Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del examen'])!!}
</div>

<div class="form-group">
  {!!Form::label('content','Contenido')!!}
  {!!Form::textarea('content',null,['id'=>'txa','class'=>'form-control'])!!}
</div>

{!!Html::script('libs/ckeditor/ckeditor.js')!!}
<script> CKEDITOR.replace("txa"); </script>
