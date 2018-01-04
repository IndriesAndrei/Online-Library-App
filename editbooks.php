<?php
 session_start();
 require 'dbconnection.php';
 require 'books.php';

 if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM books WHERE id=$id");
 
   
    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $bookname = $n['bookname'];
        $category = $n['category'];
       
    }
}



?>

 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="container">
    <div class="well col-md-12  col-md-offset-4">
    <form method="POST" action="booklist.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <h3 style="color: blue; font-weight:bold" class="col-md-12 col-md-offset-4">Edit Book: </h3>

        Book Name: <input type="text" name="bookname" value="<?php echo $bookname; ?>">
        Category: <input type="text" name="category" value="<?php echo $category; ?>">
        
        <!-- <a class="btn btn-success" type="submit"  name="update" href="booklist.php">Update</a> -->
        <?php if ($update == true): ?>
	        <button class="btn btn-success" type="submit" name="update" >Update</button>
        <?php else: ?>
	       <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>

        <?php
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $bookname = $_POST['bookname'];
            $category = $_POST['category'];
        
            mysqli_query($conn, "UPDATE books SET bookname='$bookname', category='$category' WHERE id=$id");
        
            header('Location: booklist.php');
        }
        ?>
     </form>  


    </div>
</div>

 </body>
 </html>
 