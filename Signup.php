<?php
require 'config.php';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Registreren</title>
</head>
<body>
    <main>
        <div class="register">
            <form action="register_config.php" method="post"><p>Registreren</p>
<!--                <input type="hidden" name="type" value="register">-->
                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="Voer je email in">
                </div>

                <div class="form-group">
                    <p>Wachtwoord</p>
                    <input type="password" name="password" id="password" placeholder="Voer een wachtwoord in" minlength="8"
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"   required>
                </div>
    
                <div class="form-group">
                    <p>Herhaal wachtwoord</p>
                    <input type="password" name="repeat_password" id="repeat_password" placeholder="Herhaal je wachtwoord" minlength="8"
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required>
                </div>

                <input class="register" type="submit" value="Register">
            </form>
        </div>

    </main>
</body>
</html>
<?php

?>

