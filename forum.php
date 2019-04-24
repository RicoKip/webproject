<!DOCTYPE html>
<!--Set session-->
<?php
session_start();
?>
<!--page title-->
<?php $title = "Forum"?>
<!--body title/heading-->
<?php $heading = "FORUM"?>
<?php include ('includes/header.php');?>
<!--set navigation bar with sessions-->
<?php include ('includes/navbarTempHeader.php');?>
    <?php
       //checks if session is set. Server centric
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
<!--set forum items-->
    <?php
    // code to update list view with saved forum
    include ('processes/setForumItems.php');
    ?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
