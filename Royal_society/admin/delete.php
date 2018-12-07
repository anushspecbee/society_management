<?php

require('admin_func.php');



if(isset($_POST['id'])){
    $id=$_POST['id'];
    echo $id;
    // $sql = "DELETE FROM user_request where email='$id' ";
    // $res = mysqli_query($conn_obj->dbc,$sql);

    $res = $conn_obj->dbc->prepare("DELETE FROM user_request where email='$id' ");
    $res->execute();

    // $query = "DELETE FROM register where email='$id' ";
    // $result = mysqli_query($conn_obj->dbc,$query);

    $result = $conn_obj->dbc->prepare("DELETE FROM register where email='$id' ");
    $result->execute();

}

?>
