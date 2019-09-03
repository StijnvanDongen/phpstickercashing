<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 3-9-2019
 * Time: 13:14
 */

require 'header.php'

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Aanmaakformulier</title>
</head>
<body>
    <div class="container-create">
        <div class="welkom">
            <h1>Maak hier een object aan</h1>
        </div>

        <div class="form">
            <form action="" id="userform"><h1>Voeg object toe</h1>
                <div class="form_group">
                    <input type="text" name="name" placeholder="Voeg hier een objecrtnaam toe">
                </div>
                <div class="form_group">
                    <input type="file" name="picture" placeholder="Voeg hier een objectplaatje toe">
                </div>
                <div class="form_group">
                    <textarea name="description" form="userform" placeholder="Voeg hier een beschrijving toe"></textarea>
                </div>
                <div class="form_group">
                    <input type="text" name="address" placeholder="Voeg hier een adres toe">
                </div>
            </form>

            <input class="create" type="submit" value="Aanmaken">

        </div>
    </div>
</body>
</html>
