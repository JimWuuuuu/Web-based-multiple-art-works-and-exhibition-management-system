<?php  session_start(); 
	include_once('db_conn.php');
?>
							
<!DOCTYPE html>
<html>
<head>
<title>藝術生活家</title>
	<!-- styles-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
	<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/common-f47625baea59b7f28766c213f44af5679a3f7198f77cf8bb89041274db97940a.css">
	<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/application-737a4b9eef11de52f7c2ba7b51f074fde0047b17a9bc3dec5f0a09fd31ae6997.css">
	  <link rel="stylesheet" media="screen" href="https://cdn.shoplineapp.com/assets/themes/chic-d35d0ccb8eb211d5d8b97aa7fb648229ffcd7c8f4e088c5dd7ff883d0b4b8285.css">
	
	<!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!---->
    <script src="session.js"></script>
	<style>
	#wwimage{height: 100%;width:100%;}
	</style>
</head>

<!-- 會員區  要修改的-->
<div id="fixed-menu-container" class="mobile-revamp-navigation">
  <div class="fixed-menu-wrapper">
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

<!--從activity資料表抓出來要用的-->
<?php
	 if (isset($_GET['id'])) { 
     		$act_id_more = $_GET['id'];
			//$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
			$sql_b = "SELECT  * FROM `activity` where id='$act_id_more'";
			$sql2 = mysqli_query($conn, $sql_b);

			if ($sql2 && $sql2->num_rows > 0) 
			{
			$r2 = $sql2->fetch_assoc();
			}
?>
<!--從activity資料表抓出來要用的-->

<!--會員專區-->
<div class="yield-wrapper">
	<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
<!--------------------標題----------------------->
    <p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  活動資訊看板/<?php echo $r2['activity_name']?>
	  <br>
	  <br>
	  </span>
    </p>
<!--------------------標題  下面資料庫--------------------->
<body>
<!----------------------個別活動的完整資訊----------------->
<table>
<div class="row">
			
	<div class='col-xs-6 col-sm-4'>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<img src="activityimg/activitypicture.jpg" class="img-fluid img-thumbnail" alt="...">
				<font size="5">【活動封面】</font> <p></p>
				<?php echo '<img id="wwimage" src="data:image/png;base64,'.base64_encode($r2['activity_pic']).'">';?>
			</div>
		</div>
	</div>
	
	<br><br><br></br></br></br><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
	
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="activityimg/activitydate.jpg"  class="img-fluid img-thumbnail" alt="...">
		<font size="5">【活動開始與結束時間】</font> <p></p>
	  </div>
	</div>
	<div>
		<font size="3"><label for="starttime" >開始時間：</label>
		<?php echo $r2['activity_starttime']?></font>
	</div>
	<p></p>
	<div>
		<font size="3"><label for="endtime">結束時間：</label>
		<?php echo $r2['activity_endtime']?></font>
	</div>
	
	<br></br><p></p><p></p>
	
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="activityimg/activitymap.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="5">【活動地區與地址】</font> 
	  </div>
	</div>	
	<p></p>
	<div>
		<font size="3"><label for="address">完整地址：</label>
		<?php echo $r2['activity_city']?><?php echo $r2['activity_address']?></font>
	</div>
	
	<br></br><br></br>
	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		<img src="activityimg/activitybook.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="5">【活動內容】</font> <p></p>
		</div>
    </div>
	<p></p>
	<div>
		<font size="3"><label for="description">內容：</label>
		<?php echo $r2['activity_description']?></font>
	</div>
	
	<br></br><br></br>
	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<img src="activityimg/activityperson.jpg" class="img-fluid img-thumbnail" alt="...">
			<font size="5">【活動人數限制】</font> <p></p>
		</div>
	</div>
	<p></p>
	<div>
		<font size="3"><label for="people">人數上限：</label>
		<?php echo $r2['numberlimit']?></font>
	</div>
	
	<br></br><br></br>

 
	<p></p>
	<div>
		<a href="<?php echo $r2['activity_link']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">點我報名</a>
	</div>
<!--從activity資料表抓出來要用的-->
<?php
		;
	}
?>
<!--從activity資料表抓出來要用的-->

</div>
</table>
</body>
</html>
<!------------------------------->
</div>
</div>
<!--底板-->
<br>
<br>
<div id="footer">
    <div class="container-md-height" style="height: 100%; table-layout: fixed; width: 100%;"> <!-- height and width must be difined for td to size correctly -->
      <div class="row row-md-height" style="height: 100%;">
	  </div>
	</div>
</div>


