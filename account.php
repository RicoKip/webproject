<!DOCTYPE html>
<!--Establish session to update navigation bar status to show user signed in-->
<?php
session_start();
?>
<!--set page information-->
<?php $title = "Account"?>
<!--call html header-->
<?php include ('includes/header.php');?>
<!--set navigation bar with sessions-->
<?php include ('includes/navbarTempHeader.php');?>
    <?php
        if(isset($_SESSION['userName'])){?>
            <div class="dropdown">
                <button class="dropdownBtn" style="width:100%;height:100%;background-color: #333;"><?php echo $_SESSION['userName']?></button>                
                <div class="dropdown-content">
                    <a href="account.php">Account</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Log-Out</a>
                </div>
            </div>
        <?php
        }else{
            include ('includes/loginForm.php');
        }
    ?>
<?php include ('includes/navbarTempFooter.php');?>

<!--set body of account-->
<?php include ('processes/setAccount.php');?>
<!--set html footer-->
<?php include ('includes/footer.php');?>