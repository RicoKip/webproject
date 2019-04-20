<?php

//retrieve services form database
$db = mysqli_connect("localhost", "root", "root", "fyp");
$sql = "SELECT * FROM farms";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result)){
    echo "<div class='row boxSpc' style='height: 200px;border: solid gainsboro 1px;border-radius: 2px; margin: 5px;'>";
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
