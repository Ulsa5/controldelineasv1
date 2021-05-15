<?php
class Database{
  
    // specify your own database credentials
    private $host = "bmlx3df4ma7r1yh4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $db_name = "ssbski8jh9c6uc7g";
    private $username = "yyar0b6dzg0w2zjk";
    private $password = "c811wogzk5dh5iz5";
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



