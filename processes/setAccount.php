<?php

//db connection
include ('connection.php'); 
//set session
session_start();

//get user details from session
$user_id = $_SESSION['userId'];
//get all details from user's row 
$query = "select * from users where id = '$user_id'";
$result = mysqli_query($conn, $query);
//fetch user data
$row = mysqli_fetch_array($result);

/*
 *account layout: gets image from database ans displays on background image, Image has to match stored images in the  
 *project directory ../images/upload/
 *includes a setUserForums method to obtain all the forumns the specific user id is tied to in the database
 *includes a form which users upload details to either services or forums
 *includes a form to upload images to a gallery table.
 */
echo "<div class='row'>
         <div class='content contentBrd'>
             <div class='backGroundImage slideshowBrd'>
                 <img src='images/uploads/".$row['image']."' style ='width: 100%;max-height: 100%;object-fit: cover;'>
             </div>
             <div class='boxTxt'>
                 <h1 style='margin-top: 5px; font-size: 20px; color:#6F6F6F'>".$row['uDesc']."</h1>
             </div>
             <hr class='new1'>
             <div class='row'>
                 <div class='col-6 boxSpc' style='padding:5px'>
                    <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>UPLOADS</h1></div>";
              include ('setUserForums.php');
           echo "</div>
                 <div class='col-6 boxSpc' style='padding:5px'>
                    <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>UPLOAD SERVICE/FORUM</h1></div>
                    <div>
                       <form action='uploadOffers.php' method='post' enctype='multipart/form-data'>
                          <hr class='new1'>
                          <div class='row boxTxt'>
                            <p>Click UPLOAD to select an image file</p>
                            <input type='hidden' name='size' value='1000000'>
                            <input type='file' name='image'>
                          </div>
                          <hr class='new1'>
                            <label for='email'><b>Title</b></label>
                            <input type='text' placeholder='Enter Service or Forum' name='title'>
                            <label for='text'><b>Enter Content</b></label>
                            <div><textarea name='text' cols='50' rows='20' placeholder='Enter description being advertised'></textarea></div>
                            <div><center><button type='submit' name='upload' class='signInBtn'>SUBMIT</button></center></div>           
                      </form>
                    </div>
                 </div>
             </div>
            <div class='row'>
                <div class ='col-12 boxSpc' style='padding:5px'>
                   <div class='boxTxt' style='background-color: #ccc'><h1 style='text-align: center'>UPLOAD TO GALLERY</h1></div>
                   <div class='row'>
                      <div class='content contentBrd'>
                          <form action='uploadGallery.php' method='post' enctype='multipart/form-data'>
                              <hr class='new1'>
                                <div class='row boxTxt'>
                                  <p>Click UPLOAD to select an image file</p>
                                  <input type='hidden' name='size' value='1000000'>
                                  <input type='file' name='image'>
                                </div>
                               <hr class='new1'>
                              <center><button type='submit' name='upload' class='signInBtn'>UPLOAD</button></center>           
                          </form>
                      </div>
                  </div>  
                </div>
            </div> 
         </div>
     </div>";
