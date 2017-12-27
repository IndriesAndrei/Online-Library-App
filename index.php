<?php

  session_start();
  require 'dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Library App</title>
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="well col-md-8 col-md-offset-2">
            <div class="welcome col-md-10 col-md-offset-2">
            <h1>Welcome to the Online Library </h1>
            <h3>Please Register or Login for accessing the app</h3>
            </div>
        </div>
        <div class="well col-md-8 col-md-offset-2">
            <a class="btn btn-lg btn-primary col-md-offset-3" href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a>
            <a class="btn btn-lg btn-primary" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </div>
    </div>
</body>
<footer>
    &copy; 2017-2018 Created by Andrei Indries.
</footer>
</html>