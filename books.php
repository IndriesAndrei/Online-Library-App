<?php


require('dbconnection.php');


// if(!isset($_SESSION['id'])){
//     # redirect to the login page
//     header('Location: login.php?msg=' . urlencode('Login first.'));
//     exit();
// }  


function setBook(  $book, $category ) {
    global $conn;
    $query = "INSERT INTO books ( bookname, category) VALUES ( \"{$book}\", \"{$category}\")";
    $result = mysqli_query( $conn, $query );
    $_SESSION['message'] = "Book saved"; 

}



if (isset($_GET['del_book'])) {
   $id = $_GET['del_book'];

   mysqli_query($conn, "DELETE FROM books WHERE id=".$id);
   
}


function getBooks($id, $bookname, $category) {
    global $conn;
    $query2 = "SELECT * FROM books";
    $result2 = mysqli_query($conn, $query2);

    while ( $list = mysqli_fetch_array($result2) ) {
       
      echo "Book Name: " . $bookname . " Book category: "  . $category. " <br />";
       
    }
}

    
    if ( isset( $_POST['bookname'] ) && $_POST['category'] !== "") {	
        // $id = $_POST['id'];	
        $bookname = $_POST['bookname'];
        $category = $_POST['category'];

		setBook( $bookname, $category );
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
    
        <div class="well col-md-12 col-md-offset-2">
            <div class="welcome col-md-12 col-md-offset-3">
            <h1>Welcome to the Online Library </h1>
            <h3 class="col-md-offset-0">Please Enter Book Title and Book Category to add a new book</h3>
            </div>
        </div>
        <div class="well col-md-12 col-md-offset-3">
        <form class="form-signin" method="POST" action="booklist.php">
       

            <div class="input-group col-md-12 col-md-offset-5">
            Book Title: <input type="text" name="bookname" class="form-control"  required>
            </div>
            <div class="input-group col-md-12 col-md-offset-5">
            Category: <input type="text" name="category" id="category" class="form-control" required>
            </div>
            <hr>
        
      
        <button class="btn  btn-primary col-md-8 col-md-offset-5" type="submit"><span class="glyphicon glyphicon-plus" name="add book"></span> Add Book</button>
        <a class="btn  btn-primary col-md-8 col-md-offset-5" href="booklist.php" type="submit"><span class="glyphicon glyphicon-list"></span> Book List</button>
        <a class="btn btn-primary col-md-8 col-md-offset-5" href="index.php"><span class="glyphicon glyphicon-home"></span> Back to Home Page</a>
      </form>
        </div>
    </div>
</body>




<footer style="text-align:center; clear:both">
    &copy; 2017-2018 Created by Andrei Indries.
</footer>
</html>