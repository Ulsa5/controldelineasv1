<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    // get database connection
    include_once '../../api/config/database.php';
        
    // instantiate usuario object
    include_once '../../api/models/usuario.php';
    
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    // prepare product object
    $usuario = new Usuario($db);


    if(
        !empty($_POST['nuevonombre']) &&
        !empty($_POST['nuevodpi']) &&
        !empty($_POST['nuevopuesto']) &&
        !empty($_POST['nuevacontrasenia'])
    ){
        $usuario->id=$usuario->id;
        $usuario->nombre=trim($_POST['nuevonombre']);
        $usuario->dpi=trim($_POST['nuevodpi']);
        $usuario->puesto=trim($_POST['nuevopuesto']);
        $usuario->contrasenia=trim($_POST['nuevacontrasenia']);

    
        // actualizar el usuario
        if($usuario->update()){
            // header('location:../../MenuAdmin.php');
            echo 'Usuario modificado correctamente';
        }
        else{
            header('Location: ../../usuarios/verificacion.php');
            echo 'El usuario no pudo modificarse';
        }
    }
?>
