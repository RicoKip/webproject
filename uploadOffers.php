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

