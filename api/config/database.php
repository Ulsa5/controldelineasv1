<?php
class Database{
  
    // specify your own database credentials
    private $host = "ik1eybdutgxsm0lo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $db_name = "yue7ly7allyt210d";
    private $username = "hz02cwcbiacto58i";
    private $password = "cndzvxykf5ue00ec";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            //echo "Conectado a la base de datos\n\n";
        }catch(PDOException $exception){
            
            //echo "Error de conexion: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>



