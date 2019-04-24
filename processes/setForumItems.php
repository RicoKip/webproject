<?php
//establish database connection
include ('connection.php');  

//identify column to be reference in query = forum
$title = "forum";
$sql = "SELECT * FROM offers WHERE title = '$title'";
$result = mysqli_query($conn, $sql);
//iterate all possible values
while($row = mysqli_fetch_array($result)){
    echo "<div class='row boxSpc' style='height: 150px;border: solid gainsboro 1px;border-radius: 2px;margin: 5px;'>";
        echo "<div class='col-3 imagebox'>";
            echo "<img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: contain;'>";
        echo "</div>";
        echo "<div class='col-9 boxTxt'>";
            echo "<div>";
                //Description of the item
                echo "<p style='margin-top: 5px;'>".$row['offerDesc']."</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "<hr class='new1'>";
}

