<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = 'webtasks';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         if(isset($_GET['delete'])) {
           $sql = "DELETE FROM cars WHERE ID=".$_GET['delete'];
	         $result = mysqli_query($conn,$sql);
         }
         if (isset($_GET['maker'])) {
          $sql = "INSERT INTO cars (ID, maker, model, price, image, year)
          VALUES (NULL, '".$_GET['maker']."','".$_GET['model']."','".$_GET['price']."','".$_GET['url']."','".$_GET['year']."')";
          $result = mysqli_query($conn, $sql);
         }
    $sql = "SELECT * FROM cars";
	$result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
        ?>