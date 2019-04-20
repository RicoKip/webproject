<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $title = "farms"?>
<?php $heading = "FARMS"?>
<?php include ('includes/header.php');?>
<?php include ('includes/navbarTemp.php');?>
<?php include ('includes/listViewTempHeader.php');?>

<?php
// code to update list view with saved services
include ('processes/setFarmItems.php');
?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
