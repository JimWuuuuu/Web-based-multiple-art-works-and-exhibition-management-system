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
<body style="background-color:#FFF0D4" >
     <form action="signup-check.php" method="post">
     	<h2>註冊</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>暱稱</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>使用者帳號</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>使用者密碼</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>再輸入一次 使用者密碼</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">註冊</button>
          <a href="loginf.php" class="ca">已經有一個帳號了!</a>
     </form>
</body>
</html>
<?php
}
?>