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
      <h2 style="color:white;">Register your Astronaut</h2>
        <img src="spaceman2.jpg" style="height: 100px; width: 100px; border-radius: 50px;" />
    </center>
  
  
  <form class="myform" action="register.php" method="post">
    <?php include('errors.php'); ?>
    <label> <b>Username</b> </label>
    <input type="text" name="username" class="inputvalues" value="<?php echo $username; ?>">
    
   <label>Email</label>
    <input type="email" name="email" class="inputvalues" value="<?php echo $email; ?>">
    
    <label> <b>Password</b></label>
    <input type="password" class="inputvalues" name="password_1">



    <label>Confirm password</label>
    <input type="password" class="inputvalues" name="password_2">

    <input type="submit" id="login_btn" value="register" name="reg_user">
    <br>
    <a href="login.php"><input type="button" id="back_btn" value="<< Go Back"></a>
  </div>

  </form>
</body>
</html>
