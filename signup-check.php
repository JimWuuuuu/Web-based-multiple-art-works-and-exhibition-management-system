<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=使用者帳號欄位不得為空！&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=使用者密碼欄位不得為空！&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=密碼確認欄位不得為空！&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=暱稱欄位不得為空！&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=密碼確認輸入不一致！&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = $pass;

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=使用者帳號已被註冊，請換一個帳號，再試一次！&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name,level) VALUES('$uname', '$pass', '$name','0')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:loginf.php?success=帳號建立完畢，請登入會員！");
	         exit();
           }else {
	           	header("Location: signup.php?error=註冊失敗，請確認網路或資料庫是否正確！&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}