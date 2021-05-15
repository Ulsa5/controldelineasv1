<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
    // get database connection
    include_once '../../api/config/database.php';
    
    // instantiate product object
    include_once '../../api/models/usuario.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $usuario = new Usuario($db);

    function myAlerta($msg){
        echo "<script>alert('$msg');</script>";
    }

    if(
        !empty($_POST['nombre']) &&
        !empty($_POST['dpi']) &&
        !empty($_POST['puesto']) &&
        !empty($_POST['contrasenia'])
    )
    {
    $usuario->nombre=trim($_POST['nombre']);
    $usuario->dpi=trim($_POST['dpi']);
    $usuario->puesto=trim($_POST['puesto']);

    
        // create the product
        if($usuario->create()){
            header('Location: ../../index.php');
            echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Usuario creado correctamente.";
        echo "</div>";
        }
        else{
            header('Location: ../../usuarios/new.php');
            echo 'El usuario no pudo registrarse';
        }
    }
    
    else{
        header('Location: ../../usuarios/new.php');
        echo 'No se pudo registrar el usuario, faltan datos?';
    }
?>
