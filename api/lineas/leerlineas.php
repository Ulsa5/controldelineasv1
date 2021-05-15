<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here

// include database and object files
include_once '../config/database.php';
include_once '../models/linea.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$linea = new Linea($db);
  
// read products will be here

// query products
$stmt = $linea->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // lineas array
    $lineas_arr=array();
    $lineas_arr["registros"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $linea_item=array(
            "id" => $id,
            "numero" => $numero,
            "plan_contratado" => $plan_contratado,
            "fecha_contrato" => $fecha_contrato,
            "costo_del_plan" => $costo_del_plan
        );
  
        array_push($lineas_arr["registros"], $linea_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($lineas_arr);
}
  
// no products found will be here

else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No existe ninguna linea.")
    );
}
