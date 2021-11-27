<?php 
error_reporting(0);
session_start();
 $varsesion = $_SESSION['usuario'];
 if ($varsesion == null || $varsesion = ''){
  echo "No tienes autorizacion, si eres usuario inicia sesion.";
  die();

 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<style type="text/css">
 h3 { color: Cyan;
  }
  body {
      background-image: url(http://localhost/esp32/paginasBootstrap/gigaticket/Imagenes/c.jpg);
      background-attachment; 
      background-size: hover;}
</style>
<body>
<div class="container text-center img">
    <div id="inicio" class="container"><br>
      <h3 class="h3">SISTEMA WEB IoT</h3><br>
      
      <div class="jumbotron  "> <!--A jumbotron indicates a big grey box for calling extra attention to some special content or information. -->
              <?php 
                
                echo "<h4> Ingresaste al sistema como:  '" .$_SESSION['usuario'] ."' </h4>";
                echo "<h5> Bienvenid@ ¡Ya formas parte de nosotros! </h5>";
              ?>  
        </div>   
        <div class="row justify-content-center ">
                <div class="col text-center">
                  <a href='sesiones/cerrarSesionUGT.php' class="btn btn-outline-danger ">Cerrar Sesión</a>
                </div>
              </div>         
        <!--<img src="http://localhost/esp32/imagenes/door2.jpg" class="door my-3 rounded mx-auto d-block img-fluid" alt="welcome" width="500" height="400"> <!--img-fluid resizes the img -->

      </div>
   </div>
  <!-- Finish Container-->  

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
</body>
</html>