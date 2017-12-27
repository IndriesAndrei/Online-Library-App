<?php
session_start();
require('dbconnection.php');

// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        $smsg = "User Created Successfully.";
        }
        else{
        $fmsg ="User Registration Failed";
    }

    
    header ('Location: login.php');



}
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
<form class="form-signin" method="POST">
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading col-md-8 col-md-offset-5">Please Register</h2>
        <div class="input-group col-md-8 col-md-offset-5">
        Username: <input type="text" name="username" class="form-control" required>
       </div>
	    <div class="input-group col-md-8 col-md-offset-5">
        Password: <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control"  required>
        </div>
        <hr>
        <br>
        <button class="btn btn-primary col-md-8 col-md-offset-5" type="submit"><span class="glyphicon glyphicon-user"></span> Register</button>
        <a class="btn btn-primary col-md-8 col-md-offset-5" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <a class="btn btn-primary col-md-8 col-md-offset-5" href="index.php"><span class="glyphicon glyphicon-home"></span> Back to Home Page</a>
</form>
  
</div>
</body>
<br>
<hr>
<footer>
    &copy; 2017-2018 Created by Andrei Indries.
</footer>
</html>





