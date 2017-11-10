<!doctype html>
<html lang=es>
<meta charset="utf-8" >
<head>
<title> Ingreso</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="icon" href="half_life.ico" type="image/x-icon"/>
  </head>
  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_yZjT4xp0CdPMyMfbRbgtA");
   })();
</script>
<body>
<link href="css/proyecto.css" rel="stylesheet" >
<link href="css/proyecto2.css" rel="stylesheet" >
@include('navbar')
<p id="parrafo"> Ingrese los datos que se presentan a continuacion</p>
<form  id="myform" method="post">
<div class="col-md-12 order-md-2">
<br>
<label id="correo">correo:</label>
<br>
<input type="text" name="reply_to" placeholder="Introduzca su correo">
<br>
<label id="nombre">nombre:</label>
<br>
<input type="text" name="from_name" placeholder="Introduzca su nombre">
<br>
<label id="apellido">apellido:</label>
<br>
<input type="text" name="to_lastname" placeholder="Introduzca su apellido">
<br>
<label id="para">para:</label>
<br>
<input type="text" name="to_name" placeholder="A quien desea contactar" >
<br>
<label id="cedula"> cedula </label>
<br>
<input type="text" name="cedula_html" placeholder="Introduzca su cedula">
<br>
<label id="numero"> numero </label>
<br>
<input type="text" name="number_html" placeholder="Introduzca su numero">
<br>
<label id="contacto">razon para contactarnos:</label>
<br>
<textarea class="offset-md-3 col-md-6 offset-md-3 col-xs-9" rows="7" class="form-control" name="message_html" placeholder="Escriba su comentario">
</textarea>
<br>
<button>
Enviar
</button>
</div>
</div>
</form>
</body>
<header>
</header>
<nav>
</nav>
<articule>
  </articule>  
<footer>
  <br>
  <br>
        <p class="float-right"><a href="proyecto.php">Volver</a></p>
        <p>&copy; Jems Inc &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
      </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/popper.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/prueba_api.js"> </script>
</body>
</html>
