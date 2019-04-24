<!DOCTYPE html>
<!--Establish session.-->
<?php
session_start();
?>
<!--set page title-->
<?php $title = "farms"?>
<!--set body heading in setFarmItems file-->
<?php $heading = "FARMS"?>
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

<?php include ('includes/listViewTempHeader.php');?>
<!--include farm items-->
    <?php
    // code to update list view with saved farms from database
    include ('processes/setFarmItems.php');
    ?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
