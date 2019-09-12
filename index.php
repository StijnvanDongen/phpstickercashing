<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sticker Caching</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>


        <div class="main">
            <div class="welcome">
                <?php
                if (isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    echo "<h2>Welkom $email</h2>";
                }else
                    echo"<h2>Maak hier een account aan of log in</h2>";
                ?>
            </div>
        </div>
        <?php
        require 'header.php';
        ?>


    <div class="information">
        <div class="uitleg">
            <h3>Uitleg</h3>
            <p>Sticker caching is gemaakt voor mensen die van wandelen houden maar die graag iets meer willen doen dan alleen wandelen.</p>
            <p>Verzamel objecten tijdens je wandelingen en win leuke prijzen bij verschillende winkels bij jou in de buurt!</p>
            <p>Objecten verzamel je door QR-codes te scannen die hangen op verschillende locaties.</p>
            <p>Deze locaties zijn te zien op een kaartje zodat je weet waar je naartoe moet lopen.</p>
            <p>Mee doen is gratis en het enige wat je hoeft te doen is een profiel aan te maken en in te loggen</p>
        </div>

        <div class="winkeliers">
            <h3>Winkeliers</h3>
            <p>Als winkel eigenaar kan je toestemming geven om een QR-code bij jou winkel te laten hangen.</p>
            <p>Aan deze QR-code kan een advertentie van jou winkel worden gehangen en je kan kiezen om mensen die de code scannen te belonen met bijvoorbeeld kortingscoupons.</p>
            <p>Ben jij een winkeleigenaar en lijkt jou dit een leuk idee? Neem dan contact op!</p>
            <p>Tel: 076 1234567</p>
            <p>Email: StickerCaching@hotmail.com</p>
        </div>
    </div>

    </body>
</html>
