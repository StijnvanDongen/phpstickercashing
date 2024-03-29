<?php
session_start();
require 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;

        }
    </style>
</head>
<body style="background: white">

<div id="googleMap" style="width:100%;height:100%; margin:0 auto;"></div>

<script>
    function googleMap(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPos, showErr);
        }
        else{
            alert("Sorry! your Browser does not support Geolocation API")
        }
    }
    //Showing Current Poistion on Google Map
    function showPos(position){
        lat = position.coords.latitude;
        long = position.coords.longitude;
        var lattlong = new google.maps.LatLng(lat, long);
        var myOptions = {
            center: lattlong,
            zoom: 15,
            mapTypeControl: true,
            navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
        };
        var maps = new google.maps.Map(document.getElementById("googleMap"), myOptions);
        var markers = new google.maps.Marker({
            position:lattlong,
            map:maps});

        var infowindow = new google.maps.InfoWindow({
            content:"Je bent hier"
        });

        infowindow.open(maps,markers);
    }


    //Handling Error and Rejection
    function showErr(error) {
        switch(error.code){
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation API.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("USer location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
    }

    </script>
    <script>
    
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPr1C6cgCzPTg9AQiId7ZQiA9gXUo-kEQ&callback=googleMap">
    </script>
</body>
</html>
