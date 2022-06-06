<!DOCTYPE html>
<html>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 50px;
  }
 
</style> 
<body class="bg-secondary">
<?php include('../parts/header.php')?>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
  <main>  
  <form action="../scripts/login_script.php" method="post">
        <div class="container">
          <h1>Prihlasenie</h1>
          <hr>
          <br>
          <p><label for="username"><b>Meno</b></label>
          <br><input class="bg-info" type="text" placeholder="Zadajte Meno" name="username" id="username" required>
            
          <p><label for="psw"><b>Heslo</b></label>
          <br><input class="bg-info" type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>
      
          <p><button type="submit" class=" bg-light btn btn-outline-success">Prihlasit sa</button>
          <p class="text-danger"><?php echo $message ?></p>
          <br>
          <hr>
          <p style="font-weight: bolder;">Nemate ucet? <p><a href="register.php" class=" bg-light btn btn-outline-danger">Zaregistrujte sa</a></p>
        </div>     
      </form>
  </main>
  <?php include('../parts/footer.php')?>  
</body>
</html>