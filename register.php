<?php
//registration process. called by registration form
//establish connection
require_once ('connection.php');
//start session
session_start();

//get user details from form. When upload button is selected
if(isset($_POST['upload'])){
    //uploaded images will be stored in this directory
    $target = "images/uploads/".basename($_FILES['image']['name']);

    //get submitted data
    $image = $_FILES['image']['name'];
    $title = $_POST['tname'];
    $name = $_POST['cname'];
    $email = $_POST['email'];
    $pass = $_POST['passWd'];
    $addr1 = $_POST['addr1'];
    $addr2 = $_POST['addr2'];
    $zip = $_POST['zipCd'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $userDesc = $_POST['uDesc'];
    //empty query variable
    $query = "";
    //create a query statement to check if the email being registered exists
    $query = "select * from users where email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    //if it exists an erro message with user being redirected back to registration 
    if(mysqli_num_rows($result) > 0){
        //checks if email already exists. outputs an error message
        echo "This email already exists. Register a new one";
        header("location:registrationForm.php");

    }else{
        //if no email exists...
        //move uploaded image to directory
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        //statement to insert data
        $query = "INSERT INTO users (title, name, email, pass, address_one, address_two, zip, city, country, uDesc, image)"
                . "VALUES ('$title', '$name', '$email', '$pass', '$addr1', '$addr2', '$zip', '$city', '$country', '$userDesc', '$image')";
        $result = mysqli_query($conn, $query);
        //once query is executed
        if($result){
            //set another query to obtain the information stored for the user
            $query = "select * from users where email = '$email'";
            //get the newly inserted detaisl
            $newresult = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($newresult);
            if(mysqli_num_rows($newresult) > 0){
                //get user details and store in session
                $_SESSION['userId']=$row['id'];
                $_SESSION['userName']=$row['name'];
                $_SESSION['userTitle']=$row['title'];
                $_SESSION['userEmail']=$row['email'];
                $_SESSION['userAdr1']=$row['address_one'];
                $_SESSION['userAdr2']=$row['address_two'];
                $_SESSION['userZip']=$row['zip'];
                $_SESSION['userCity']=$row['city'];
                $_SESSION['userCountry']=$row['country'];
                $_SESSION['userImage']=$row['image'];
                $_SESSION['userDesc']=$row['uDesc'];
                //redirect to index page with new sessions
                header("location:index.php");
            }else{
                echo "User Details were not inserted successfully!! Try again";
                header("location:registrationForm.php");
            }

        }else{
            //query failed to execute
            echo "Did not connect!";
            header("location:registrationForm.php");
        }
    }
}
//close database connection
mysqli_close();