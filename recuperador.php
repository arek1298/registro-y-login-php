<?php
$DBnombre="id14934553_registro";
$DBusuario="id14934553_rocket";
$DBpass="w3c[FVm1*Bw%[|3U";

$enlace=mysqli_connect("localhost","$DBusuario","$DBpass",$DBnombre) or die("Problemas de conexion");


$correo=$_POST["correo"];

$consultar="SELECT * FROM `cuentas` WHERE `correo`=\"$correo\"";
$res=mysqli_query($enlace, $consultar);

$mensaje="";

if ($res->num_rows === 0){
    $mensaje="No se encontro ningun usuario con ese correo";
}

else {
    $datos=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $nombre=$datos["nombre"];
    $correo=$datos["correo"];
    $pass=$datos["password"];
    $genero=$datos["genero"];
    $fecha=$datos["fecha"];
    $entidad=$datos["entidad"];
    $celular=$datos["celular"];

    $mensaje="Informacion enviada al correo $correo";
    $from="Administrador@sivale.org";
    $to=$correo;
    $subjet="Recuperacion de datos";
    $mensajeC="informacion de cuenta\nNombre:$nombre\nCorreo:$correo\nPassword:$pass\nGenero:$genero\nEntidad:$entidad\nFecha de nacimiento:$fecha\nCelular:$celular";
    $headers="From:".$from;
    mail($to,$subjet,$mensajeC,$headers);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registrado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <body style="background-color:    #FF8C00;">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/sivale.png" />
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-4"></div>
              <div class="col-4">
                  <h1> <?php echo $mensaje?> </h1>
                  <a href="index.html" role="button" class="btn btn-primary">Ir al login</a>
              </div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>