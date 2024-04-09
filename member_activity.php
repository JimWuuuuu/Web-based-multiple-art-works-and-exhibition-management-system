<?php  session_start(); ?>
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
</head>
<body> 
  <!-- 會員區-->
<div id="fixed-menu-container" class="mobile-revamp-navigation">
  <div class="fixed-menu-wrapper">
		<a href="/users/sign_in" class="menu-button signin-signup-button mobile-revamp-navigation">
        <span class="menu-words"><span style="font-size:2em;">註冊會員</span></span>
      </a>
      <a href="Login.html" class="menu-button signin-signup-button mobile-revamp-navigation">
      <span class="menu-words"><span style="font-size:2em;">登入會員</span></span>
      </a>
  </div>
</div>



	  <!-- 目錄區-->
<nav class="main-navigation">
    <div class="navbar-wrapper ">
      <div class="navbar hidden-xs" role="navigation">
        <div class="navbar-menu-wrapper">
          <div class="container">
            <div class="navbar-menu hidden-xs">
              <ul class="text-primary-color">
			  
	  <a href="home.php">
      <span style="font-size:1cm;"><b>藝術生活家</b></span><br><br>
	  </a>
	  
    <!-- 活動資訊 -->
      <li>
        <a href="" target="" ng-non-bindable=""><span style="font-size:2em;">活動資訊</span></a>
      </li>
	  
    <!-- 教學資訊 -->
      <li>
        <a href="" target="" ng-non-bindable=""><span style="font-size:2em;">教學資訊</span></a>
      </li>
	  
    <!-- 最新資訊 -->
      <li>
        <a href="" target="" ng-non-bindable=""><span style="font-size:2em;">最新資訊</span></a>
      </li>
	  
    <!-- 外連資訊 -->
      <li>
        <a href="info_art.php" target="" ng-non-bindable=""><span style="font-size:2em;">外連資訊</span></a>
      </li>
	  
    <!-- 歷史資訊連結 -->
      <li>
        <a href="" target="" ng-non-bindable=""><span style="font-size:2em;">歷史資訊連結</span></a>
      </li>
	  
	<!-- 會員專區 -->  
	  <li>
        <a href="memberarea.php" target="" ng-non-bindable=""><span style="font-size:2em;">會員專區</span></a>
      </li>
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
	<p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  會員專區/發起展覽活動
	  <br></br>
	  </span>
    </p>
	<!---------------------------分隔線-------------------------->
	<!--活動名稱-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動名稱</font> <p></p>
		<input type="text" class="form-control" placeholder="輸入活動名稱" aria-label="activityname" aria-describedby="basic-addon1">
	  </div>
	</div>
	
	<br></br>
	
	<!--活動名稱-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動封面</font> <p></p>
	  
	
	<!--上傳圖片的按鈕-->
	<input id="file" type="file"/>
	<font size="1" color="red">(照片大小請設定700 * 400 pixel之封面)</font>
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
		<font size="4">活動開始與結束時間</font> <p></p>
	  </div>
	</div>
	<label for="meeting">開始時間：</label><input id="meeting" type="date" value="2021-06-17"/>
	<p></p>
	<label for="meeting">結束時間：</label><input id="meeting" type="date" value="2021-06-24"/>
	
	<br></br><p></p>
	
	<!--活動類別-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動類別</font> <p></p>
	  </div>
	</div>
	<!-- Example split danger button -->
	<div class="btn-group">
	<button type="button" class="btn btn-warning btn-secondary btn-lg">選擇類別</button>
	<button type="button" class="btn btn-warning btn-secondary btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
    <a class="dropdown-item" href="#1">Action</a>
    <a class="dropdown-item" href="#2">Another action</a>
    <a class="dropdown-item" href="#3">Something else here</a>
	</div>
	</div>
	
	<br></br><br></br>
	
	<!--活動地區-->
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動地區</font> 
		<img src="crayon.jpg" class="img-fluid img-thumbnail" alt="...">
		<font size="4">活動名稱</font> <p></p>
	  </div>
	</div>
	<!-- Example split danger button -->
	<div class="btn-group">
	<button type="button" class="btn btn-info btn-secondary btn-lg">選擇地區</button>
	<button type="button" class="btn btn-info btn-secondary btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
    <a class="dropdown-item" href="#1">基隆市</a>
    <a class="dropdown-item" href="#2">台北市</a>
    <a class="dropdown-item" href="#3">新北市</a>
	<a class="dropdown-item" href="#4">桃園市</a>
    <a class="dropdown-item" href="#5">新竹市</a>
    <a class="dropdown-item" href="#6">新竹縣</a>
	<a class="dropdown-item" href="#7">苗栗縣</a>
    <a class="dropdown-item" href="#8">台中市</a>
    <a class="dropdown-item" href="#9">彰化縣</a>
	<a class="dropdown-item" href="#10">南投縣</a>
    <a class="dropdown-item" href="#11">雲林縣</a>
    <a class="dropdown-item" href="#12">嘉義市</a>
	<a class="dropdown-item" href="#13">嘉義縣</a>
    <a class="dropdown-item" href="#14">台南市</a>
    <a class="dropdown-item" href="#15">高雄市</a>
	<a class="dropdown-item" href="#16">屏東縣</a>
    <a class="dropdown-item" href="#17">宜蘭縣</a>
    <a class="dropdown-item" href="#18">花蓮縣</a>
	<a class="dropdown-item" href="#19">臺東縣</a>
    <a class="dropdown-item" href="#20">澎湖縣</a>
    <a class="dropdown-item" href="#21">金門縣</a>
	<a class="dropdown-item" href="#22">連江縣</a>
	</div>
	<input type="text" class="form-control" aria-label="activityname" aria-describedby="basic-addon1">
	</div>
	
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
</body>
</html> 