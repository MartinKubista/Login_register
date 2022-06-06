<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/profile_script.php');
?>


<body class="bg-secondary">
<main class="container ">
    <h1 class="m-4 text-uppercase">Profil</h1>
    <hr>
    <br>
    <?php foreach ($users as $user) : ?>

        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-4"><img src="../images/<?php echo $user["avatar"] ?>" alt="<?php echo $user["username"] ?>" style="width: 300px;">
                    
                </div>
                <div class="col-6">
                    <p>

                    <div class=" row">
                        <div class=" bg-info col-4 list-group-item border border-3 border-dark">ID</div>
                        <div class=" bg-info col-4 border-top list-group-item border border-3 border-dark border-start-0"><?php echo $user["id"] ?></div>

                        <div class="w-100"></div>

                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark">Meno</div>
                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark border-start-0"><?php echo $user["username"] ?></div>

                        <div class="w-100"></div>

                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark">Priezvisko</div>
                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark border-start-0"><?php echo $user["surname"] ?></div>

                        <div class="w-100"></div>

                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark">Email</div>
                        <div class="bg-info col-4 list-group-item border border-3 border-top-0 border-dark border-start-0"><?php echo $user["email"] ?></div>
                        <div style="margin-top: 50px; ">
                            <?php if (isset($_SESSION["username"])) :
                                if ($_SESSION["username"] == $user["username"]) :?>
                                   <a href="../pages/avatar_change.php" class="bg-light btn btn-outline-success" style="margin-left: 38px;">Zmenit avatara</a>
                                    <a style="margin-left: 80px;" href="../pages/password_change.php" class="bg-light btn btn-outline-danger">Zmenit heslo</a>       
                            <?php endif;
                            endif; ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
        <hr>
    <?php endforeach ?>

</main>
</body>
<?php include('../parts/footer.php'); ?>