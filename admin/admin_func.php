<?php

require("../database.php");

class show {
    // use display;
    public function retrieve($abc,$category){
        $query = "SELECT * FROM problem where category='$category' and `status`='open' limit 2";
        $check = mysqli_query($abc,$query );
        return $check;
      }

      public function all_issues($abc,$category){
        $query = "SELECT * FROM problem where category='$category'";
        $check = mysqli_query($abc,$query );
        return $check;
      }

	public function update($abc,$name, $id){
    $update= mysqli_query($abc,"UPDATE problem SET labour_name='$name' WHERE issue_id='$id'");
    // if ($update) {
    //     echo "Updated successfully";
    // }
    // else
    // {
    // echo "Error: " . $sql . "" . mysqli_error($conn);
    // }
  
  }

      public function info($abc,$id){
        $query = "SELECT * FROM problem where issue_id='$id'";
        $check = mysqli_query($abc,$query);
        return $check;
    }

	public function getinfo_labour($abc,$id){
      $info=mysqli_query($abc,"select * from problem where issue_id='$id'");
        return $info;
  }



  	public function labour($abc,$name){
      $contact=mysqli_query($abc,"select * from labour_table where labour_name='$name'");
      return $contact;
  }
  function guest_verify($abc,$pass_id){

   
    $sql=mysqli_query($abc,"select * from guest where guest_pass='$pass_id'");
    return $sql;
  

    // echo $guest_name."<br>".$guest_email."<br>".$guest_room."<br>".$guest_mobile."<br>".$booked_day;

    }
  

  
}


$show = new show();
$check = $show->retrieve($conn,'ELECTRICITY');
$result = $show->retrieve($conn,'WATER');
$result_parking= $show->retrieve($conn,'PARKING');
$result_security= $show->retrieve($conn,'SECURITY');
$result_clean= $show->retrieve($conn,'CLEANLINESS');

?>
