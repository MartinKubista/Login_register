<?php require_once('connection.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="register1.css">
</head>
<body>

    <form action="register_scr.php" method="POST" class="container" >          
          <h1>Register</h1>
          <label for="username"><b>Username</b></label>
          <br>
          <input type="text" placeholder="Enter Username" name="username" id="username" required>
          <p>
          <label for="surname"><b>Surname</b></label>
          <br>
          <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>
          <p>
          <label for="email"><b>Email</b></label>
          <br>
          <input type="mail" placeholder="Enter Email" name="email" id="email" required>
          <p>
          <label for="psw"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
          <p>
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <br>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
 
      
        <p class="klasap">
          <button type="submit" class="registerbtn">Register</button>
        </p>

      
        <div class="containersignin">
          <p>Already have a account? <a href="login1.php">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>