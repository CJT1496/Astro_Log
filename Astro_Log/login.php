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
      <h2 style="color: white;">Astronaut Login</h2>
       <img src="spaceman2.jpg" style="height: 100px; width: 100px; border-radius: 50px;" />
    </center>
  
  
  <form class="myform" action="login.php" method="post">
    <?php include('errors.php'); ?>
    <label> <b>Username</b> </label>
    <input type="text" name="username" class="inputvalues" >
  
    
    <label> <b>Password</b></label>
    <input type="password" class="inputvalues" name="password">



    <input type="submit" id="login_btn" value="login" name="login_user">
    <br>
    <a href="register.php"><input type="button" id="register_btn" value="Register">
    </a>

    <p>
     Forgot Password <a href="forgotpassword.php">Forgot password</a>
    </p>
      

  </div>

  </form>
</body>
</html>

