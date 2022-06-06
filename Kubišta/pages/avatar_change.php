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
<main class>
  <form action="../scripts/avatar_change_script.php" method="post">
    <div class="container">
      <h1>Zmena avatara</h1>
      <hr>
      <br>
      <div class="row align-items-center">
      <div class="col-4">
      <img src="../images/<?php  echo $avatar;?>"  style="width: 300px">
      </div>
      <div style= "margin-bottom: 150px" class="col-4 ">
      <p><select name="avatar"style="" class="bg-info form-select form-select-lg form-select-border-width-2 " aria-label=".form-select-lg example">
          <option disabled selected>Vyberte avatara</option>
          <option value="monkeyy.jpg">Monkey</option>
          <option value="pepega.jpg">Bagaňa</option>
          <option value="pikachuu.png">Pikapika</option>
        </select>
        </div>
      </div>
        <br>
        <div>
      <p><button type="submit" class="bg-light btn btn-outline-danger">Zmenit</button>
      <p class="text-danger"><?php echo $message ?></p>
      </div>
      <br>
    <hr>
    </div>
 
  </form>
</main>
</body>