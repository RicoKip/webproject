<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = mysqli_connect('localhost', 'mamp', 'root', 'fyp'); 

$user_id = $_SESSION['userId'];
$user_image = $_SESSION['image'];
$user_desc = $_SESSION['userDesc'];

echo "<div class='row'>
         <div class='content contentBrd'>
             <div class='backGroundImage slideshowBrd'>
                 <img src='images/uploads/".$user_image."' style ='width: 100%;max-height: 100%;object-fit: contain;'>
             </div>
             <div class='boxTxt'>
                 <p style='margin-top: 5px;'>".$user_desc."</p>
             </div>
             <hr class='new1'>
             <div>
                 <div class='col-6'>";
           include ('setUserForums.php');
           echo "</div>
                 <div class='col-6'>
                 <h1 style='text-align: center'>UPLOAD SERVICE/FORUM</h1>               
                 <div>";
           include ('processes/uploadGallery.php');
           echo "</div>
                 </div>
             </div>
         </div>
     </div>";
