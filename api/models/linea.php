<?php
class Linea{
  
    // database connection and table name
    private $conn;
    private $table_name = "lineas";
  
    // object properties
    public $id;
    public $numero;
    public $icc;
    public $plan_contratado;
    public $fecha_contrato;
    public $costo_del_plan;
  
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
                    fecha_contrato";
    
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
                    numero=:numero, icc=:icc, plan_contratado=:plan_contratado, fecha_contrato=:fecha_contrato, costo_del_plan=:costo_del_plan";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->numero=htmlspecialchars(strip_tags($this->numero));
        $this->icc=htmlspecialchars(strip_tags($this->icc));
        $this->plan_contratado=htmlspecialchars(strip_tags($this->plan_contratado));
        $this->fecha_contrato=htmlspecialchars(strip_tags($this->fecha_contrato));
        $this->costo_del_plan=htmlspecialchars(strip_tags($this->costo_del_plan));
    
        // bind values
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":icc", $this->icc);
        $stmt->bindParam(":plan_contratado", $this->plan_contratado);
        $stmt->bindParam(":fecha_contrato", $this->fecha_contrato);
        $stmt->bindParam(":costo_del_plan", $this->costo_del_plan);
    
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
                    id = ?
                LIMIT
                    0,1";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind id of linea to be updated
        $stmt->bindParam(1, $this->id);
    
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // set values to object properties
        $this->numero = $row['numero'];
        $this->icc = $row['icc'];
        $this->plan_contratado = $row['plan_contratado'];
        $this->fecha_contrato = $row['fecha_contrato'];
        $this->costo_del_plan = $row['costo_del_plan'];
    }

// update the linea
    function update(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . " 
                SET
                numero=:numero, icc=:icc, plan_contratado=:plan_contratado, fecha_contrato=:fecha_contrato, costo_del_plan=:costo_del_plan
                WHERE
                    id=:id";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        
        // sanitize
        $this->numero=htmlspecialchars(strip_tags($this->numero));
        $this->icc=htmlspecialchars(strip_tags($this->icc));
        $this->plan_contratado=htmlspecialchars(strip_tags($this->plan_contratado));
        $this->fecha_contrato=htmlspecialchars(strip_tags($this->fecha_contrato));
        $this->costo_del_plan=htmlspecialchars(strip_tags($this->costo_del_plan));
        $this->id=htmlspecialchars(strip_tags($this->id));


        // bind new values
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':icc', $this->icc);
        $stmt->bindParam(':plan_contratado', $this->plan_contratado);
        $stmt->bindParam(':fecha_contrato', $this->fecha_contrato);
        $stmt->bindParam(':costo_del_plan', $this->costo_del_plan);
        $stmt->bindParam(':id', $this->id);
        
        // execute the query
        if($stmt->execute()){
            return true;
        }
        return false;
    }


}
?>