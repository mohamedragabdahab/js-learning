<?php
$usr = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$rePass = $_POST['rePassword'];
$gender = $_POST['gender'];
$years = $_POST['years'];
$days = $_POST['days'];
$months = $_POST['months'];
$fav1 = $_POST['fav1'];
$fav2 = $_POST['fav2'];
$fav3 = $_POST['fav3'];
$fav4 = $_POST['fav4'];
$fav5 = $_POST['fav5'];
echo "<b>Username : </b>" . $usr . "<br>" .
    "<b>Email :</b>" . $email . "<br>" .
    "<b>Password :</b>" . $pass . "<br>" .
    "<b>RePassword :</b>" . $rePass . "<br>" .
    "<b>Gender :</b>" . $gender . "<br>" .
    "<b>Years :</b>" . $years . "<br>" .
    "<b>Days :</b>" . $days . "<br>" .
    "<b>Months :</b>" . $months . "<br>" .
    "<b>hobby :</b>" . $fav1 . "/" . $fav2 . "/" . $fav3 . "/" . $fav4 . "/" . $fav5 ;


