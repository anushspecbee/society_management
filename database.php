<?php
class Database {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "";
    private  $dbname="issue";
    private  $dbc;
    
    
   public function getconnection()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
    //    if (mysqli_connect_errno())
    //     {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //     }
    //     else
    //     {
    //         echo "Connection successfull";
    //     }
        
    }

}

$obj = new Database();
$conn = $obj->getconnection();

?>