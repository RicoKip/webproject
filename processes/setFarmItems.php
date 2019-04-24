<!--
Created by: Eric Kipkemoi
Edited and referenced other code implementation
Outsourced images used in the project
References: 
W3S - Login and Registration forms and processes, Responsive web deisigns image file upload, grid view and
box sizing properties. Web styling.
StackOverflow - Google maps API implementation, Login and registration implementation, Apache server 
web programming implementation.
YouTube tutorials - server user login and registration with sessions, image database uploads, Google Maps
geocoding and implementation, database storage implementation using php and mysql, embedded web javascript
Links to the reference criteria available in the project report
-->
<?php

//connection to database
include ('connection.php');  

//specifying the name of the column in the sought table to be referenced when getting data for that table which = farm
$title = "farm";
$sql = "select * from users where title = '$title'";
$result = mysqli_query($conn, $sql);
//iterate through all the possible values and print out in list form
while($row = mysqli_fetch_array($result)){
    echo "<div class='row boxSpc' style='height: 240px;border: solid gainsboro 1px;border-radius: 2px; margin: 5px;'>";
        echo "<div class='col-5 imagebox'>";
            echo "<img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: contain;'>";
        echo "</div>";
        echo "<div class='col-7'>";
            echo "<div class='row'>";
                echo "<h1 style='margin-left: 10px;'>".$row['name']."</h1>";
            echo "</div>";
            echo "<div class='row'>";
                echo "<div class='col-3 locIcon'></div>";
                echo "<div class='col-9'><p style='margin-left: 10px;'>".$row['address_one']."</p></div>";
            echo "</div>";
            echo "<div class='row'>";
                echo "<div class='col-3 mailIcon'></div>";
                echo "<div class='col-9'><p style='margin-left: 10px;'>".$row['email']."</p></div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "<hr class='new1'>";
}
