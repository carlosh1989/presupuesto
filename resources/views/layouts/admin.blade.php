<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bower/materialize/dist/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bower/sweetalert/dist/sweetalert.css')}}">     
    <link rel="stylesheet" href="{{asset('bower/components-font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower/pickadate/lib/compressed/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('bower/pickadate/lib/compressed/themes/default.date.css')}}">
    <link rel="stylesheet" href="{{asset('bower/pickadate/lib/themes/rtl.css')}}">
    <title>ReCarLine</title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
    body{
        background: #E3E3E3;
    }

    
    </style>
 <!--      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->
</head>
<body>



    <div id="app">
       
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="blue-text" href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
</ul>
<nav>
  <div class="nav-wrapper  red darken-2">
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
    <a href="{{ url('/')}}" class="brand-logo"> {{ucfirst(Auth::user()->role)}}</a>
    <ul class="right hide-on-med-and-down">
         @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
         @else
      <!-- Dropdown Trigger -->
      <li><a class="fa fa-search fa-2x" href="#" id="mostrarBusqueda"></a></li>
      <li><a class="dropdown-button" href="#" data-hover="false" data-activates="dropdown1"> {{ Auth::user()->email }}<i class="material-icons right">arrow_drop_down</i></a></li>
         @endif
    
    </ul>
  </div>
</nav>
    <ul id="slide-out" class="side-nav">
      <li><a href="{{url('/admin')}}">Inicio</a></li>
      <li><a href="{{url('/admin/archivos/ingresar')}}">Ingresar archivo</a></li>
      <li><a href="{{url('/admin/archivos/')}}">Archivos</a></li>
      <li><a href="{{url('/admin/publicaciones')}}">Publicaciones</a></li>
      <li><a href="{{url('/admin/cuentas/ingresar')}}">Cuenta Ingresar</a></li>
    </ul>
  

  <nav style="display:none;background:#fff;color:#444;" id="busqueda">
    <div class="nav-wrapper">
      <form autocomplete="off" action="{{url('/admin/busquedaProcesar')}}" method="POST">
       {{ csrf_field() }}
        <div class="input-field">
          <input name="search" id="search" type="search" placeholder="Que busca?" class="autocomplete" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i id="closeSearch" class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{asset('bower/materialize/dist/js/materialize.min.js')}}"></script>
    <script src="{{asset('bower/pickadate/lib/compressed/picker.date.js')}}"></script>
    <script src="{{asset('bower/pickadate/lib/compressed/translations/es_ES.js')}}"></script>
    <script src="{{asset('bower/formatter.js/dist/jquery.formatter.min.js')}}"></script>
  @yield('content')
  @include('sweet::alert')
 <script>
        
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $(".dropdown-button").dropdown();
      </script>
      <script>
        (function($){
  $(function(){


    // Plugin initialization

    $('.slider').slider({full_width: true});
    $('.parallax').parallax();
    $('.datepicker').pickadate({
    // Escape any “rule” characters with an exclamation mark (!).
    format: 'yyyy/mm/dd',
    formatSubmit: 'yyyy/mm/dd',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix'
    });
    $('select').material_select();

    $('.chips-placeholder').material_chip({
      placeholder: 'Enter a tag',
      secondaryPlaceholder: '+Tag',
    });

    $('.chips').material_chip();
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );


    $('ul.tabs').tabs();
$('.modal').modal();
        

  }); // end of document ready
})(jQuery); // end of jQuery name space
      </script>

<!-- BOTON DE BUSQUEDA -->
<script>
$(document).ready(function(){
    $("#mostrarBusqueda").click(function(){
        $("#busqueda").toggle();
    });
});
</script>

    </div>
    <!-- REFRESCAR PAGINA BACK -->
<script type="text/javascript" language="javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>
<input type="hidden" id="refreshed" value="no">
</body>
</html>
