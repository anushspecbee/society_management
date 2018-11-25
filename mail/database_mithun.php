<?php

class Database
{
    private $server="localhost";
    private $username= "root";
    private $passwd = "root";
    private $dbname= "issue";
    public $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->server, $this->username, $this->passwd, $this->dbname);      
            if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                }
                // else
                // {
                //     echo "Connection successfull";
                // } 
                return $this->conn;

        }

        function dbRowInsert($table_name, $form_data)
 	{
     // $this->dbCon;
 
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);
 
    $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
              VALUES('".implode("','", $form_data)."')";
 
    // run and return the query result resource
    if (mysqli_query($this->conn, $sql)) {
 
        // header("Location: index.php");
      //   echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error( $this->conn);
        return 0;
    }
 }
        public function login($email,$password){
            session_start();
            $check = mysqli_query($this->conn, "SELECT * FROM register WHERE email='$email' AND `password`='$password' AND `status`='1'");
            $row = mysqli_fetch_assoc($check);
            $_SESSION['name']=$row['name'];
            if($row) {
                header("Location:dashboard.php");
                   }
                   else{
                    return 0; 
                    header("Location:index.php");
                    
                   }

        }



    function send_msg($mobile,$message){
    

    $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=state176&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
    if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
    }else{
    echo $json["msg"];
    //your code when not send
    }

    }

}
$db= new Database();
$connection = $db->conn;

?>
