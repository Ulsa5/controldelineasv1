<?php

// get ID of the product to be edited
$dpi = isset($_GET['dpi']) ? $_GET['dpi'] : die('ERROR: missing ID.');
  
// include database and object files
include_once '../../api/config/database.php';
include_once '../../api/models/usuario.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare objects
$usuario = new Usuario($db);
  
// set ID property of product to be edited
$usuario->dpi = $dpi;
  
// read the details of product to be edited
$usuario->readOne();
  
// set page header
$page_title = "Modificar Usuarios";
  
?>


<?php 
// if the form was submitted
if($_POST){
  
    // set product property values
    $usuario->nombre = $_POST['nombre'];
    $usuario->dpi = $_POST['dpi'];
    $usuario->puesto = $_POST['puesto'];
    $usuario->contrasenia = $_POST['contrasenia'];
  
    // update the product
    if($usuario->update()){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "El usuario fue actualizado correctamente.";
            header('location:../../menuadmin.php');
        echo "</div>";
    }
  
    // if unable to update the product, tell the user
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Imposible actualizar los datos del usuario.";
            header('location:../../forms/usuarios/verificacion.php');
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificacion</title>
    <link rel="stylesheet" href="../../forms/usuarios/css/new.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
<nav class="hover-nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Soporte tecnico</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <h1 class="title">Ingrese los nuevos datos</h1>


    <div class = "container">  
        <div class = "card">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?dpi={$dpi}");?>" method="post">
                <table border="0" align="center" cellspacing="40px">
            
                    <tr>
                        <td height="40px" width="400px">
                        <label>Nuevo nombre de usuario</label>
                        <input type='text' name='nombre' value='<?php echo $usuario->nombre; ?>' class='form-control' />
                        </td>

                        <td>
                        <label>Nuevo DPI</label>
                        <input align="center" type='text' name='dpi' value='<?php echo $usuario->dpi; ?>' class='form-control' />
                        </td>
                    </tr>
            
                    <tr>
                        <td>
                        <label>Nuevo Puesto</label>
                        <input align="center" type='text' name='puesto' value='<?php echo $usuario->puesto; ?>' class='form-control' />
                        </td>

                        <td>
                        <label>Nueva Contraseña</label>
                        <input align="center" type='text' name='contrasenia' value='<?php echo $usuario->contrasenia; ?>' class='form-control' />
                        </td>
                    </tr>

                    <tr>
                </table>
                <button class="animated-border-button">Guardar datos</button>
            </form>
        </div>
    </div>

</body>

</html>



    
