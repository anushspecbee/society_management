<?php
class Database {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "1";
    private  $dbname="society";
    private  $dbc;
    
    
   public function getconnection()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
        
    }

}

$obj = new Database();
$conn = $obj->getconnection();

?>