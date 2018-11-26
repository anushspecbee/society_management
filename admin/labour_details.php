<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"><a href="admin_dashboard.php">  check your issue </a></h2>
     <h2 class="inactive underlineHover"> <a href="request.php"> Pending request </a></h2>
     <h2 class="inactive underlineHover"> <a href="verify_pass.php">Pass Verification </a></h2>
     <h2 class="inactive underlineHover"><a href="admin_page.php" target="blank">update_labour </a></h2>
     <h2 class="active"><a href="labour_details.php" target="blank">Add Labourers </a></h2>



    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="#">
    <select id="position" class="fadeIn first"  name="labour_category" placeholder="labour category" >
            <option>ELECTRICITY</option>
            <option>WATER</option>
            <option>PARKING</option>
            <option>CLEANLINESS</option>
            <option>SECURITY</option>      
     </select>
     <input type="text" id="position" class="fadeIn first"  name="labour_name" placeholder="Labour Name" >
            <!-- <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>       
     </select>    -->
      <input type="text" id="subject" class="fadeIn second"  required="required" maxlength=10 name="labour_contact" placeholder="Labour contact">
      
     <input type="password" name="labour-password" placeholder="Enter password" required="required">
      <input type="submit" class="fadeIn fourth" value="submit" name="labour_detail_submit">
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>

<a href="admin_logout.php"><input type="button" value="Logout"></a>

    </div>

  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['labour_detail_submit'])){

include('../user/user_func.php');
$labour_name= $_POST['labour_name'];
$labour_number=$_POST['labour_contact'];
$labour_category=$_POST['labour_category'];
$labour_passwd=$_POST['labour-password'];

$labour=array(
    'labour_name'=>$labour_name,
    'labour_category'=>$labour_category,
    'labour_number'=>$labour_number,
    'labour_password'=>$labour_passwd
);
$db->dbRowInsert("labour_table", $labour);
}
?>



