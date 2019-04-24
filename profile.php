<!DOCTYPE html>
<!--Set sessions-->
<?php
session_start();
?>
<!--set page title-->
<?php $title = "Profile"?>
<?php include ('includes/header.php');?>
<!--set navigation bar with sessions-->

<?php include ('includes/navbarTempHeader.php');?>
    <?php
    //check if session is set: display the session set as the new navbar item. Get access to hidden links
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

<!--include profile-->
<?php include ('processes/setProfile.php');?>

<?php include ('includes/footer.php');?>