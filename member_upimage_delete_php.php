<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_GET['image_id'])) { 
     $image_id=$_GET['image_id'];
     	
	
	$sql="DELETE FROM ccs_image WHERE id='$image_id'; ";
      mysqli_query($conn,$sql);
	
   header("Location: member_upimage_check.php");
   exit();

	
 } 