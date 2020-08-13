<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link href="../../public/styles/libs/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/styles/signUp.css" rel="stylesheet">
</head>
<body>
<h2>Sign Up</h2>
<form name="">
    <input type="text" title="username" name="username" class="form-control" placeholder="Enter your username" >
    <input type="email" title="email" name="email" class="form-control" placeholder="Enter your email" >
    <input type="password" title="password" name="password" class="form-control" placeholder="Enter your password">
    <input type="password" title="reEnterPassword" name="rePassword" class="form-control"
           placeholder="Re-Enter Your password" >
    <label>Gender :</label>
    <input type="radio" name="gender" value="Male" title="male">Male
    <input type="radio" name="gender" value="Female" title="female">Female<br>
    <p>Date Of Birth :</p>
    <select title="" name="years">
        <?php
        for ($years = 1900; $years <= 2020; $years++) {
            echo "<option value= $years >" . $years . "</option>";
        }

        ?>
    </select>
    <select title="" name="days">
        <?php
        for ($days = 1; $days <= 31; $days++) {
            echo "<option  value= $days >" . $days . "</option>";
        }
        ?>
    </select>
    <select title="" name="months">
        <?php
        $months = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
        for ($i = 0; $i < 12; $i++) {
            echo "<option value= $months[$i] >" . $months[$i] . "</option>";
        }
        ?>
    </select>
    <label style="display: block">Select you fav hobby :</label>
    <input type="checkbox" name="fav1" value="football" title="">Football
    <input type="checkbox" name="fav2" value="vollyball" title="">Vollyball
    <input type="checkbox" name="fav3" value="handball" title="">HandBall
    <input type="checkbox" name="fav4" value="basketball" title="">Basketball
    <input type="checkbox" name="fav5" value="reading" title="">Reading

    <input style="display: block" type="submit" value="Sign Up" title="" class="btn-success">
    <p>already have an account? <a href="loginForm.php">Login</a></p>
</form>
</body>
</html>




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


// write the code here to print the form submitted values