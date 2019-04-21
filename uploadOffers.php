<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//connection to database
$conn = mysqli_connect('localhost', 'mamp', 'root', 'fyp'); 

session_start();
//get user id from session
$userImageId = $_SESSION['userId'];

if(isset($_POST['upload'])){
    //uploaded images will be stored here
    $target = "images/uploads".basename($_FILES['image']['name']);
    
    //get submitted data
    $image = $_FILES['image']['name'];
    $titleImage = $_POST['title'];
    $detail = $_POST['text'];
    
    //query 
    $sql = "INSERT INTO offers (user_id, title, offerDesc, image) VALUES ('".$userImageId."', '".$titleImage."', '".$detail."', '".$image."')";
    //execute query
    mysqli_query($conn, $sql);
    
    //store images into folder
    if(move_uploaded_file($_FILES['image']['tempName'], $target)){
        $error = "Image was uploaded successflly";
    }else{
        $error = "Error! Uploading image";
    }
}
?>

