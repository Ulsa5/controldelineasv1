<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// get database connection
include_once '../../api/config/database.php';
    
// instantiate usuario object
include_once '../../api/models/usuario.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$usuario = new Usuario($db);
  
// set ID property of record to read
$usuario->dpi = isset($_GET['dpi']) ? $_GET['dpi'] : die();
  
// read the details of product to be edited
$usuario->readOne();
  
if($usuario->nombre!=null){
    // create array
    $usuario_arr = array(
        "id" =>  $usuario->id,
        "nombre" => $usuario->nombre,
        "dpi" => $usuario->dpi,
        "puesto" => $usuario->puesto,
        "contrasenia" => $usuario->contrasenia
    );
  
    // set response code - 200 OK
    // http_response_code(200);
  
    // make it json format
    // echo json_encode($usuario_arr);
    echo 'Usuario encontrado';
    header('Location: ../../forms/usuarios/modificacion.php');
}
  
else{
    echo 'Usuario no encontrado, intenta nuevamente';
    header('Location: ../../forms/usuarios/verificacion.php');
    // set response code - 404 Not found
    // http_response_code(404);
  
    // tell the user product does not exist
    // echo json_encode(array("message" => "El usuario no existe."));
}
?>
