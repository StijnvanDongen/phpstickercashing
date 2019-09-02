<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 2-9-2019
 * Time: 09:41
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
    <title>Inloggen</title>
</head>
<body>
    <div class="login">
        <form action="login.php" method="post"><p>Inloggen</p>
            <div class="form-group">
                <p>Email</p>
                <input type="email" name="email" placeholder="Voer je email in">
            </div>
            <div class="form-group">
                <p>Wachtwoord</p>
                <input type="password" name="password" id="password" placeholder="Voer hier je wachtwoord in">
            </div>

            <input class="login" type="submit" value="Inloggen">

        </form>
    </div>
</body>
</html>
