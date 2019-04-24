<!DOCTYPE html>
<!--set session-->
<?php
session_start();
?>
<?php $title = "Services"?>
<?php $heading = "SERVICES"?>
<?php include ('includes/header.php');?>
<!--set navigation bar with sessions-->
<?php include ('includes/navbarTempHeader.php');?>
    <?php
    //check if session has been set
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
<?php include ('includes/listViewTempHeader.php');?>
    <?php
    // code to update list view with saved services
    include ('processes/setServiceItems.php');
    ?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
