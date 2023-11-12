<?php
$DBnombre="id14934553_registro";
$DBusuario="id14934553_rocket";
$DBpass="w3c[FVm1*Bw%[|3U";

$enlace=mysqli_connect("localhost","$DBusuario","$DBpass",$DBnombre) or die("Problemas de conexion");

$correo=$_POST["correo"];
$pass=$_POST["password"];

$consultar="SELECT * FROM `cuentas` WHERE `correo`=\"$correo\"";
$res=mysqli_query($enlace, $consultar);
$datos="";
if ($res->num_rows === 0){
    header("Location: index.html");
}
else{
    $datos=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $nombre=$datos["nombre"];
    $correo=$datos["correo"];
    $pass=$datos["password"];
    $genero=$datos["genero"];
    $fecha=$datos["fecha"];
    $entidad=$datos["entidad"];
    $celular=$datos["celular"];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <h1>Bienvenido a Sí Vale:</h1>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/sivale.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <body style="background-color:    #FF8C00;">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
      <img src="img/banner3.png">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Correo</th>
                              <th>Contraseña</th>
                              <th>Genero</th>
                              <th>Fecha de nac.</th>
                              <th>Entidad</th>
                              <th>Celular</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td scope="row"><?php echo $nombre; ?></td>
                              <td><?php echo $correo; ?></td>
                              <td><?php echo $pass; ?></td>
                              <td><?php echo $genero; ?></td>
                              <td><?php echo $fecha; ?></td>
                              <td><?php echo $entidad; ?></td>
                              <td><?php echo $celular; ?></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="col-12">
                <a href="index.html" role="button" class="btn btn-outline-primary">Salir</a>
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