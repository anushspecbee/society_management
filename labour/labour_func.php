<?php
require("../database.php");

class labour {
  
    public function login($name,$password){
         global $conn;
        $check = mysqli_query($conn, "SELECT * FROM labour_table WHERE labour_name='$name' AND labour_password='$password'");
        $row = mysqli_fetch_assoc($check);
        if($row) {
            header("Location:labour.php");
               }
               else{
                header("Location:index.php"); 
               }
    }

	public function labour_info($name){
        global $conn;
      $contact=mysqli_query($conn,"select * from labour_table where labour_name='$name'");
      return $contact;
  }


  public function update_labour($status,$end_date,$otp){
        global $conn;
        $update= mysqli_query($conn,"UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
        if ($update) {
            //echo "Updated successfully";
        }
        else
        {
        echo "Error: " . $update . "" . mysqli_error($conn);
        }
      }

}
$labour=new labour();

?>
