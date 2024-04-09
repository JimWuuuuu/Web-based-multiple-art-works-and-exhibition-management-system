<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_GET['activity_id'])) { 
     $activity_id=$_GET['activity_id'];
     	
	
	$sql="UPDATE activity
            SET activity_level='1' WHERE id='$activity_id'; ";
      mysqli_query($conn,$sql);
	
   header("Location: activity_check.php");
   exit();

	
 } 