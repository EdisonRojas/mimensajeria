<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{ HTML::style('assets/css/bootstrap.min.css') }}
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Inicio del header donde se encuentra incluido el menú responsive -->
    <header>
    	<!--inicio zona navbar-->
    </header><!-- Fin del header y menú responsive -->
 	
    @section('contenido')
          
    @show
    <!-- ##### Archivos js de la app ####-->    
    <!-- jQuery (necesario para los plugins de javaScript que usa Bootstrap) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
    <!-- Archivos js de Bootstrap  -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 </body>
</html>