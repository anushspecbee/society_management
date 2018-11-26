<?php

require('../database.php');
session_start();
if(isset($_POST['admin_login']))
{

    global $conn;
    $admin_name=$_POST['admin-name'];
    $admin_password=$_POST['admin-password'];
    $sql="SELECT * from register where id='1'";
    $result=mysqli_query($conn,$sql);
    $res=$result->fetch_assoc();

    if(($res['email'] === $admin_name && password_verify($admin_password,$res['password'])))
        {
          $_SESSION['email'] = $res['email'];
          header('Location:admin_dashboard.php');
        }

        else{

         header('Location:index.php');

        }

    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styleaks.css" />

    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"><a  href="../index.html" >Home </a></h2>
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>




    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/specbee.png" id="icon" alt="User Icon" />
      <h3>WELCOME ADMIN</h3>
    </div>

    <!-- Login Form -->
    <form action="" method="POST">

      <input type="email" name="admin-name" id="login" class="fadeIn second"  placeholder="Enter admin email">
      <input type="password" id="password" class="fadeIn third" name="admin-password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="admin_login" value="Log In">
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
<p>Royal society services</p>
</div>
</body>
</html>






