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
//start sessions
session_start();
//get user id from session
$userImageId = $_SESSION['userId'];
//method to save images to gallery table in database
if(isset($_POST['upload'])){
    //uploaded images will be stored here
    $target = "images/uploads/".basename($_FILES['image']['name']);
    
    //get submitted data
    $image = $_FILES['image']['name'];
    $query = "";
    //query
    //store images into folder
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO gallery (user_id, image) VALUES ('".$userImageId."', '".$image."')";
    //execute query
    $result = mysqli_query($conn, $query);
    //when query executes proceeds to redirect bac to account page
    if($result){
        $error = "Image was uploaded successflly";
        header("location:account.php");
    }else{
        $error = "Error! Uploading image";
    }
}
?>