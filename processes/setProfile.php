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

//establish connection to database
include ('connection.php');

//set session
session_start();
//obtain user data from sessions
$user_id = $_SESSION['userId'];

//get user data referencing session data
$query = "select * from users where id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

/*
 * output required information. All users forumn posted
 * location of the user through Google Maps API
 * Display all users images in gallery
 */
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