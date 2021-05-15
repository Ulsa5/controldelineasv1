<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// include database and object files
include_once '../config/database.php';
include_once '../models/linea.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
// prepare product object
$linea = new Linea($db);

// get id of product to be edited
$data = json_decode(file_get_contents("php://input"));


// set ID property of product to be edited
$linea->id = $data->id;


// set product property values
$linea->numero = $data->numero;
$linea->icc = $data->icc;
$linea->plan_contratado = $data->plan_contratado;
$linea->fecha_contrato = $data->fecha_contrato;
$linea->costo_del_plan = $data->costo_del_plan;


// update the product
if($linea->update()){
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "Linea actualizada correctamente."));
}
  
// if unable to update the product, tell the user
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Imposible actualizar la linea."));
}
?>
