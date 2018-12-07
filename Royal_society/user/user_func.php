<?php
require_once("../database.php");
// require_once("../pdodb.php");


trait insert{
    private $conn;
    function __construct(Database $conn_obj){
       
         return $this->conn=$conn_obj->dbc;
     
        }


        function dbRowInsert($table_name, $form_data)
        {
       
   
       // retrieve the keys of the array (column titles)
       $fields = array_keys($form_data);
    
       $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
                 VALUES('".implode("','", $form_data)."')";
      

     $inserted = $this->conn->prepare($sql);
      $row = $inserted->execute();
    
       // run and return the query result resource
       if ($row) {
    
            // header("Location: index.php");
            //   echo "New record created successfully";
       }
       else
       {
           echo "Error: " . $sql;
           return 0;
       }

    }
}


class user implements society
{

    use insert;

    private $conn;
    

        public function login($admin_email){
          
            
//    $user="SELECT * from register where `email`='$admin_email'";
//    $user_result=mysqli_query($this->conn,$user);
   $user_result = $this->conn->prepare("SELECT * from register where `email`='$admin_email' and `status`='1'");
   $user_result->execute();

   return   $user_result;
   }



    function send_msg($mobile,$message){
       

    $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=state176&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
    if ($json["status"]==="success") {
    // echo $json["msg"];
    //your code when send success
    }else{
    // echo $json["msg"];
    //your code when not send
    }

    }

    function user_issues($user_name){
        // $issue=mysqli_query($this->conn,"select * from problem where user_name='$user_name'");

        $issue = $this->conn->prepare("select * from problem where user_name='$user_name'");
        $issue->execute();
        return $issue;
    }



    public function info($id){

        // $query = "SELECT * FROM problem where issue_id='$id'";
        // $check = mysqli_query($this->conn,$query);

        $check = $this->conn->prepare("SELECT * FROM problem where issue_id='$id'");
        $check->execute();
        return $check;
    }

}




$db= new user($conn_obj);


?>
