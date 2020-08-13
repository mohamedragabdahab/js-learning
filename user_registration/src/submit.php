<?php

$usr = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];
$rePass = $_GET['rePassword'];
$gender = $_GET['gender'];
$years = $_GET['years'];
$days = $_GET['days'];
$months = $_GET['months'];
$fav1 = $_GET['fav1'];
$fav2 = $_GET['fav2'];
$fav3 = $_GET['fav3'];
$fav4 = $_GET['fav4'];
$fav5 = $_GET['fav5'];
echo "<b>Username : </b>" . $usr . "<br>" .
    "<b>Email :</b>" . $email . "<br>" .
    "<b>Password :</b>" . $pass . "<br>" .
    "<b>RePassword :</b>" . $rePass . "<br>" .
    "<b>Gender :</b>" . $gender . "<br>" .
    "<b>Years :</b>" . $years . "<br>" .
    "<b>Days :</b>" . $days . "<br>" .
    "<b>Months :</b>" . $months . "<br>" .
    "<b>hobby :</b>" . $fav1 . "/" . $fav2 . "/" . $fav3 . "/" . $fav4 . "/" . $fav5 ;


