<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";
if(isset($_POST['piece_name'])&& isset($_POST['piece_description']) && isset($_POST['piece_class'])) {
	

		if (isset($_GET['picid'])) { 
			$piece_id_more = $_GET['picid'];
			$sql_c = "SELECT  * FROM ccs_image where id='$piece_id_more'";
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

 $piece_name =  validate($_POST['piece_name']);
 $piece_description =  validate($_POST['piece_description']);
 $piece_class =  validate($_POST['piece_class']);

 
 
 if($_POST['piece_name']!="")  
  $piece_name=$_POST['piece_name'];
 else
  $piece_name=$r3['piece_name'];

 if($_POST['piece_description']!="")  
  $piece_description=$_POST['piece_description'];
 else
  $piece_description=$r3['piece_description'];


 if($_POST['piece_class']!="")  
  $piece_class=$_POST['piece_class'];
 else
  $piece_class=$r3['piece_class'];
 

   $sql_2 = "UPDATE ccs_image
                   SET piece_name='$piece_name',
				    description='$piece_description',
					piece_class='$piece_class'
                   WHERE id='$piece_id_more'";
         mysqli_query($conn, $sql_2);
		 

	if($_SESSION['level']>=1){
		header("Location: admin_upimage_check.php");
		exit();
	}else
	{
		header("Location: user_upimage_check.php");
		exit();
	}
}
}
}

?>