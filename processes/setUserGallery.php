<?php

//connect to database then run loop to retrieve all data in the list
include ('connection.php'); 
//set session
session_start();
//get logged in user id
$user_id = $_SESSION['userId'];
//query to select all posts by user id
$sql = "select * from gallery where user_id = '".$user_id."'";
$result = mysqli_query($conn, $sql);

//run loop to populate gallery
while($row = mysqli_fetch_array($result)){
    echo "<div class='imgGalleryBox'>
            <div class='col-12 imagebox'>       
              <img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: cover;'>
            </div>
          </div>";
}

