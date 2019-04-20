<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $title = "Forum"?>
<?php $heading = "FORUM"?>
<?php include ('includes/header.php');?>
<?php include ('includes/navbarTemp.php');?>
<?php include ('includes/listViewTempHeader.php');?>
<?php
// code to update list view with saved services
include ('processes/setForumItems.php');
?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
