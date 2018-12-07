<?php
require("user_func.php");
session_start();
$user_name=$_SESSION['name'];
$issues=$db->user_issues($user_name);
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
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="main.js"></script>
</head>
<body  style="background-image: url('../images/background.jpeg');
  background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
     <!-- <h2 class="inactive underlineHover"><a href="dashboard.php"> submit isuue  </a></h2> -->
     <h2 class="active"> Track Your Issues </a></h2>
     <h2 class="inactive underlineHover"> <a href="dashboard.php"> submit Issue</a></h2>
     <h2 class="inactive underlineHover"> <a href="pass_system.php">Pass System </a></h2>
     
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Issue Id</th>
        <th>Issue</th>
        <th>Issue status</th>
     
      </tr>

      <?php while($electricity_issue = $issues->fetch()) { ?>
       
        <td><?php echo $electricity_issue['issue_id'];?></td>

      <td>
        <a href="info.php?id=<?php echo $electricity_issue['issue_id']; ?>" >
          <?php echo $electricity_issue['subject']?>
        </a>
      </td>

      <td><?php echo $electricity_issue['status'];?></td>
      </tr>
    <?php }?>
    </thead>

      
    </tbody>
  </table>
  <div><a href="dashboard.php"><button class="btn btn-primary">Back to Dashboard</button></a>

</div>
  </div>
  
</div>
</body>
</html>