<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 2-9-2019
 * Time: 10:30
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>

    <header>
        <h1><a href='index.php'>Sticker Caching</a></h1>
        <nav>
            <?php
            if (isset($_SESSION['email'])){
                echo"<a href='logout.php'>Log uit</a>";

                if (isset($_SESSION['admin'])){
                    echo"<a href='profiles.php'>Profielen</a>";
                    echo"<a href='advertisement.php'>Advertisement Create</a>";
                }else if (isset($_SESSION['winkelier'])){
                    echo"<a href='advertisement.php'>Advertisement Create</a>";
                }
            }else{
                echo" <a href='login.php'>Login</a>";
                echo" <a href='Signup.php'>Registreer</a>";
            }
            ?>
        </nav>
    </header>
    </body>
</html>
