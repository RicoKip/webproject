<?php

//establish connection to database
include ('connection.php');

//set session
session_start(); 
$user_id = $_SESSION['userId'];

//get user data
$query = "select * from users where id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

echo "<div class='row'>
         <div class='content contentBrd'>
             <div class='backGroundImage slideshowBrd'>
                 <img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: cover;'>
             </div>
             <div class='boxTxt'>
                 <p style='margin-top: 5px;'>".$row['uDesc']."</p>
             </div>
             <hr class='new1'>
             <div class='row'>
                 <div class='col-6 boxSpc' style='padding:5px'>
                    <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>UPLOADS</h1></div>";
           include ('setUserForums.php');
           echo "</div>
                 <div class='col-6 boxSpc' style='padding:5px'>
                    <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>LOCATION</h1></div>";
           
           include ('geocode.php');
           
            echo "<hr class='new1'>
                  <div class='row'>
                    <div class='col-12 boxTxt'>
                      <input id='address' type='textbox' value='".$address."'>
                          <hr class='new1'>
                      <div><button id='submit' class='signInBtn' style='width: 30%; margin-left: 35%; margin-right: 35%;'>Locate</button></div>
                    </div>
                  </div>
                  <hr class='new1'>";
            echo   "<div id='mapView'>
                    </div>
                 </div>
             </div>
             <div class='row'>
                 <div class='col-12' style='padding:5px'>
                    <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>GALLERY</h1></div>";
           include ('setUserGallery.php');
           echo "</div>
             </div>
         </div>
     </div>";