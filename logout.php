<?php 
session_start();
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
session_unset();
session_destroy();

header("refresh:3;url=http://140.124.72.4/10_lifestyle/index.php");
print('登出成功！！<br>三秒後自動跳轉至登入頁面。');
}else{
	header("refresh:3;url=http://140.124.72.4/10_lifestyle/loginf.php");
	print('尚未登入！！<br>三秒後自動跳轉至登入頁面。');
}

?>