<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
	$user_message_id=$_SESSION['id'];
	//-------------------------------MYSQL查詢是否審核通過 且 未通知的-------------------------------
	$sql_message_video = "SELECT * FROM video where user_id = '$user_message_id' AND upvideo_level=1 AND upvideo_message=0 ORDER BY id DESC ";
	$sql2_message_video = mysqli_query($conn, $sql_message_video);
	$sql_message_image = "SELECT * FROM ccs_image where user_id = '$user_message_id' AND upimage_level=1 AND upimage_message=0 ORDER BY id DESC ";
	$sql2_message_image = mysqli_query($conn, $sql_message_image);
	$sql_message_activity = "SELECT * FROM activity where user_id = '$user_message_id' AND activity_level=1 AND activity_message=0 ORDER BY id DESC ";
	$sql2_message_activity = mysqli_query($conn, $sql_message_activity);
	//-------------------------------作品審核通知-------------------------------
	if ($sql2_message_video && $sql2_message_video->num_rows > 0 && $sql2_message_image && $sql2_message_image->num_rows > 0  && $sql2_message_activity && $sql2_message_activity->num_rows > 0 ) {
			$sql_message_video_change = "UPDATE video SET upvideo_message='1' where user_id = '$user_message_id' AND upvideo_level=1 AND upvideo_message=0 ORDER BY id DESC ";
			$sql2_message_video_change = mysqli_query($conn, $sql_message_video_change);
			
			$sql_message_image_change = "UPDATE ccs_image SET upimage_message='1' where user_id = '$user_message_id' AND upimage_level=1 AND upimage_message=0 ORDER BY id DESC ";
			$sql2_message_image_change = mysqli_query($conn, $sql_message_image_change);
			
			$sql_message_activity_change = "UPDATE activity SET activity_message='1' where user_id = '$user_message_id' AND activity_level=1 AND activity_message=0 ORDER BY id DESC ";
			$sql2_message_activity_change = mysqli_query($conn, $sql_message_activity_change);
			
			echo "<script> {window.alert('您上傳的作品、影片、活動已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}else if ($sql2_message_video && $sql2_message_video->num_rows > 0 && $sql2_message_image && $sql2_message_image->num_rows > 0 ) {
			$sql_message_video_change = "UPDATE video SET upvideo_message='1' where user_id = '$user_message_id' AND upvideo_level=1 AND upvideo_message=0 ORDER BY id DESC ";
			$sql2_message_video_change = mysqli_query($conn, $sql_message_video_change);
			
			$sql_message_image_change = "UPDATE ccs_image SET upimage_message='1' where user_id = '$user_message_id' AND upimage_level=1 AND upimage_message=0 ORDER BY id DESC ";
			$sql2_message_image_change = mysqli_query($conn, $sql_message_image_change);
			
			echo "<script> {window.alert('您上傳的作品、影片已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}else if ($sql2_message_video && $sql2_message_video->num_rows > 0   && $sql2_message_activity && $sql2_message_activity->num_rows > 0 ) {
			$sql_message_video_change = "UPDATE video SET upvideo_message='1' where user_id = '$user_message_id' AND upvideo_level=1 AND upvideo_message=0 ORDER BY id DESC ";
			$sql2_message_video_change = mysqli_query($conn, $sql_message_video_change);
			
			$sql_message_activity_change = "UPDATE activity SET activity_message='1' where user_id = '$user_message_id' AND activity_level=1 AND activity_message=0 ORDER BY id DESC ";
			$sql2_message_activity_change = mysqli_query($conn, $sql_message_activity_change);
			
			echo "<script> {window.alert('您上傳的活動、影片已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}else if ( $sql2_message_image && $sql2_message_image->num_rows > 0  && $sql2_message_activity && $sql2_message_activity->num_rows > 0 ) {
			$sql_message_image_change = "UPDATE ccs_image SET upimage_message='1' where user_id = '$user_message_id' AND upimage_level=1 AND upimage_message=0 ORDER BY id DESC ";
			$sql2_message_image_change = mysqli_query($conn, $sql_message_image_change);
			
			$sql_message_activity_change = "UPDATE activity SET activity_message='1' where user_id = '$user_message_id' AND activity_level=1 AND activity_message=0 ORDER BY id DESC ";
			$sql2_message_activity_change = mysqli_query($conn, $sql_message_activity_change);
			
			echo "<script> {window.alert('您上傳的作品、活動已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}	//-------------------------------影片審核通知-------------------------------
	else if ($sql2_message_video && $sql2_message_video->num_rows > 0) { 
			$sql_message_video_change = "UPDATE video SET upvideo_message='1' where user_id = '$user_message_id' AND upvideo_level=1 AND upvideo_message=0 ORDER BY id DESC ";
			$sql2_message_video_change = mysqli_query($conn, $sql_message_video_change);
	
			echo "<script> {window.alert('您上傳的影片已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}
	//-------------------------------作品審核通知-------------------------------
	else if ($sql2_message_image&& $sql2_message_image->num_rows > 0) {
			$sql_message_image_change = "UPDATE ccs_image SET upimage_message='1' where user_id = '$user_message_id' AND upimage_level=1 AND upimage_message=0 ORDER BY id DESC ";
			$sql2_message_image_change = mysqli_query($conn, $sql_message_image_change);
			
			echo "<script> {window.alert('您上傳的作品已被審核通過！');location.href='memberarea.php'} </script>";
	}//-------------------------------活動審核通知-------------------------------
	else if (  $sql2_message_activity && $sql2_message_activity->num_rows > 0 ) {
			
			
			$sql_message_activity_change = "UPDATE activity SET activity_message='1' where user_id = '$user_message_id' AND activity_level=1 AND activity_message=0 ORDER BY id DESC ";
			$sql2_message_activity_change = mysqli_query($conn, $sql_message_activity_change);
			
			echo "<script> {window.alert('您上傳的活動已被審核通過！請盡速查看！');location.href='memberarea.php'} </script>";
	}
	
	
	
	
	
   $user=$_SESSION['name'];
   $lv=$_SESSION['level'];
   
?>
<head>
<title>藝術生活家</title>
</head>
 <style>
	.disabled-link {
     pointer-events: none; /* 禁用點擊 */
     cursor: default; /* 更改光標為預設（表示不可點擊） */
     /* 添加其他樣式以匹配您的設計 */
    }
</style>
<!-- styles-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/common-f47625baea59b7f28766c213f44af5679a3f7198f77cf8bb89041274db97940a.css">
<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/application-737a4b9eef11de52f7c2ba7b51f074fde0047b17a9bc3dec5f0a09fd31ae6997.css">
  <link rel="stylesheet" media="screen" href="https://cdn.shoplineapp.com/assets/themes/chic-d35d0ccb8eb211d5d8b97aa7fb648229ffcd7c8f4e088c5dd7ff883d0b4b8285.css">
  
  <!-- 會員區  要修改的-->
<div id="fixed-menu-container" class="mobile-revamp-navigation">
  <div class="fixed-menu-wrapper">
      <a href="signup.php" class="menu-button signin-signup-button disabled-link">
	  <span class="menu-words"><span style="font-size:2em;">此網頁僅供國立臺北科技大學資料庫系統課程教學使用</span></span>
      </a>
	  <a href="signup.php" class="menu-button signin-signup-button mobile-revamp-navigation">
      <span class="menu-words"><span style="font-size:2em;">會員註冊</span></span>
      </a>
      <a href="loginf.php" class="menu-button signin-signup-button mobile-revamp-navigation">
      <span class="menu-words"><span style="font-size:2em;">會員登入</span></span>
      </a>
	  <a href="loginf_admin.php" class="menu-button signin-signup-button mobile-revamp-navigation">
      <span class="menu-words"><span style="font-size:2em;">管理員登入</span></span>
      </a>
	  <a href="logout.php" class="menu-button signin-signup-button mobile-revamp-navigation">
      <span class="menu-words"><span style="font-size:2em;">登出</span></span>
      </a>
	  
  </div>
</div>
  <!-- 會員區  要修改的-->



	  <!-- 目錄區-->
<nav class="main-navigation">
    <div class="navbar-wrapper ">
      <div class="navbar hidden-xs" role="navigation">
        <div class="navbar-menu-wrapper">
          <div class="container">
            <div class="navbar-menu hidden-xs">
              <ul class="text-primary-color">
			  
	  <a href="index.php">
      <span style="font-size:1cm;">藝術生活家</span><br><br>
	  </a>
	  
    <!-- 活動資訊 -->
      <li>
        <a href="info_activity.php" target="" ng-non-bindable=""><span style="font-size:2em;">活動資訊</span></a>
      </li>
	  
    <!-- 教學資訊 -->
      <li>
        <a href="info_teaching.php" target="" ng-non-bindable=""><span style="font-size:2em;">教學資訊</span></a>
      </li>
	  
    <!-- 最新資訊 -->
      <li>
        <a href="info_new.php" target="" ng-non-bindable=""><span style="font-size:2em;">最新資訊</span></a>
      </li>
	  
    <!-- 外連資訊 -->
      <li>
        <a href="info_art.php" target="" ng-non-bindable=""><span style="font-size:2em;">外連資訊</span></a>
      </li>
	  
    <!-- 歷史資訊連結 -->
      <li>
        <a href="info_history.php" target="" ng-non-bindable=""><span style="font-size:2em;">歷史資訊連結</span></a>
      </li>
	  
	<!-- 管理員/會員專區  要修改的-->    
 <?php
if(isset($_SESSION['user_name']) && $_SESSION['level']>=1){
?>  
	  <li>
        <a href="memberarea.php" target="" ng-non-bindable=""><span style="font-size:2em;">管理員專區</span></a>
      </li>
<?php
}else {
?>
	<li>
        <a href="memberarea.php" target="" ng-non-bindable=""><span style="font-size:2em;">會員專區</span></a>
    </li>
<?php
}
?>	
	<!-- 管理員/會員專區  要修改的-->  
		</ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</nav>





<?php
if(isset($_SESSION['user_name']) && $_SESSION['level']>=1){
?> 
	<!--管理員專區-->
	<div class="yield-wrapper">
	<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
	<p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  管理員專區
	  <br>
	  <br>
	  </span>
    </p>
<?php
}else {
?>
		<!--會員專區-->
	<div class="yield-wrapper">
	<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
	<p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  會員專區
	  <br>
	  <br>
	  </span>
    </p>
<?php
}
?>	
	<!--會員資料-->
<?php
if(isset($_SESSION['user_name']) && $_SESSION['level']>=1){
?>
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="admincenter.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(information.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="admincenter.php">
		管理員資料
		</a>
		</span>
        </div>
        </div>
      </div>
<?php
}else {
?>
		<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="usercenter.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(information.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="usercenter.php">
		會員資料
		</a>
		</span>
        </div>
        </div>
      </div>
<?php
}
?>
	  
	  <!--上傳作品-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="member_upimage_php.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(upload.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="member_upimage_php.php">
		上傳作品
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  <!--上傳影音-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="member_upvideo_php.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(youtube.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="member_upvideo_php.php">
		影音上傳
		</a>
		</span>
        </div>
        </div>
      </div>
	    
	  <!--發起活動-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="activity.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(creativity.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="activity.php">
		發起展覽活動
		</a>
		</span>
        </div>
        </div>
      </div>
<!-----------------------------------------------管理員功能----------------------------------------------------------->	  
	<?php
if(isset($_SESSION['user_name']) && $_SESSION['level']>=1){
?>  
	<!--設定外部連結-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="member_external_link.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(setting_link.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="member_external_link.php">
		設定外部連結
		</a>
		</span>
        </div>
        </div>
      </div>
	  <!--查看管理員自身作品-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="admin_upimage_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_image.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="admin_upimage_check.php">
		查看已上傳作品
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  <!--查看管理員自身影片-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="admin_upvideo_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_video.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="admin_upvideo_check.php">
		查看已上傳影片
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  	  <!--查看管理員自身活動-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="admin_activity_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_activity.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="admin_activity_check.php">
		查看已上傳活動
		</a>
		</span>
        </div>
        </div>
      </div>
	  <!--發佈公告-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="announcement.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(megaphone.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="announcement.php">
		發佈公告
		</a>
		</span>
        </div>
        </div>
      </div>
	  	  	  <!--審核作品-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="member_upimage_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(admin_check_image.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="member_upimage_check.php">
		審核作品
		</a>
		</span>
        </div>
        </div>
      </div>
	  	  	  <!--審核影片-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="member_upvideo_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(admin_check_video.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="member_upvideo_check.php">
		審核影片
		</a>
		</span>
        </div>
        </div>
      </div>
	  	  	  <!--審核活動-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="activity_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(admin_check_activity.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="activity_check.php">
		審核活動
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  	  	  	  <!--SQL語法查詢-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="SQL.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(sql.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="SQL.php">
		SQL語法查詢
		</a>
		</span>
        </div>
        </div>
      </div>
<!-----------------------------------------------管理員功能----------------------------------------------------------->	  
<?php
}else {
?>
	  <!--查看會員自身作品-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="user_upimage_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_image.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="user_upimage_check.php">
		查看已上傳作品
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  <!--查看會員自身影片-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="user_upvideo_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_video.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="user_upvideo_check.php">
		查看已上傳影片
		</a>
		</span>
        </div>
        </div>
      </div>
	  
	  	  <!--查看會員自身活動-->
	<div class="product-item col-xs-6 col-md-3  ng-isolate-scope">
      <div class="boxify-image-wrapper">
	  <a href="user_activity_check.php">
        <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(check_activity.png)">
        </div>
		</a>
      </div>
    <div class="info-box">
      <div class="info-box-inner-wrapper">
		<span style="font-size:1cm;">
		<a href="user_activity_check.php">
		查看已上傳活動
		</a>
		</span>
        </div>
        </div>
      </div>




<?php
}
?>		  
	  
	  
	  
	</div>
</div>
<?php
  }else{
	header("refresh:3;url=http://140.124.72.4/10_lifestyle/loginf.php");
	print('尚未登入！！<br>三秒後自動跳轉至登入頁面。');
}?>
	 <!--底板-->
  <br>
  <br>
  <div id="footer">
    <div class="container-md-height" style="height: 100%; table-layout: fixed; width: 100%;"> <!-- height and width must be difined for td to size correctly -->
      <div class="row row-md-height" style="height: 100%;">
	  </div>
	</div>
</div>