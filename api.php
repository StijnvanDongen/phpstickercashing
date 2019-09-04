<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 4-9-2019
 * Time: 15:46
 */
    require 'header.php';
    require 'footer.php';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">

    <title>Google maps </title>
</head>
<body>
    <h1>Locaties met QR codes</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };

        var map = new
        google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPr1C6cgCzPTg9AQiId7ZQiA9gXUo-kEQ&callback=myMap"></script>
</body>
</html>
