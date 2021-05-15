<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here

    // get database connection
    include_once '../../api/config/database.php';
        
    // instantiate usuario object
    include_once '../../api/models/usuario.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$usuario = new Usuario($db);
  
// read products will be here

// query products
$stmt = $usuario->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // lineas array
    $usuarios_arr=array();
    $usuarios_arr["registros"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $usuario_item=array(
            "id" => $id,
            "dpi" => $dpi,
            "nombre" => $nombre,
            "puesto" => $puesto,
            "contrasenia" => $contrasenia
        );
  
        array_push($usuarios_arr["registros"], $usuario_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($usuario_item);
}
  
// no products found will be here

else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No existe ningun usuario.")
    );
}
