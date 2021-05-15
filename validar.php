<?php


$usuario = $_POST['nombre'];
$contraseña = $_POST['contrasenia'];


$administrador = "admin";
$pass1 = "admin1234";


$empleado = "empleado";
$pass2 = "empleado1234";


if (($usuario == $administrador) && ($contraseña == $pass1)) {

  header("location:MenuAdmin.php");
}

if (($usuario == $empleado) && ($contraseña == $pass2)) {

  header("location:MenuEmployes.php");
} else {

  echo "ocurrio un error de carga";
}


/*
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;


$conexion = mysqli_connect("localhost", "root", "", "usuarios");

$consulta = "SELECT*FROM logeo where usuario='$usuario' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

  header("location:Menu.php");
} else {
?>
  <?php
  include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);*/