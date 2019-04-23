<?php
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
    $query = "";
    //query
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO gallery (user_id, image) VALUES ('".$userImageId."', '".$image."')";
    //execute query
    $result = mysqli_query($conn, $query);
    
    //store images into folder
    if($result){
        $error = "Image was uploaded successflly";
        header("location:account.php");
    }else{
        $error = "Error! Uploading image";
    }
}
?>