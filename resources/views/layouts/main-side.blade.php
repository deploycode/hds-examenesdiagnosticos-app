<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!!Html::style('css/bootstrap/bootstrap.min.css')!!}
  {!!Html::style('css/main.css')!!}
  {!!Html::style('libs/addons/bootstrap/jquery.smartmenus.bootstrap.css')!!}
  {!!Html::style('js/bootstrap//modernizr-2.8.3.min.js')!!}
</head>
  <body>
    <!CONTENEDOR><section class="container-fluid">
      <header class="row">
        <!COLUMNA-1><div class="hidden-xs hidden-sm col-md-1 col-lg-1"></div>
        <!COLUMNA-2><div class="col-sm-6 col-md-5 col-lg-3">
          <!-- LOGO DE EXAMENES --><a href="{!!URL::to('/')!!}"><img src= {{asset('img/logo.png')}} class="logo margen-top-14" alt="" /></a>
          <div class="btn-group-vertical bloque margen-top-14" role="group">
            <a href="{!!URL::to('/')!!}" class="a-btn tema">Regresar al inicio</a>
            <a href="{!!URL::to('/posts/buenos-habitos-para-el-cuidado-de-la-vision.pdf')!!}" target="_blank" class="a-btn tema"><p>Buenos hábitos para el cuidado de la visión</p></a>
            <ul class="nav nav-pills nav-sidebar col-xs-12 quitar-padding">
                <li role="presentation" class="dropdown li-sidebar">
                  <a class="dropdown-toggle a-sidebar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <h1 class="h1-sidebar"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Seleccione un examen</h1>
                    <span class="caret hidden-lg hidden-md hidden-sm"></span></a>
                  <ul class="dropdown-menu">
                    @foreach ($posts as $post)
                      <li>
                         {!!link_to_asset('examen/'.$post->slug.'/#contenido', $title = $post->title, $secure = null)!!}
                      </li>
                    @endforeach
                  </ul>
                </li>
            </ul>
          </div>
        <!FIN-COLUMNA-2></div>
        <!COLUMNA-3><div class="hidden-xs hidden-sm col-md-1 col-lg-2"></div>
        <!COLUMNA-4><div class="col-sm-6 col-md-6 col-lg-6 quitar-padding tema div-columna-3">
          @yield('section')
        <!FIN-COLUMNA-4></div>
      </header>
      <!FOOTER>
      <footer class="row footer-superior">
        <div class="col-lg-4">
          <h1 class="h1-footer text-center">¿Quiénes somos?</h1>
          <p style="text-align:justify">
            Somos alta tecnología logrando obtener resultados
            precisos en los exámenes entregados a nuestros pacientes.
            Somos experiencia, servicio y calidad, facilitando a
            la medicina particular sus procesos de diagnóstico,
            logrando resultados confiables y convirtiéndonos a su
            vez en el complemento médico y legal de la oftalmología
            en el país.
          </p>
        </div>
        <div class="col-lg-4">
          <h1 class="h1-footer text-center">Contáctanos</h1>
          <p>
            Horario de atención: 7:00am - 7:00pm            <br>
            Tel: 6164736 ext: 150                           <br>
            Dirección: Calle 86a #13a-09 Consultorio: 301   <br>
          </p>
        </div>
        <div class="col-lg-4 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d295.5603317369336!2d-74.05346907451656!3d4.6704866480221545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9af4b2bf618f%3A0xcb702440814d73ae!2sCl.+86a+%2313a-9%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2ses!4v1478796985179" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </footer>
      <footer class="row footer-fondo">
        <div class="col-lg-12 text-center ">
          <p>
            Exámenes Diagnósticos: Teléfono: 6164736 extensión: 150. Dirección: calle 86a #13a-09 consultorio 301. E-mail: auxiliar@examenesdiagnosticos.com.co<br>
            La información médica aquí descrita no remplaza una valoración oftalmológica.<br>
            La reproducción de texto o imagénes incluidas en este sitio web esta estrictamente prohibida.
          </p>
        </div>
      </footer>
      <!FIN-FOOTER>
    <!FIN-CONTENEDOR></section>
    {!!Html::script('js/bootstrap/jquery.min.js')!!}
    {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
    {!!Html::script('js/startmenu/jquery.smartmenus.js')!!}
    {!!Html::script('libs/addons/bootstrap/jquery.smartmenus.bootstrap.js')!!}
    {!!Html::script('js/main.js')!!}
    <!SmartMenus jS plugin>
  </body>
</html>
