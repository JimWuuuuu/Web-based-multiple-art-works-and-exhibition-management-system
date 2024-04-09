<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_GET['artist_id'])) { 
     $artist_id=$_GET['artist_id'];
     	
	
	$sql="DELETE FROM artist WHERE artist_id='$artist_id'; ";
      mysqli_query($conn,$sql);
	
   header("Location: info_art.php");
   exit();

	
 } 