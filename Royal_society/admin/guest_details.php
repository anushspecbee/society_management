<?php
require'admin_func.php';
require_once("session.php");

if(isset($_POST['pass_verify'])){
    $pass_id=$_POST['pass_id'];
    $sql=$show->guest_verify($pass_id);
    $guest_details=$sql->fetch();
  
 }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Society Management</title>
   <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../css/styleaks.css" />
   
          
   <script src="main.js"></script>
</head>
<body id="bgcolor">
<div class="wrapper fadeInDown">
   <!-- <div class=" col-xs-9"> -->
 <div id="formContent" style="padding-left:50px;padding-right:50px;text-align:left;"><br>
 <pre>
 <h4 id="guest_details">            Guest User Details               </h4>
 <h4>Guest Name         :     <?php echo $guest_details['guest_name'];?></h4>
 <h4>Guest Email        :     <?php echo $guest_details['guest_email'];?></h4>
 <h4>Guest Room         :     <?php echo $guest_details['guest_room'];?></h4>
 <h4>Guest Mobile No    :     <?php echo $guest_details['guest_mobile'];?></h4>
 <h4>Booked Date        :     <?php echo $guest_details['booked_day'];?></h4>
</pre>

   <div id="formFooter">
   <b>specbee consulting services</b>
   </div>

 </div>
</div>
<!-- </div> -->
</body>
</html>
