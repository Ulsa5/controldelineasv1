<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../models/linea.php';
  
$database = new Database();
$db = $database->getConnection();
  
$linea = new Linea($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
if(
    !empty($data->numero) &&
    !empty($data->icc) &&
    !empty($data->plan_contratado) &&
    !empty($data->fecha_contrato) &&
    !empty($data->costo_del_plan)
){
  
    // set product property values
    $linea->numero = $data->numero;
    $linea->icc = $data->icc;
    $linea->plan_contratado = $data->plan_contratado;
    $linea->fecha_contrato = $data->fecha_contrato;
    $linea->costo_del_plan = $data->costo_del_plan;
  
    // create the product
    if($linea->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Linea grabada exitosamente!."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Imposible guardar la linea."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Imposible guardar la linea, faltan datos?."));
}
?>
