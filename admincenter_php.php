<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";
if(isset($_POST['name'])&&isset($_POST['password'])) {
 
 function validate($data){
       $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $password =  validate($_POST['password']);
 $name =  validate($_POST['name']);
 $admin_sex =  validate($_POST['admin_sex']);
 $admin_age =  validate($_POST['admin_age']);
 $admin_FID =  validate($_POST['admin_FID']);
 $admin_date =  validate($_POST['admin_date']);
 $admin_phone =  validate($_POST['admin_phone']);
 $admin_adress =  validate($_POST['admin_adress']);
 $admin_email =  validate($_POST['admin_email']);
 $id = $_SESSION['id'];
 
 
 if($_POST['name']!="")  
  $name=$_POST['name'];
 else
  $name=$_SESSION['name'];
 if($_POST['admin_sex']!="")  
  $admin_sex=$_POST['admin_sex'];
 else
  $admin_sex=$_SESSION['admin_sex'];
 if($_POST['admin_age']!="")  
  $admin_age=$_POST['admin_age'];
 else
  $admin_age=$_SESSION['admin_age'];
 if($_POST['admin_FID']!="")  
  $admin_FID=$_POST['admin_FID'];
 else
  $admin_FID=$_SESSION['admin_FID'];
 if($_POST['admin_date']!="")  
  $nadmin_date=$_POST['admin_date'];
 else
  $admin_date=$_SESSION['admin_date'];
 if($_POST['admin_phone']!="")  
  $admin_phone=$_POST['admin_phone'];
 else
  $admin_phone=$_SESSION['admin_phone'];
 if($_POST['admin_adress']!="")  
  $admin_adress=$_POST['admin_adress'];
 else
  $admin_adress=$_SESSION['admin_adress'];
 if($_POST['admin_email']!="")  
  $admin_email=$_POST['admin_email'];
 else
  $admin_email=$_SESSION['admin_email'];
if($_POST['password']!="")  
  $password=$_POST['password'];
 else
  $password=$_SESSION['password'];
 

   $sql_2 = "UPDATE users
                   SET password='$password',
				    admin_sex='$admin_sex',
					admin_age='$admin_age',
					admin_FID='$admin_FID',
					admin_date='$admin_date',
					admin_phone='$admin_phone',
					admin_adress='$admin_adress',
					admin_email='$admin_email',
					name='$name'
                   WHERE id='$id'";
         mysqli_query($conn, $sql_2);
		 
				$_SESSION['name']=$name;
				$_SESSION['password']=$password;
				$_SESSION['admin_sex'] = $admin_sex;
				$_SESSION['admin_age'] = $admin_age;
				$_SESSION['admin_FID'] = $admin_FID;
				$_SESSION['admin_date'] = $admin_date;
				$_SESSION['admin_phone'] = $admin_phone;
				$_SESSION['admin_adress'] = $admin_adress;
				$_SESSION['admin_email'] = $admin_email;
   header("Location: admincenter.php");
   exit();
}
}
?>