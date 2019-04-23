<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//connection to database
include ('connection.php'); 

session_start();
//get user id from session
$userImageId = $_SESSION['userId'];

if(isset($_POST['upload'])){
    //uploaded images will be stored here
    $target = "images/uploads/".basename($_FILES['image']['name']);
    
    //get submitted data
    $image = $_FILES['image']['name'];
    $titleImage = $_POST['title'];
    $detail = $_POST['text'];
    
    $query = "";
    //query
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO offers (user_id, title, offerDesc, image) VALUES ('".$userImageId."', '".$titleImage."', '".$detail."', '".$image."')";
    //execute query
    $result = mysqli_query($conn, $query);
    
    //store images into folder
    if($result){
        $error = "Offer was uploaded successflly";
        header("location:account.php");
    }else{
        $error = "Error! Uploading image";
    }
}
?>

