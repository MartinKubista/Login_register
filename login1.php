<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <link http-equip="Content-Type" cotent="login.html; charset-UTF-8">
</head>
    <body>
        <?php
            if($_POST["username"] == "ma" && $_POST["password"] == "ma"){

                echo "Prihlaseny";

            }
            else{

                echo"Mozno nabuduce";    
                
                             
            }
        ?>
        <input type="button" value="Home" class="homebutton" id="btnHome" 
        onClick="document.location.href='login1.html'" />
    </body>
</html>