<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="Contactme.css">
</head>
<style>
.city {
  background-color: tomato;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}
</style>
<body>
    
      <p  style="font-size:50px; font-weight:bold;">
         <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
           
        }
       }
       ?>
    
    <ul>

    <li><a href="news.asp">News</a></li>
    <li><a href="Games.php">Games</a></li>
    <li><a href="homepage.php">Home</a></li>
    <li><a href="contactt.php">testms</a></li>
    
    </ul>
     
  
  </div>




</body>
</html>



