<?php 
require_once('../scripts/connection.php');
include('../parts/header.php'); 
?>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 50px;
  }
 
</style> 
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<body class="bg-secondary">
<main>
<form action="../scripts/password_change_script.php" method="post">
        <div class="container">
          <h1>Zmena hesla</h1>
          <hr>
          <br>
          <div>
          <p><label for="psw"><b>Stare Heslo</b></label>
          <br><input class="bg-info"type="password" placeholder="Zadajte Stare Heslo" name="psw" id="psw" required>

          <p><label for="new-psw"><b>Nove Heslo</b></label>
          <br><input class="bg-info" type="text" placeholder="Zadajte Nove Heslo" name="new-psw" id="new-psw" required>
          <div>
          <div style = "padding-top: 20px">
          <p><button type="submit" class="bg-light btn btn-outline-danger">Zmenit</button>
          <p class="text-danger"><?php echo $message ?></p>
          </div>
          <br>
          <hr>
        </div>     
      </form>
</main>
</body>
<?php include('../parts/footer.php'); ?>