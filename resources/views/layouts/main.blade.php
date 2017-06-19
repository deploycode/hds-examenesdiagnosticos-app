<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      @if (isset($post))
        {{$post->title}}
      @else
        Examenes Diagnósticos
      @endif
    </title>
    <meta name="description" content=
    "
    @if (isset($post))
      {{$post->title}}
      {{$post->content}}
    @else
      Exámenes diagnósticos le permite a su médico tratante un análisis preciso de su salud visual y es un factor clave en el diagostico y tratamiento de las enfermedades.
    @endif
    ">
    <meta name="keywords" content=" paquimetria    ,campo visual    ,examen de ojos    ,examen visual    ,test de vision    ,examen de optometria    ,examen oftalmologico    ,prueba de vision    ,examen de la vista    ,examen de vista    ,examen de los ojos    ,paquimetria corneal    ,campos visuales    ,campo visual computarizado    ,examen de vision    ,prueba visual    ,examen de campo visual    ,campimetria computarizada    ,prueba de vista    ,examen ocular    ,examen campo visual    ,examen de oftalmologia    ,tabla de agudeza visual    ,paquimetría    ,examen para los ojos    ,prueba de ojos    ,campo de vision    ,que es campo visual    ,examen optometria    ,pruebas oftalmologicas    ,examen optico    ,test de los ojos    ,estudio de campo visual    ,que es el campo visual    ,prueba de la vista    ,pruebas para la vista    ,test de vision de colores    ,examen de ojos bogota    ,campo visual examen    ,visual test    ,test oftalmologico    ,prueba oftalmologica    ,pruebas opticas    ,examen de campos visuales    ,prueba de vision optica    ,prueba de campo visual    ,prueba ocular oct    ,examen campo visual computarizado    ,estudio campos visuales    ,tonometria ocular    ,oftalmologia pruebas    ,pruebas para los ojos    ,campo visual normal    ,test visual de colores    ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!!Html::style('css/bootstrap/bootstrap.min.css')!!}
    {!!Html::style('css/main.css')!!}
    {!!Html::style('libs/addons/bootstrap/jquery.smartmenus.bootstrap.css')!!}
    {{-- {!!Html::style('js/bootstrap/modernizr-2.8.3.min.js')!!} --}}
  </head>
  <body>
    <!CONTENEDOR><section class="container-fluid">
        <header class="row">
          <!COLUMNA-1><div class="hidden-xs hidden-sm col-md-1 col-lg-1"></div>
          <!COLUMNA-2><div class="col-sm-6 col-md-5 col-lg-3">
            <a href="{!!URL::to('/')!!}"><img src= {{asset('img/logo.png')}} class="logo margen-top-14" alt="" /></a>
              <div class="btn-group-vertical bloque margen-top-14" role="group">
                <a href="{!!URL::to('/citas')!!}" class="a-btn tema">Solicite su cita</a>
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
          <!COLUMNA-3><div class="col-sm-6 col-md-6 col-lg-8 quitar-padding div-imagen">
            <img src= {{asset('img/img-header.jpg')}} class="img img-responsive pull-right hidden-xs img-imagen"/>
          <!FIN-COLUMNA-3></div>
        </header>
        <a name="contenido"></a>
        <!MENU><div class="row">
          <!-- MENU-MOVIL -->
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed btn-menu-movil" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar span-mi-icon"></span>
              <span class="icon-bar span-mi-icon"></span>
              <span class="icon-bar span-mi-icon"></span>
            </button>
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href='#'>Incio</a>
          </div>
          <!-- MENU DESKTOP -->
          <div class="collapse navbar-collapse div-menu-principal quitar-padding" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ul-principal">
              @foreach ($menus as $menu)
                <li class="li-uno-menu">
                  <a href="{{URL::to('examen/'.$menu->posts[0]->slug)}}" class="a-menu">
                    <img src= {{asset('img/'. $menu->icon)}} class="hidden-xs img-miniatura">
                    <h1 class="h1-menu">{{$menu->menu}} </h1>
                    <span class="caret hidden-lg hidden-md hidden-sm"></span>
                  </a>
                  @if ($menu->menu != "Biometría")
                  <ul class="dropdown-menu">
                    @foreach ($posts as $post)
                      @if ($post->menu_id == $menu->id)
                        <li>
                          {!!link_to_asset('examen/'.$post->slug.'/#contenido', $title = $post->title, $secure = null)!!}
                        </li>
                      @endif
                    @endforeach
                  </ul>
                @endif
                </li>
              @endforeach
            </ul>
          </div>
        </div><!FIN-MENU>
        <!CONTENIDO>

        @yield('section')
        <!FIN-CONTENIDO>
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
              <h1 class="h1-footer text-center">Contáctenos</h1>
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
    </section><!FIN-CONTENEDOR>
    <!SmartMenus jS plugin>
    {!!Html::script('js/bootstrap/jquery.min.js')!!}
    {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
    {!!Html::script('js/startmenu/jquery.smartmenus.js')!!}
    {!!Html::script('libs/addons/bootstrap/jquery.smartmenus.bootstrap.js')!!}
    {!!Html::script('js/main.js')!!}
  </body>
</html>
