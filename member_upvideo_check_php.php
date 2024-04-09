<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_GET['video_id'])) { 
     $video_id=$_GET['video_id'];
     	
	
	$sql="UPDATE video 
		  SET upvideo_level='1' WHERE id='$video_id'; ";
      mysqli_query($conn,$sql);
	
   header("Location: member_upvideo_check.php");
   exit();

	
 } 