
<?php  
//Start the Session
session_start();
require('dbconnection.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{
$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Welcome " . $username . " ";
echo '<br>';
echo "<a href='logout.php'><button>Logout</button></a>";
 
}else{
    echo "You are not logged in";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Library App</title></title>
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class='container'>
   <form class="form-signin" method="POST">
        <h2 class="form-signin-heading col-md-8 col-md-offset-5">Please Login</h2>
        <div class="input-group col-md-8 col-md-offset-5">
	    Username: <input type="text" name="username" class="form-control" required>
        </div>
        <div class="input-group col-md-8 col-md-offset-5">
        <label for="password" class="sr-only">Password</label>
        Password: <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <hr>
        <button class="btn  btn-primary col-md-8 col-md-offset-5" type="submit"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        <a class="btn btn-primary col-md-8 col-md-offset-5" href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a>
        <a class="btn btn-primary col-md-8 col-md-offset-5" href="index.php"><span class="glyphicon glyphicon-home"></span> Back to Home Page</a>
      </form>
</div>
</body>
<hr>
<br>
<footer>
    &copy; 2017-2018 Created by Andrei Indries.
</footer>
</html>
     