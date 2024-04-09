<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');
$sql_work = "SELECT * FROM ccs_image ORDER BY id DESC";
  $sql2 = mysqli_query($conn, $sql_work);
  
$querypic1 = "select * from activity where activity_level='1' ORDER BY id DESC LIMIT 1";
	$sqlpic_id_1 = mysqli_query($conn, $querypic1);
	 if ($sqlpic_id_1 && $sqlpic_id_1->num_rows > 0) 
	{
	$pic_id_row_1 = mysqli_fetch_assoc($sqlpic_id_1);
	}
	$querypic2 = "select * from activity where activity_level='1' ORDER BY id DESC LIMIT 1,1";
	$sqlpic_id_2 = mysqli_query($conn, $querypic2);
     if ($sqlpic_id_2 && $sqlpic_id_2->num_rows > 0) 
	{
		$pic_id_row_2 = mysqli_fetch_assoc($sqlpic_id_2);
	}
	$querypic3 = "select * from activity where activity_level='1' ORDER BY id DESC LIMIT 2,1";
	$sqlpic_id_3 = mysqli_query($conn, $querypic3);
     if ($sqlpic_id_3 && $sqlpic_id_3->num_rows > 0) 
	{
	$pic_id_row_3 = mysqli_fetch_assoc($sqlpic_id_3);  
	}
?>
<head>
<title>藝術生活家</title>
<!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!---->
    <script src="session.js"></script>
</head>
 <style>
	.disabled-link {
     pointer-events: none; /* 禁用點擊 */
     cursor: default; /* 更改光標為預設（表示不可點擊） */
     /* 添加其他樣式以匹配您的設計 */
    }
</style>
<script>
$(function(){
    var len = 50; // 超過50個字以"..."取代
    $(".JQellipsis").each(function(i){
        if($(this).text().length>len){
            $(this).attr("title",$(this).text());
            var text=$(this).text().substring(0,len-1)+"...";
            $(this).text(text);
        }
    });
});
</script>

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
      <span style="font-size:1cm;"><br>藝術生活家</span><br><br>
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

<!-- 跑馬燈-->
	<style>
	.background-cover {
	 width:100%;
	 height: 400px;
	 border: 1px solid #000;
	 img{
	   width:100%;
	   height: 20%;
	   object-fit:cover;
	 }
	}
	#wwimage{height: 100%;width:100%;}
	</style>
<body>
	<form>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-11">
				<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
						<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
						<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
					</ol>
					<div class="carousel-inner">
					<!---------------------------跑馬燈本體----------------------------------------->
						<div class="carousel-item active" data-interval="5000">
							<div class="background-cover">
								<a href="http://140.124.72.4/10_lifestyle/activity_more.php?id=<?php echo $pic_id_row_1['id']?>"><img id="wwimage" alt="目前沒有最新活動的圖片喔" class="d-block w-100" src="getimage.php"></a>
							</div>
						</div>
						<div class="carousel-item" data-interval="5000">
							<div class="background-cover">
								<a href="http://140.124.72.4/10_lifestyle/activity_more.php?id=<?php echo $pic_id_row_2['id']?>"><img id="wwimage" alt="目前沒有最新活動的圖片喔" class="d-block w-100" src="getimage_2.php"></a>
							</div>
						</div>
						<div class="carousel-item" data-interval="5000">
							<div class="background-cover">
								<a href="http://140.124.72.4/10_lifestyle/activity_more.php?id=<?php echo $pic_id_row_3['id']?>"><img id="wwimage" alt="目前沒有最新活動的圖片喔" class="d-block w-100" src="getimage_3.php"></a>
							</div>
						</div>
						
					 <!---------------------------跑馬燈本體----------------------------------------->
					</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span></a>
				</div>
			</div>
		</div>
	</form>
</body>
   <!-- 作品區-->
 <table>
<div class="yield-wrapper">
<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
    <p class="global-primary dark-primary section-title">
 
   <span style="font-size:1.2cm;">
   作品集
   <br>
   <br>
   </span>
   </p>
<!-- 作品--------->
<?php
if ($sql2 && $sql2->num_rows > 0) {
    while ($rr = $sql2->fetch_assoc()) {
        if ($rr['upimage_level'] >= 1) {
            $rid = $rr['id'];
            $sql_c = "SELECT c.*, u.user_name FROM ccs_image c
                      JOIN users u ON c.user_id = u.id
                      WHERE c.id = '$rid'";
            $sql3 = mysqli_query($conn, $sql_c);

            if ($sql3 && $sql3->num_rows > 0) {
                $r3 = $sql3->fetch_assoc();
                ?>

                <div class='col-sm-3 mb-3' style="margin-bottom: 25px;">
                    <div class='card' style="height: 80%;">
                        <?php echo '<img src="data:image/png;base64,' . base64_encode($r3['bin_data']) . '" style="width: 100%; height: 100%;object-fit: contain;">'; ?>
                        <div class='card-body'>
                            <h4 class='card-title'>
                                <span style="font-size: xx-large;"><?php echo $r3['piece_name'] ?></span>
                            </h4>
                            <p class='card-text'>
                                <span style="font-size: medium;"><?php echo $r3['description'] ?></span>
                            </p><br><br>
                            <p class='card-text' style="text-align: right;">
								<span style="font-size: medium;"><?php echo '上傳者: ' . $r3['user_name']; ?></span>
							</p>
                            <a href='piece_more.php?id=<?php echo $r3['id']; ?>' class='btn btn-primary'>更多資訊</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }
}
?>
   
</div>
</div>

</table>
	<!--底板-->
  <br>
  <br>
  <div id="footer">
    <div class="container-md-height" style="height: 100%; table-layout: fixed; width: 100%;">
      <div class="row row-md-height" style="height: 100%;">
	  </div>
	</div>
</div>