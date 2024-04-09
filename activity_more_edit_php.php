<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";

	

		if (isset($_GET['picid'])) { 
			$activity_id_more = $_GET['picid'];
			$sql_c = "SELECT  * FROM activity where id='$activity_id_more'";
			$sql3 = mysqli_query($conn, $sql_c);

			if ($sql3 && $sql3->num_rows > 0) 
			{
				$r3 = $sql3->fetch_assoc();
			}

 function validate($data){
       $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $activity_name =  validate($_POST['activity_name']);
 $activity_starttime =  validate($_POST['activity_starttime']);
 $activity_endtime =  validate($_POST['activity_endtime']);
 $activity_city =  validate($_POST['activity_city']);
 $activity_address =  validate($_POST['activity_address']);
 $activity_description =  validate($_POST['activity_description']);
 $numberlimit =  validate($_POST['numberlimit']);

 
 
 if($_POST['activity_name']!="")  
  $activity_name=$_POST['activity_name'];
 else
  $activity_name=$r3['activity_name'];

 if($_POST['activity_starttime']!="")  
  $activity_starttime=$_POST['activity_starttime'];
 else
  $activity_starttime=$r3['activity_starttime'];

 if($_POST['activity_endtime']!="")  
  $activity_endtime=$_POST['activity_endtime'];
 else
  $activity_endtime=$r3['activity_endtime'];

 if($_POST['activity_city']!="")  
  $activity_city=$_POST['activity_city'];
 else
  $activity_city=$r3['activity_city'];

 if($_POST['activity_address']!="")  
  $activity_address=$_POST['activity_address'];
 else
  $activity_address=$r3['activity_address'];
 
 if($_POST['activity_description']!="")  
  $activity_description=$_POST['activity_description'];
 else
  $activity_description=$r3['activity_description'];

 if($_POST['numberlimit']!="")  
  $numberlimit=$_POST['numberlimit'];
 else
  $numberlimit=$r3['numberlimit'];

   $sql_2 = "UPDATE activity
                   SET activity_name='$activity_name',
				    activity_starttime='$activity_starttime',
					activity_endtime='$activity_endtime',
					activity_city='$activity_city',
					activity_address='$activity_address',
					activity_description='$activity_description',
					numberlimit='$numberlimit'
                   WHERE id='$activity_id_more'";
         mysqli_query($conn, $sql_2);
		 

	if($_SESSION['level']>=1){
		header("Location: admin_activity_check.php");
		exit();
	}else
	{
		header("Location: user_activity_check.php");
		exit();
	}
}

}

?>