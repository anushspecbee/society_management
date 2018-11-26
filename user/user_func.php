<?php
require("../database.php");

class user
{
    
        function dbRowInsert($table_name, $form_data)
 	{
     global $conn;
 
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);
 
    $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
              VALUES('".implode("','", $form_data)."')";
 
    // run and return the query result resource
    if (mysqli_query($conn, $sql)) {
 
        // header("Location: index.php");
      //   echo "New record created successfully";
    }
    else
    {
        // echo "Error: " . $sql . "" . mysqli_error( $conn);
        return 0;
    }
 }
        public function login($email,$password){
            global $conn;
            $check = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' AND `status`='1'");
            $row = mysqli_fetch_assoc($check);
            $_SESSION['name']=$row['name'];
            if( $row && (password_verify($password,$row['password']))) {

                  $_SESSION['user_id'] = $row['id'];
                // $user_id = $_SESSION['user_id'];
                header("Location:dashboard.php");
                   }
            
                   else{
                    return 0; 
                    header("Location:index.php");
                    
                   }

        }



    function send_msg($mobile,$message){
        global $conn;


        // $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
        //$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=state176&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
        $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=anushno6GgpDxkAv9QiyB") ,true);
         //$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);
        if ($json["status"]==="success") {
        // echo $json["msg"];
        //your code when send success
        }else{
        // echo $json["msg"];
        //your code when not send
        }

    }

}
$db= new user();

?>
