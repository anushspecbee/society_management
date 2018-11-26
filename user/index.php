<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"><a  href="../index.html" >Home </a></h2>
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="signup.php">Sign Up </a></h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/specbee.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" name="email" id="login" class="fadeIn second"  placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
    <a class="underlineHover" href="../mail/forgetpassword.php">Forgot Password?</a>
</div>
</body>
</html>

<?php
require("user_func.php");
session_start();

if(isset($_SESSION['user_id']))
{
  header('Location:dashboard.php');
}

// if($_GET['status']!=''){
// if($_GET['status']=='err' ){
//   echo 'Invalid Credintials';
// }
// }

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
//echo $email,$password;
$status = $db->login($email,$password);

if(!$status)
{
  echo "<h4 class='text-center' style='color:red'> Invalid user or not approved</h4>";
}

}



?>
