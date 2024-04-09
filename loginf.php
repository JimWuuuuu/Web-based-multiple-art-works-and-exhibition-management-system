<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
	header("refresh:3;url=http://140.124.72.4/10_lifestyle/index.php");
	print('尚未登出！！<br>三秒後自動跳轉至首頁。');
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>藝術生活家</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#FFF0D4"  >
     
	 <form  action="login.php" method="post">
     	<h2 >會員登入</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
     	<label>使用者帳號</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>使用者密碼</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" >登入</button>
          <a href="signup.php" class="ca">沒有帳號嗎? 新建一個吧!</a>
     </form>
</body>
</html>
<?php
}
?>