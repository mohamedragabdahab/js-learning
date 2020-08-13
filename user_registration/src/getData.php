<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="loginStyle.css" rel="stylesheet">
</head>
<body>
<h2> Login Here </h2>
<form>
    <input type="email" name="email" class="form-control" value="" title="email" placeholder="Enter your Email" required
           autofocus>
    <input type="password" name="password" class="form-control" value="" title="password" placeholder="Enter your password"
           required>
    <input type="submit" value="Login" class="btn-success">
    <p>Dont have an account? <a href="signupForm.html">Sign Up </a></p>
</form>

<p>
    <a href="#">forgot your password?</a>
</p>

</body>
</html>
<?php
echo "Username : " . $_GET["email"];
echo "<br>";
echo "Pass : " .  $_GET["password"];
?>