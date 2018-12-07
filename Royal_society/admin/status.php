<?php
require('admin_func.php');

if(isset($_POST['id'])){
    $id=$_POST['id'];

    // $sql = "UPDATE user_request set status='1' where email='$id' ";
    // $res = mysqli_query($conn_obj->dbc,$sql);

    $res = $conn_obj->dbc->prepare("UPDATE user_request set status='1' where email='$id' ");
    $res->execute();

    // $statement= "UPDATE register set status='1' where email='$id' ";
    // $res = mysqli_query($conn_obj->dbc,$statement);

    $res = $conn_obj->dbc->prepare("UPDATE register set status='1' where email='$id' ");
    $res->execute();
   
}

?>
