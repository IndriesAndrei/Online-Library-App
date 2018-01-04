<?php

session_start();
require ('dbconnection.php');


// if(!isset($_SESSION['id'])){
//     # redirect to the login page
//     header('Location: login.php?msg=' . urlencode('Login first.'));
//     exit();
// }  

require ('books.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Library</title>
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


 <?php
   echo "<br>";
    
    $query = "SELECT * FROM books";
    $result = mysqli_query($conn, $query);
  ?>

  <div class="container">
    <table class="table">
	<thead>
		<tr>
			<th>Book id</th>
            <th>Bookname</th>
            <th>Category</th>
            <th>Action</th>
            <th></th>
		</tr>
	</thead>

	<tbody>
		<?php 
		

		$i = 1; while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
                <td> <?php echo $row['bookname']; ?> </td>
                <td> <?php echo $row['category']; ?> </td>
				<td class="delete"> 
                    <a href="booklist.php?del_book=<?php echo $row['id']; ?>"><button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-trash"></span> Delete</button></a>
                </td>
                <td class="update">
                    <a href="editbooks.php?edit=<?php  echo $row['id']; ?>" name="edit"><button class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Edit</button></a> 
				</td>
			</tr>
        <?php $i++; } ?>

       
        	
	</tbody>
   </table>
   </div>
    
</body>
</html>

    


