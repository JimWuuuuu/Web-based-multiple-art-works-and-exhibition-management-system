<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_GET['id'])) { 
     $id=$_GET['id'];
     	
	
	$sql="DELETE FROM announcement WHERE id='$id'; ";
      mysqli_query($conn,$sql);
	
   header("Location: info_new.php");
   exit();

	
 } 