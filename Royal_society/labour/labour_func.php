<?php

require_once("../database.php");
// require_once("pdodb.php");

class labour{


    private $conn;
    
    function __construct($conn_obj){
        return $this->conn=$conn_obj->dbc;
    
    }
  
    public function login($admin_email){
        // $labour="SELECT * from labour_table where `labour_email`='$admin_email'";
        // $labour_result=mysqli_query($this->conn,$labour);

        $labour_result = $this->conn->prepare("SELECT * from labour_table where `labour_email`='$admin_email'");
        $labour_result->execute();
        return $labour_result;
    }

	public function labour_info($name){
       
    //   $contact=mysqli_query($this->conn,"select * from labour_table where labour_name='$name'");

      $contact = $this->conn->prepare("select * from labour_table where labour_name='$name'");
      $contact->execute();
      return $contact;
  }


  public function update_labour($status,$end_date,$otp){

        // $update= mysqli_query($this->conn,"UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
        $update = $this->conn->prepare("UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
        $update->execute();
       
        if ($update) {
            echo "Updated successfully";
        }
        else
        {
        echo "Error: " . $update;
        }
      }

}
$labour=new labour($conn_obj);

?>
