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
    <h2 class="inactive underlineHover"><a  href="../user/signup.php" >Sign Up </a></h2>

    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>




    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/specbee.png" id="icon" alt="User Icon" />
      <h3>WELCOME PLEASE LOGIN</h3>
    </div>

    <!-- Login Form -->
    <form action="" method="POST">

      <input type="email" name="admin_email" id="login" class="fadeIn second"  placeholder="Enter your mail">
      <input type="password" id="password" class="fadeIn third" name="admin_password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="admin_login" value="Log In">

    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
    <a class="underlineHover" href="../mail/forgetpassword.php">Forgot Password?</a>

<p>Royal society services</p>
</div>
</body>
</html>

<?php

require_once('../user/user_func.php');
require_once('../labour/labour_func.php');
require_once('admin_func.php');

session_start();

if(isset($_POST['admin_login']))
{

   $admin_email=$_POST['admin_email'];
   $admin_password=$_POST['admin_password'];
   
  //  $sql="SELECT * from register where id='1'";

  //  $result=mysqli_query($conn_obj->dbc,$sql);
   $result=$show->login('1');
   $admin_res=$result->fetch();



  $user_result=$db->login($admin_email);
   $user_res=$user_result->fetch();


  
  $labour_result= $labour->login($admin_email);
   $labour_res=$labour_result->fetch();
    
 

   if(($admin_res['email'] === $admin_email && password_verify($admin_password,$admin_res['password'])))
       {
         $_SESSION['email'] = $admin_res['email'];
         header('Location:admin_dashboard.php');
       }

       elseif(($user_res['email'] === $admin_email && password_verify($admin_password,$user_res['password'])))
        {
          $_SESSION['email'] = $user_res['email'];
          $_SESSION['name']=$user_res['name'];
        header('Location:../user/dashboard.php');
       }
       elseif(($labour_res['labour_email'] === $admin_email && $admin_password === $labour_res['labour_password']))
        {
          $_SESSION['email'] = $labour_res['labour_email'];
        header('Location:../labour/labour.php');
       }

       else{

        header('Location:index.php');
      
       }

   }
  
?>


