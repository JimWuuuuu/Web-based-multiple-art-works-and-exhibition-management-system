<?php
session_start(); 
$lvstr=array("會員","管理者");
include_once('db_conn.php');

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
   $user=$_SESSION['name'];
   $lv=$_SESSION['level'];
   
?>
<DOCTYPE html>
<html>
<head>
<title>藝術生活家</title>
    <style>
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


<!-- styles-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&amp;display=swap" type="text/css" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/common-f47625baea59b7f28766c213f44af5679a3f7198f77cf8bb89041274db97940a.css">
<link rel="stylesheet" media="all" href="https://cdn.shoplineapp.com/assets/application-737a4b9eef11de52f7c2ba7b51f074fde0047b17a9bc3dec5f0a09fd31ae6997.css">
  <link rel="stylesheet" media="screen" href="https://cdn.shoplineapp.com/assets/themes/chic-d35d0ccb8eb211d5d8b97aa7fb648229ffcd7c8f4e088c5dd7ff883d0b4b8285.css">
<link href="card_style.css" rel="stylesheet" type="text/css">  
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

<div class="yield-wrapper">
	<div class="custom-page ng-isolate-scope" ga-page-view=""> <!--防止跑版-->
	
<!--                會員專區標題                        -->	

	<p class="global-primary dark-primary section-title">
	  <span style="font-size:1.2cm;">
	  管理員專區/管理員資料，歡迎管理員，<?php echo $user; ?>
	  <br>
	  <br>
	  </span>
    </p>
	
<!--              會員專區標題  下面資料庫                        -->
<body>
<!--------------------------管理員資料----------------------->
<table>
	<div id="main">
		<nav>
			<a id="link" class="home" href="memberarea.php">返回上一頁</a>
		</nav>
<?php
    $sql="SELECT * FROM users";
    $ro=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($ro);
$editstr="id=".$row['id'].
         "&user_name=".$row['user_name'].
         "&name=".$row['name'].
         "&level=".$row['level'].
         "&avatar=".$row['avatar'].
		 "&admin_sex=".$row['admin_sex'].
		 "&admin_age=".$row['admin_age'].
		 "&admin_FID=".$row['admin_FID'].
		 "&admin_date=".$row['admin_date'].
		 "&admin_phone=".$row['admin_phone'].
		 "&admin_adress=".$row['admin_adress'].
		 "&admin_email=".$row['admin_email'];
		 
		 
  if(isset($_POST['name'])){
	    $u_no=$_POST['id'];
		$u_pw=$_POST['password'];
		$u_nick=$_POST['name'];
		$u_sex=$_POST['admin_sex'];
		$u_age=$_POST['admin_age'];
		$u_FID=$_POST['admin_FID'];
		$u_date=$_POST['admin_date'];
		$u_phone=$_POST['admin_phone'];
		$u_adress=$_POST['admin_adress'];
		$u_email=$_POST['admin_email'];

		
        $sql="UPDATE users
            SET password='".$u_pw."',
             admin_sex='".$u_sex."',
             admin_age='".$u_age."',
             admin_FID='".$u_FID."',
             admin_date='".$u_date."',
             admin_phone='".$u_phone."',
             admin_adress='".$u_adress."',
             admin_email='".$u_email."',
			 name='".$u_nick."'
				
          WHERE id=".$u_no."; ";
      mysqli_query($conn,$sql);
      	  $sql="SELECT * FROM users";
	  $ro=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($ro);
      header("location:admincenter.php");

    }
?>		
	
	
<form action="admincenter_php.php" method="post"  enctype="multipart/form-data">
<table>
		<tr>
			<td>帳號</td>
			<td><b><?php echo $_SESSION['user_name']; ?></b></td>
		</tr>
		<tr>
			<td>暱稱</td>
			<?php if (isset($_GET['name'])) { ?>
			<td><input name="name" type="text" value="<?php echo $_GET['name']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="name" placeholder="<?php echo $_SESSION['name']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>密碼</td>
				<td><input type="password" name="password" placeholder="Password"></td>	
		</tr>
		<tr>
			<td>身分</td>
			<td><b><?php echo $lvstr[$lv]; ?></b></td>
		</tr>
		<tr>
			<td>性別</td>
			<?php if (isset($_GET['admin_sex'])) { ?>
			<td><input name="admin_sex" type="text" value="<?php echo $_GET['admin_sex']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_sex" placeholder="<?php echo $_SESSION['admin_sex']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>年齡</td>
			<?php if (isset($_GET['admin_age'])) { ?>
			<td><input name="admin_age" type="text" value="<?php echo $_GET['admin_age']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_age" placeholder="<?php echo $_SESSION['admin_age']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>身分證字號</td>
			<?php if (isset($_GET['admin_FID'])) { ?>
			<td><input name="admin_FID" type="text" value="<?php echo $_GET['admin_FID']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_FID" placeholder="<?php echo $_SESSION['admin_FID']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>出生年月日</td>
			
			
			<?php if (isset($_GET['admin_date'])) { ?>
			<td>
			<input id="starttime" type="date" name="admin_date" value="<?php echo $_GET['admin_date']; ?>"/>
			</td>
			<?php }else{ ?>
			          <td>
					  <input id="starttime" type="date" name="admin_date" value="<?php echo $_SESSION['admin_date']; ?>"/>  
					  </td>
			<?php }?>
		</tr>
		<tr>
			<td>電話號碼</td>
			<?php if (isset($_GET['admin_phone'])) { ?>
			<td><input name="admin_phone" type="text" value="<?php echo $_GET['admin_phone']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_phone" placeholder="<?php echo $_SESSION['admin_phone']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>地址</td>
			<?php if (isset($_GET['admin_adress'])) { ?>
			<td><input name="admin_adress" type="text" value="<?php echo $_GET['admin_adress']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_adress" placeholder="<?php echo $_SESSION['admin_adress']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td>信箱</td>
			<?php if (isset($_GET['admin_email'])) { ?>
			<td><input name="admin_email" type="text" value="<?php echo $_GET['admin_email']; ?>"></td>
			<?php }else{ ?>
			          <td><input type="text" name="admin_email" placeholder="<?php echo $_SESSION['admin_email']; ?>"></td>
			<?php }?>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center;"><input name="" type="submit" value="確認修改"></td>
		</tr>
</table>
</form>
 </body>
</html>
<?php
  }else{
     echo "非法登入!";
     exit();
}
?>
 <!--              會員資料                         -->
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