<?php
//establish connection

require_once ('processes/connection.php');
session_start();
//when login button press
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($email) || empty($pass)){
            header("location:loginForm.php?Empty= Empty fields");
        }else{
            //test to see if data is being passed
            echo "Your username after escaping: {$email}<br>";
            echo "Your password after scaping and MD5: {$pass}<br>";
            $query = "SELECT * FROM users WHERE email='".$email."' AND pass'".$pass."'";
            
            
            $result = mysqli_query($conn, $query);
            //test query
            echo "Count of users with the same email and password = " . mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            //$active = $row['active'];
            $count = mysqli_num_rows($result);
            if($count > 0){
                //if it matches create session
                //session_register("email");
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
                header("location:index.php");
            }else{
                header("location:loginForm.php?Invalid= Enter correct details!");
            }
        }
    }
    
}else{}



/*$db = mysqli_connect("localhost", "root", "root", "fyp");
//from login form
$email = $_POST['email'];
$passWd = $_POST['passWd'];
//sql injection 
$email1 = stripcslashes($email);
$passWd1 = stripcslashes($passWd);
$email2 = mysqli_real_escape_string($email1);
$passWd2 = mysqli_real_escape_string($passWd1);

$sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$passWd'";
$result = mysqli_query($sql);
$row = mysqli_fetch_array($result);
//parse values from form
if ($row['email'] == $email2 && $row['pass'] == $passWd2){
    //define username and password
    echo "login success!!";
   
} else {
echo "Login Failed!!";    
}*/
