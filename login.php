<?php
//login server process
//establish connection
require_once ('connection.php');
//start session
session_start();
//get user details from login form
$email = $_GET['email'];
$pass = $_GET['password'];
//empty query variable
$query = "";
//set query statement
$query = "select * from users where email = '$email' and pass = '$pass'";
//call query statement
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
//check if user details are in the database
if(mysqli_num_rows($result) > 0){
    //get user details and store in sessions
    $_SESSION['userId']=$row['id'];
    $_SESSION['userName']=$row['name'];
    //$_SESSION['userTitle']=$row['title'];
    //$_SESSION['userEmail']=$row['email'];
    $_SESSION['userAdr1']=$row['address_one'];
    $_SESSION['userAdr2']=$row['address_two'];
    $_SESSION['userZip']=$row['zip'];
    $_SESSION['userCity']=$row['city'];
    $_SESSION['userCountry']=$row['country'];
    //$_SESSION['userImage']=$row['image'];
    //$_SESSION['userDesc']=$row['uDesc'];
    //redirect to index page with new sessions
    header("location:index.php");
    
}else{
    //error message to show details dont match
    echo "Invalid details";
}


?>