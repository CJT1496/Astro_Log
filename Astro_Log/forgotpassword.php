<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

<title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="main-wrapper">
    <center>
      <h2 style="color:white;">Forgot Password</h2>
        <img src="spaceman2.jpg" style="height: 100px; width: 100px; border-radius: 50px;" />
    </center>
  
  
  <form class="myform" action="forgotpassword.php" method="post">
    <label>Enter Your email</label>
    
    <input type="email" name="uemail"/>

     <input type="submit" id="login_btn" name="forgot_btn" value="Send to Email">

    <a href="login.php"><input type="button" id="back_btn" value="<< Go Back"></a>

  </div>

  </form>