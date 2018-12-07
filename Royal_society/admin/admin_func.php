<?php

require_once("../database.php");
// require_once("../pdodb.php");



class admin implements society {


    private $conn;
   

    function __construct(Database $conn_obj){
        return $this->conn=$conn_obj->dbc;
            
        }
    
        function login($admin_id){
            // $sql="SELECT * from register where id='$admin_id'";
            //  $result=mysqli_query($this->conn,$sql);

             $result = $this->conn->prepare("SELECT * from register where id='$admin_id'");
             $result->execute();
             return $result;
        }

    public function retrieve($category){
        // $query = "SELECT * FROM problem where category='$category' and `status`='open' limit 2";
        // $check = mysqli_query($this->conn,$query );
        $check = $this->conn->prepare("SELECT * FROM problem where category='$category' and `status`='open' limit 2");
        $check->execute();
        return $check;
      }

      public function all_issues($category){
        // $query = "SELECT * FROM problem where category='$category'";
        // $check = mysqli_query($this->conn,$query );
        $check = $this->conn->prepare("SELECT * FROM problem where category='$category' and `status`='open' limit 2");
        $check->execute();
        return $check;
      }

	public function update($name, $id){

    // $update= mysqli_query($this->conn,"UPDATE problem SET labour_name='$name' WHERE issue_id='$id'");
    $update = $this->conn->prepare("UPDATE problem SET labour_name='$name' WHERE issue_id='$id'");
    $update->execute();
  
  }

      public function info($id){
        // $query = "SELECT * FROM problem where issue_id='$id'";
        // $check = mysqli_query($this->conn,$query);
        // return $check;
        $check = $this->conn->prepare("SELECT * FROM problem where issue_id='$id'");
        $check->execute();
        return $check;
    }

	public function getinfo_labour($id){
        // $info=mysqli_query($this->conn,"select * from problem where issue_id='$id'");
        $info = $this->conn->prepare("select * from problem where issue_id='$id'");
        $info->execute();
        return $info;
  }



  	public function labour($name){
    //   $contact=mysqli_query($this->conn,"select * from labour_table where labour_name='$name'");
    $contact = $this->conn->prepare("select * from labour_table where labour_name='$name'");
    $contact->execute();
    return $contact;
  }

  function guest_verify($pass_id){

   
    // $sql=mysqli_query($this->conn,"select * from guest where guest_pass='$pass_id'");
    $sql = $this->conn->prepare("select * from guest where guest_pass='$pass_id'");
    $sql->execute();
    return $sql;
  

    // echo $guest_name."<br>".$guest_email."<br>".$guest_room."<br>".$guest_mobile."<br>".$booked_day;

    }

    function labour_name(){
        // $name=mysqli_query($this->conn,"select labour_name from labour_table ");
        $name = $this->conn->prepare("select labour_name from labour_table ");
        $name->execute();
        return $name;
    }
  
    
  
}


$show = new admin($conn_obj);

$check = $show->retrieve('ELECTRICITY');
$result = $show->retrieve('WATER');
$result_parking= $show->retrieve('PARKING');
$result_security= $show->retrieve('SECURITY');
$result_clean= $show->retrieve('CLEANLINESS');
$name=$show->labour_name();
?>
