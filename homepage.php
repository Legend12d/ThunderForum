<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="stii.css">
</head>
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
    
      </p>

   

      <p style="background-image: url('img_girl.jpg');">
       
       
    </p>
      

        <ul>
     <li><a href="logout.php">Logout</a></li>
     <li><a href="Contact.php">Contact</a></li>
     <li><a href="news.asp">News</a></li>
     <li><a href="Games.php">Games</a></li>
    
  
       </ul>
       
    
    </div>
</body>
</html>