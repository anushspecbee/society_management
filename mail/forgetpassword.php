<html>
<head>
   <title>forgetpassword</title>
   <link rel="shortcut icon" type="image/png" href="../images/favicon.ico"/>
   <link rel="stylesheet" type="text/css" media="screen" href="../css/forgetpassword.css" />
  <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body style=" background-image: url('../images/background.jpeg');
background-repeat: no-repeat;
background-position: center;
background-size: cover;
background-attachment: fixed;">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <div class="form-gap"> </div>
  <div class="container fadeInDown" id="formContent" >
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default fadeInDown"  style="border-radius: 10px 10px 10px 10px;">
                <div class="panel-body ">
                  <div class="text-center">
                    <h3><i class="fa fa-lock fa-4x"></i></h3>
                    <h2 class="text-center">Forgot Password?</h2>
                    <p>You can reset your password here.</p>
                    <div class="panel-body">

                      <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="forgetpassword.php">

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="emailto" placeholder="email address" class="form-control"  type="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <input name="emailsent" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                        </div>

                        <input type="hidden" class="hide" name="token" id="token" value="">
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
  </div>
</body>

</html>
<?php
if(isset($_POST['emailsent'])){
$emailto = $_POST['emailto'];
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'anushganiga99@gmail.com';
$mail->Password = 'anush5397ganiga';
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->isHTML(true);

function mailToUser($mail,$emailto) {
   $subject = "your request for reset password";
   $message = "";
   $message .= "<html><head><title></title></head><body>";
   $message .= "<p>Hello </p>";
   $message .= "<p>your can reset the password using this link</p>";
   $message .= '<a href="http://localhost/Society/mail/labour_newpassword.php">click here</a>';
   $message .= "<br><b>Thank you for contacting royal society</b>";
   $message .= "<br><br><img src='https://royalsociety.org/~/media/Redesign2015/rs-crest-footer.png?w=200' width='92' height='96'>";
   $message .= "<p><b style='text-align:inital'> <font color='#741b47'>ROYAL SOCIETY SERVICES</font> </b><p>";
   $message .= '<br><span style="font-family:Helvetica,sans-serif;font-size:12px"><font color="#351c75"><b>BANGALORE | USA | GERMANY</b></font></span>';
   $message .= '<div style="font-family:helveticaneue,&quot;helvetica neue&quot;,helvetica,arial,&quot;lucida grande&quot;,sans-serif"><span style="text-align:initial;font-family:Helvetica,sans-serif;font-size:12px;font-weight:bold"><font color="#351c75">Follow Us:</font></span><span style="text-align:initial;color:rgb(0,0,0);font-family:Helvetica,sans-serif;font-size:12px">&nbsp;</span><a href="https://royalsociety.org/" style="color:rgb(17,85,204);text-align:initial;font-family:Helvetica,sans-serif;font-size:12px;padding-left:20px" target="_blank"><img src="https://ci6.googleusercontent.com/proxy/tfd5rlzHakr_Q9D4-OJRbO1uAl9pEJdEHsPIlGo466PVFB9RRz02dDw_SUmoK9owG0Z-YUSGZ9a_0qa4zyGV8MHE=s0-d-e1-ft#http://specbee.com/signature/specbee_web.jpg" alt="ROYAL SOCIETY SERVICES" class="CToWUd"></a><span style="text-align:initial;color:rgb(0,0,0);font-family:Helvetica,sans-serif;font-size:12px">&nbsp;</span><a href="http://www.facebook.com/theroyalsociety" style="color:rgb(17,85,204);text-align:initial;font-family:Helvetica,sans-serif;font-size:12px;padding-left:20px" target="_blank"><img src="https://ci5.googleusercontent.com/proxy/sVnBpnoqblzJd9eKyjpWUYfh6OoUu4FPj2f0OZ5LXqrNdbsHjDjDs_HdeeET0bCFEBoV9XPWt49Ikxga4zQjOlYsTrnRPJA=s0-d-e1-ft#http://specbee.com/signature/specbee_facebook.jpg" alt="ROYAL SOCIETY SERVICES" class="CToWUd"></a><span style="text-align:initial;color:rgb(0,0,0);font-family:Helvetica,sans-serif;font-size:12px">&nbsp;</span><a href="https://www.linkedin.com/company/41589" style="color:rgb(17,85,204);text-align:initial;font-family:Helvetica,sans-serif;font-size:12px;padding-left:20px" target="_blank"><img src="https://ci3.googleusercontent.com/proxy/C8HL2N64Hha8Ozi8w1ITn6_zFlbZyL8yf2oyuiRxSBIgrozf2o54iBgwHqJLCYYg0ftuTWsGVGOTN5H7Uy_opfb2plPLiw=s0-d-e1-ft#http://specbee.com/signature/specbee_twitter.jpg" alt="ROYAL SOCIETY SERVICES" class="CToWUd"></a></div>';
   $message .= "</body></html>";
   $mail->Subject = $subject;
   $mail->Body = $message;
   $mail->AddAddress($emailto);
   $mail->setFrom('anushganiga99@gmail.com', 'Royal Soceity');
   $success = $mail->Send();
   $mail->ClearAllRecipients();
}
   mailToUser($mail,$emailto);
}
?>








