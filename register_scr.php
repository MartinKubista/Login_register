<!DOCTYPE html>
<html lang="en">
<head>
<link http-equip="Content-Type" cotent="register.html; charset-UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        session_start();

        $username = "";
        $email    = "";
        $errors = array(); 

        $db = mysqli_connect('localhost\register.html', $username, $email, 'registration');

        if (isset($_POST['reg_user'])) {

        $username = mysqli_real_escape_string($db, $_POST['username']);     
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $psw = mysqli_real_escape_string($db, $_POST['psw']);
        $psw_repeat = mysqli_real_escape_string($db, $_POST['psw_repeat']);
        


        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($psw)) { array_push($errors, "Password is required"); }
        if ($psw != $psw_repeat) {
            array_push($errors, "The two passwords do not match");
        }


        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { 
            if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            }
        }


        if (count($errors) == 0) {
            $password = md5($psw);

            $query = "INSERT INTO users (username, email, password) 
                    VALUES('$username', '$email', '$password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
        }
        ?>
</body>
</html>
