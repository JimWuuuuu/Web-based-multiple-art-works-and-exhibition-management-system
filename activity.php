<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
   $user=$_SESSION['name'];
   $lv=$_SESSION['level'];
   
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
	
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
		input[type="text"]{
			padding:5px 15px; border:2px black solid;
			cursor:pointer;
			-webkit-border-radius: 5px;
			border-radius: 5px; 
		}
		
		input[type="content"]{
			padding:5px 15px; border:2px black solid;
			cursor:pointer;
			-webkit-border-radius: 5px;
			border-radius: 5px; 
			height:100px;
		}
		
		input[type="content1"]{
			padding:5px 15px; border:2px black solid;
		    cursor:pointer;
		    -webkit-border-radius: 5px;
		    border-radius: 5px; 
		    height:50px;
		}
		#link {
    display : inline-block;
    background-image : url(back.png);
    height : 40px;
    padding-left : 40px;
    width : 0;
    overflow : hidden;
    *width : 40px;
}
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

<!--會員專區-->
<div class="yield-wrapper">
	<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
<!--------------------會員專區標題----------------------->	
	<p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  發起展覽活動
	  <br>
	  <br>
	  </span>
    </p>
	<table>
	<div >
		<nav>
			<a id="link" class="home" href="memberarea.php">返回上一頁</a>
		</nav>
	</div>
</table>
<!----------------------會員專區標題  下面資料庫-------------------------------------->
<body>
<!---------------------------發起活動-------------------------->
	<form method="post" action="upactivity.php" enctype="multipart/form-data">
	<!--活動名稱-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動名稱</font>
		<font size="2" color="red">*</font> <p></p>
		<input type="text" name="form_activity_name" class="form-control" placeholder="輸入活動名稱" aria-label="activityname" aria-describedby="basic-addon1">
	  </div>
	</div>
	
	<br></br>
	
	<!--活動名稱-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動封面</font>
		<font size="2" color="red">*</font> <p></p>
	  
	
	<!--上傳圖片的按鈕-->
	<!--<input id="file" type="file"/>-->
	<input type="file" accept="image/*" name="form_activity_pic" size="40"><br>
	<font size="1" color="red">(照片大小請設定600 * 400 pixel之封面)</font>
	<p></p>
	<!--預覽區塊-->
	<img id="demo"/>
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script>
    $('#file').change(function() {
	var file = $('#file')[0].files[0];
	var reader = new FileReader;
	reader.onload = function(e) {
		$('#demo').attr('src', e.target.result);
	};
	reader.readAsDataURL(file);
	});
	</script> 
	 </div>
	</div>
	
	<br></br>
	
	<!--活動時間-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg"  class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動開始與結束時間</font>
		<font size="2" color="red">*</font> <p></p>
	  </div>
	</div>
	<label for="starttime">開始時間：</label>
	<input id="starttime" type="date" name="form_activity_starttime" value="2024-01-04"/>
	<p></p>
	<label for="endtime">結束時間：</label>
	<input id="starttime" type="date" name="form_activity_endtime" value="2024-01-11"/>
	
	<br></br><p></p>
	
	<br></br><br></br>
	
	
	<!--活動地區-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動地區</font> 
		<font size="2" color="red">*</font> <p></p>
	  </div>
	  
	  <div class="col-md-1"></div>
	  <div class="input-group-prepend">
		  <img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		  <font size="4">活動地址</font>
		  <font size="2" color="red">*</font> <p></p>
	  </div>
	</div>
	<!-- Example split danger button -->
	<div class="btn-group">
	<button type="button" class="btn btn-warning btn-secondary btn-lg">選擇地區</button>
	<select name="form_activity_city" >
		<option value="" disabled>請選擇活動縣市</option>
		<optgroup label="北部">
			<option value="基隆市">基隆市</option>
			<option value="台北市">台北市</option>
			<option value="新北市">新北市</option>
			<option value="桃園市">桃園市</option>
			<option value="新竹市">新竹市</option>
			<option value="新竹縣">新竹縣</option>
			<option value="宜蘭縣">宜蘭縣</option>
		</optgroup>
		<optgroup label="中部">
		<option value="苗栗縣">苗栗縣</option>
		<option value="台中市">台中市</option>
		<option value="彰化縣">彰化縣</option>
		<option value="南投縣">南投縣</option>
		<option value="雲林縣">雲林縣</option>
		</optgroup>
		<optgroup label="南部">
		<option value="嘉義市">嘉義市</option>
		<option value="嘉義縣">嘉義縣</option>
		<option value="台南市">台南市</option>
		<option value="高雄市">高雄市</option>
		<option value="屏東縣">屏東縣</option>
		<option value="澎湖縣">澎湖縣</option>
		</optgroup>
		<optgroup label="東部">
		<option value="花蓮縣">花蓮縣</option>
		<option value="臺東縣">臺東縣</option>
		</optgroup>
		<optgroup label="外島">
		<option value="金門縣">金門縣</option>
		<option value="連江縣">連江縣</option>
		</optgroup>
	</select>

	<div class="col-md-1"></div>
   
	
	<input type="text" name="form_activity_address" class="form-control" placeholder="輸入活動地址" aria-label="activityaddress" aria-describedby="basic-addon2">
	</div>
	
	<br></br><br></br>
	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動內容</font>
		<font size="2" color="red">*</font> <p></p>
		<input type="content" placeholder="輸入活動內容" name="form_activity_description" size="100">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>
		</div>
    </div>
	
	<br></br><br></br>
	
	<div class="input-group mb-3">
		  <div class="input-group-prepend">
		  <img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		  <font size="4">活動網址</font>
		  <font size="2" color="red">*</font> <p></p>
		  <input type="content1" placeholder="輸入活動網址" name="form_activity_link" size="100">
		  <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>
		  </div>
    </div>
 
	<br></br><br></br>
 
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動人數限制</font>
		<font size="2" color="red">*</font> <p></p>
		<input type="text" name="form_numberlimit" class="form-control" placeholder="輸入人數限制" aria-label="numberlimit" aria-describedby="basic-addon1">
		</div>
	</div>
	
	
	
	
    <input type="submit" name="submit" value="確認送出">
	</form>
	

</body>
</html>
<?php
  }else{
     echo "非法登入!";
     exit();
}
?>
<!----------------------------------------------------------->
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