@if (count($errors)>0)
  <div class="alert alert-danger" role="alert" style="padding:2em;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
