<?php

require('admin_func.php');


if(isset($_POST['id'])){
    $id=$_POST['id'];
    echo $id;
    $sql = "DELETE FROM user_request where email='$id' ";
    $res = mysqli_query($conn,$sql);

    $query = "DELETE FROM register where email='$id' ";
    $result = mysqli_query($conn,$query);

}

?>
