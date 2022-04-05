<?php
require_once('connection.php');
include('./parts/header.php');
include('getUser.php');
?>
<main class="container">
   <ul class="list-group">
       <li class="list-group-item list-group-item-action active d-flex row">
           <span class="col-1"> ID.</span>
           <span class="col-2"> Avatar</span>
           <span class="col-3"> Username</span>
           <span class="col-3"> Surname</span>
           <span class="col-3"> Email</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
        <a href="index.php" class="text-decoration-none">
        <li class="list-group-item list-group-item-action d-flex row align-items-center">
            <span class="text-danger col-1"> <?php echo $user["User_ID"] ?></span>
            <div class="col-2">
                <img src="./img/<?php echo $user["avatar"]?>" alt="<?php echo $user["Meno"]?>" style="width: 30px">
            </div>
            <span class="col-3"> <?php echo $user["Meno"] ?></span>
            <span class="col-3"> <?php echo $user["Priezvisko"] ?></span>
            <span class="col-3"> <?php echo $user["Email"] ?></span>
        </li>
   
   <?php endforeach ?>
   
   
</main>
<?php include('./parts/footer.php'); ?>