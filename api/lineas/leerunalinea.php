<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
  
// include database and object files
include_once '../config/database.php';
include_once '../models/linea.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$linea = new Linea($db);
  
// set ID property of record to read
$linea->id = isset($_GET['id']) ? $_GET['id'] : die();
  
// read the details of product to be edited
$linea->readOne();
  
if($linea->numero!=null){
    // create array
    $linea_arr = array(
        "id" =>  $linea->id,
        "numero" => $linea->numero,
        "icc" => $linea->icc,
        "plan_contratado" => $linea->plan_contratado,
        "fecha_contrato" => $linea->fecha_contrato,
        "costo_del_plan" => $linea->costo_del_plan
    );
  
    // set response code - 200 OK
    http_response_code(200);
  
    // make it json format
    echo json_encode($linea_arr);
}
  
else{
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "La linea no existe."));
}
?>
