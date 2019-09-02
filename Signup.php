<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 2-9-2019
 * Time: 09:01
 */

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
        <form action=""><p>Registreren</p>
            <div class="form-group">
                <p>Email</p>
                <input type="email" name="email" placeholder="Voer je email in">
            </div>

            <div class="form-group">
                <p>Wachtwoord</p>
                <input type="password" name="psw" placeholder="Voer een wachtwoord in">
            </div>

            <div class="form-group">
                <p>Herhaal wachtwoord</p>
                <input type="password" name="psw" placeholder="Herhaal je wachtwoord">
            </div>

            <input class="register" type="submit" value="Register">
        </form>
</div>

</main>
</body>
</html>


