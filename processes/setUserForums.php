<?php

//connect to database then run loop to retrieve all data in the list
//*without session
$conn = mysqli_connect('localhost', 'mamp', 'root', 'fyp'); 
//set session
session_start();
//get logged in user id
$user_id = $_SESSION['userId'];
//query to select all posts by user id
$sql = "SELECT * FROM offers WHERE user_id = '".$user_id."'";
$result = mysqli_query($conn, $sql);

//retrieve all data by running loop
while($row = mysqli_fetch_array($result)){
    echo "<div class='row boxSpc' style='height: 100px;border: solid gainsboro 1px;border-radius: 2px;margin: 5px;'>";
        echo "<div class='col-3 imagebox'>";
            echo "<img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: contain;'>";
        echo "</div>";
        echo "<div class='col-9 boxTxt'>";
            echo "<div>";
                //Description of the item-->
                echo "<p style='margin-top: 5px;'>".$row['offerDesc']."</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "<hr class='new1'>";
}

