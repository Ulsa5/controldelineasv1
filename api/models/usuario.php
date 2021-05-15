<?php
class Usuario{
  
    // database connection and table name
    private $conn;
    private $table_name = "usuarios";
  
    // object properties
    public $id;
    public $nombre;
    public $dpi;
    public $puesto;
    public $contrasenia;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read lineas
    function read(){
    
        // select all query
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                ORDER BY
                    nombre";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // create linea
    function create(){
    
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nombre=:nombre, dpi=:dpi, puesto=:puesto, contrasenia=:contrasenia";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->nombre=htmlspecialchars(strip_tags($this->nombre));
        $this->dpi=htmlspecialchars(strip_tags($this->dpi));
        $this->puesto=htmlspecialchars(strip_tags($this->puesto));
        $this->contrasenia=htmlspecialchars(strip_tags($this->contrasenia));
    
        // bind values
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":dpi", $this->dpi);
        $stmt->bindParam(":puesto", $this->puesto);
        $stmt->bindParam(":contrasenia", $this->contrasenia);
    
        // execute query
        if($stmt->execute()){

            return true;
        }
        return false;
    }

    // used when filling up the update product form
    function readOne(){
    
        // query to read single record
        $query = "SELECT 
                    *
                FROM
                    " . $this->table_name . " 
                WHERE
                    dpi = ?
                LIMIT
                    0,1";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind id of linea to be updated
        $stmt->bindParam(1, $this->dpi);
         
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // set values to object properties
        $this->nombre = $row['nombre'];
        $this->dpi = $row['dpi'];
        $this->puesto = $row['puesto'];
        $this->contrasenia = $row['contrasenia'];
    }

// update the linea
    function update(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . " 
                SET
                    nombre=:nombre, 
                    dpi=:dpi, 
                    puesto=:puesto, 
                    contrasenia=:contrasenia
                WHERE
                    id=:id";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->nombre=htmlspecialchars(strip_tags($this->nombre));
        $this->dpi=htmlspecialchars(strip_tags($this->dpi));
        $this->puesto=htmlspecialchars(strip_tags($this->puesto));
        $this->contrasenia=htmlspecialchars(strip_tags($this->contrasenia));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // bind new values
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':dpi', $this->dpi);
        $stmt->bindParam(':puesto', $this->puesto);
        $stmt->bindParam(':contrasenia', $this->contrasenia);
        $stmt->bindParam(':id', $this->id);
        
        // execute the query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>