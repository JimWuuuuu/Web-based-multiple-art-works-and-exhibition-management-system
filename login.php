<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: loginf.php?error=帳號不得為空！");
	    exit();
	}else if(empty($pass)){
        header("Location: loginf.php?error=密碼不得為空！");
	    exit();
	}else{
		// hashing the password
        $pass = $pass;

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
				if($row['level'] == 0){
				
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['level'] = $row['level'];
				$_SESSION['avatar'] = $row['avatar'];
				$_SESSION['admin_sex'] = $row['admin_sex'];
				$_SESSION['admin_age'] = $row['admin_age'];
				$_SESSION['admin_FID'] = $row['admin_FID'];
				$_SESSION['admin_date'] = $row['admin_date'];
				$_SESSION['admin_phone'] = $row['admin_phone'];
				$_SESSION['admin_adress'] = $row['admin_adress'];
				$_SESSION['admin_email'] = $row['admin_email'];
            	header("Location: memberarea.php");
		        exit();
				}else{
					header("Location: loginf_admin.php?error=此帳號為管理員帳號，以幫你跳轉至管理員登入！");
					exit();
				}
            }else{
				header("Location: loginf.php?error=帳號密碼輸入錯誤！請重新輸入！");
		        exit();
			}
		}else{
			header("Location: loginf.php?error=帳號密碼輸入錯誤！請重新輸入！");
	        exit();
		}
	}
	
}else{
	header("Location: loginf.php");
	exit();
}