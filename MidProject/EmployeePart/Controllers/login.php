<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
</head>
<body>

<form method ="Get" action="dashboard.php">
<table>
    <?php require 'cookies_session.php';?>
    <tr>
        <td> Username</td>
        <td><input type="text"name="uname"value=""></td>
    </tr>
    <tr>
        <td> Password</td>
        <td><input type="password"name="password"value=""></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="remember" value="remember">Remember me</td>
    </tr>
    <tr>
        <td><input type="submit" name="login" value="login"> 
        <input type="reset" name="reset" value="reset"></td>
    </tr>
</table>>
</form>
</body>
</html>