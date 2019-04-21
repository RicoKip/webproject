<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//db connection
$conn = mysqli_connect('localhost', 'mamp', 'root', 'fyp'); 
//set session
session_start();

//get user details from session
$user_id = $_SESSION['userId'];
$user_image = $_SESSION['image'];
$user_desc = $_SESSION['userDesc'];
//account layout
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
                 <div>
                 <form action='uploadGallery.php' method='post'>
                    <input type='hidden' name='size' value='1000000'>
                    <input type='file' name='image'>
                    <label for='email'><b>Title</b></label>
                    <input type='text' placeholder='Enter Service or Forum' name='title'>
                    <textarea name='text' cols='20' rows='20' placeholder='Enter description being advertised'></textarea>
                    <button type='submit' name='upload' class='signInBtn'>SUBMIT</button>           
                </form>
                 </div>
                 </div>
                 <div>
                 <h1 style='text-align: center'>UPLOAD GALLERY</h1>
                 <div class='row'>
                    <div class='content contentBrd'>
                        <form action='uploadGallery.php' method='post'>
                            <input type='hidden' name='size' value='1000000'>
                            <input type='file' name='image'>
                            <button type='submit' name='upload' class='signInBtn'>UPLOAD</button>           
                        </form>
                    </div>
                </div>  
                 </div>
             </div>
         </div>
     </div>";
