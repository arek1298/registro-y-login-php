<?php
$DBnombre="id14934553_registro";
$DBusuario="id14934553_rocket";
$DBpass="w3c[FVm1*Bw%[|3U";

$enlace=mysqli_connect("localhost","$DBusuario","$DBpass",$DBnombre) or die("Problemas de conexion");

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$pass=$_POST["password"];
$genero=$_POST["genero"];
$fecha=$_POST["fecha"];
$entidad=$_POST["estado"];
$celular=$_POST["celular"];
$mensaje="";

$comando="INSERT INTO `cuentas` (`nombre`, `correo`, `password`, `genero`, `fecha`, `entidad`, `celular`) VALUES (\"$nombre\",\"$correo\",\"$pass\",\"$genero\",\"$fecha\",\"$entidad\",\"$celular\")";

$res=mysqli_query($enlace,$comando);

if ($res==1){
    $mensaje="Registrado con exito";
    $from="Administrador@sivale.com";
    $to=$correo;
    $subjet="Registro confirmado";
    $mensajeC="informacion de cuenta creada\nNombre:$nombre\nCorreo:$correo\nPassword:$pass\nGenero:$genero\nEntidad:$entidad\nFecha de nacimiento:$fecha\nCelular:$celular";
    $headers="From:".$from;
    mail($to,$subjet,$mensajeC,$headers);
}
else{
    $mensaje="Hay problemas con el registro, intenta de nuevo mas tarde";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registrado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/sivale.png" />
  </head>
  <body>
      <body style="background-color:    #FF8C00;">
      <div class="container">
          <div class="row">
              <div class="col-4"></div>
              <div class="col-4">
                  <h1> <?php echo $mensaje?> </h1>
                  <a href="index.html" role="button" class="btn btn-primary">Ir al login</button>
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