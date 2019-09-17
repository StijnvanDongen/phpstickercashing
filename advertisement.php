<?php
session_start();
require 'header.php';
require 'config.php';
if (isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $img = $_FILES['image']['Name'];

    $insert = "INSERT INTO advertisement VALUES ('NULL', '$name', '$img')" ;


    if($insert)
    {
        move_uploaded_file($_FILES['image']['temp_Name'], "img/$img");
        echo "<script>alert('image has been uploaded to folder')</script>";
    }
    else{
        echo "<script>alert('image didnt upload to folder')</script>";
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>Add advertisement</title>
</head>
<body>
<?php
if (isset($_SESSION['email'])) {

    echo "<h2>Only Admins and ShopOwners can add a advertisement!</h2>";

    if (isset($_SESSION['admin'])) {
        echo
        "<div class='container-create'>
    <div class='welkom'>
        <h1>Maak hier een advertentie aan</h1>
    </div>

    <div class='form'>
        <form action='advertisement.php' method='post' enctype='multipart/form-data'><h1>Voeg advertentie toe</h1>
            <div class='form_group'>
                <label>Name</label>
                <input type='text' name='name'>
            </div>
            
            <div class='form_group'>
                <label>Select an advertisement to upload</label>
                <input type='file' name='picture' placeholder='Voeg hier een objectplaatje toe'>
            </div>
            <div>
                <input class='create' type='submit' value='Aanmaken'>
            </div>
        </form>



    </div>";
    }
}else if (isset($_SESSION['winkelier'])){
    echo
    "<div class='container-create'>
    <div class='welkom'>
        <h1>Maak hier een advertentie aan</h1>
    </div>

    <div class='form'>
        <form action='advertisement.php' method='post' enctype='multipart/form-data'><h1>Voeg advertentie toe</h1>
            <div class='form_group'>
                <label>Name</label>
                <input type='text' name='name'>
            </div>
            
            <div class='form_group'>
                <label>Select an advertisement to upload</label>
                <input type='file' name='picture' placeholder='Voeg hier een objectplaatje toe'>
            </div>
            <div>
                <input class='create' type='submit' value='Aanmaken'>
            </div>
        </form>



    </div>";
}else{
    echo "<p>Only Admins and ShopOwners can add an advertisement</p>";
    echo" <a href='login.php'>Login</a>";
    echo" <a href='Signup.php'>Registreer</a>";
}
?>
</div>
</body>
</html>