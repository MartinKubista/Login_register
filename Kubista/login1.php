<?php require_once('connection.php');?>

<?php include('./parts/header.php') ?>

<!DOCTYPE html>
<html>
<head>
<style> 
       
       .container{
         width: 400px;
         padding-top: 5%; 
           text-align: center; 
      
       }
       h1{
           text-align: center;
           
       }
       .klasap{
           text-align: center;  
       }
 
   </style>
<title>Login</title>
  <link rel="stylesheet"  http-equip="Content-Type" >
 
</head>

<main class = "container">

  
      
        <form method="POST" class="formular" action="login_scr.php" method="POST">
          <h1>Login</h1>
          <label for="uname"><b>Username</b></label>
          <p>
          <input type="text" placeholder="Enter Username" id="username" name="username" required>
          <p>
          <label for="psw"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" id="password" name="password" required>
          <p>
          <div class = login>
          <button type="submit" id = "login" value="login" name="login">Login</button>
          <p>
         
        </div>


       
        <p>


      

      </form>
 
      </main>
</html>