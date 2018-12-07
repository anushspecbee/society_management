<?php
// class Database {
    
//     private $server = "localhost";
//     private $user = "root";
//     private  $password = "root";
//     private  $dbname="issue";
//     public  $dbc;
    
    
//    public function __construct()  {
//        $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
//        return $this->dbc;
        
//     }

// }





// interface society{
//     public function login($email);
// }





// $conn_obj = new Database();

Class Database {
 
    private  $server = "mysql:host=localhost;dbname=issue";
    private  $user = "root";
    private  $pass = "root"; 
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    public $dbc;
     
    public function __construct(){
     
      try{
     
       $this->dbc = new PDO($this->server, $this->user,$this->pass,$this->options);
     
       return $this->dbc;
     
        }
     
      catch (PDOException $e){
      echo "There is some problem in connection: " . $e->getMessage(); 
      }
    
      }
    
      }

      interface society{
    public function login($email);
}
    
    
    
    
    $conn_obj=new Database();


?>