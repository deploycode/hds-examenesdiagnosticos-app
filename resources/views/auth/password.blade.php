<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    {!!Html::style('css/bootstrap/bootstrap.min.css')!!}
    {!!Html::style('css/dashboard/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        @include('flash::message')
        @include('request')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingreso a Administrador</h3>
                    </div>
                    <div class="panel-body">
                      {!!Form::open(['url'=>'/password/email'])!!}
                            <fieldset>
                                <div class="form-group">
                                  {!!Form::label('email', 'Correo')!!}
                                  {!!Form::text('email', null,['class'=>'form-control','placeholder'=>'Ingrese su correo'])!!}
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                {!!Form::submit('Recibir correo', ['class'=>'btn btn-success btn-lg btn-block'])!!}
                            </fieldset>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!!Html::script('js/bootstrap/jquery.min.js')!!}
    {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
    {!!Html::script('js/dashboard/metisMenu.min.js')!!}
    {!!Html::script('js/dashboard/sb-admin-2.js')!!}
</body>
</html>
