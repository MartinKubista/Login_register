<?php
require_once('connection.php');
$isEmpty = false;

$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$hash = md5($_POST["password"]);

if (empty($username)) {
    $isEmpty = true;
}
if (empty($password)) {
    $isEmpty = true;
}

if ($isEmpty == true) {
    echo "Nieco si nezadal" . "<br>";
}

if ($isEmpty == false) {
    $query = "SELECT * FROM users WHERE Meno='$username' AND Heslo='$hash'";
    $results = mysqli_query($link, $query);
    
    if (mysqli_num_rows($results) == 1) {

        echo "Uspesne si sa prihlasil" . "<br>";
    }
    else {
        echo "Zadal si nespravne meno alebo heslo" . "<br>";
    }
}
?>