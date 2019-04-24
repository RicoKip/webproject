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
//start session
session_start();
//get user id from session
$userImageId = $_SESSION['userId'];
//method to upload to offers table which has forum and service items
if(isset($_POST['upload'])){
    //uploaded images will be stored here
    $target = "images/uploads/".basename($_FILES['image']['name']);
    
    //get submitted data
    $image = $_FILES['image']['name'];
    $titleImage = $_POST['title'];
    $detail = $_POST['text'];
    
    $query = "";
    //query
    //store images into folder
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO offers (user_id, title, offerDesc, image) VALUES ('".$userImageId."', '".$titleImage."', '".$detail."', '".$image."')";
    //execute query
    $result = mysqli_query($conn, $query);
    //if query executes    
    if($result){
        $error = "Offer was uploaded successflly";
        header("location:account.php");
    }else{
        $error = "Error! Uploading image";
    }
}
?>

