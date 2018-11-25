<?php
require('admin_func.php');

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql = "UPDATE user_request set status='1' where email='$id' ";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    echo $res['status'];

    $statement= "UPDATE register set status='1' where email='$id' ";
    $res = mysqli_query($conn,$statement);
   
}

?>
