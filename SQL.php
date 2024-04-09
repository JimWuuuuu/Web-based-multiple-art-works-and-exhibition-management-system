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
	<!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!---->
    <script src="session.js"></script>
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
	  管理員專區/SQL語法測試區，歡迎管理員，<?php echo $user; ?>
	  <br>
	  <br>
	  </span>
    </p>
	
<!--              會員專區標題  下面資料庫                        -->

<!--------------------------功能資料----------------------->
<table>
	<div id="main">
		<nav>
			<a id="link" class="home" href="memberarea.php">返回上一頁</a>
		</nav>
	</div>
</table>
<body>		
<!--------------------------MYSQL查詢資料----------------------->
<?php
    
	$sql_a = "SELECT * FROM `activity` ORDER BY `id` DESC";
	$sql = mysqli_query($conn, $sql_a);
	$sql_a2 = "SELECT * FROM `activity` ORDER BY `id` DESC";
	$sqlace2 = mysqli_query($conn, $sql_a2);
?>			
	
	


<!------------------------搜尋按鈕-------------------------->
<form name="searchform" method="post" action="SQL.php">
    <div style="display: flex; align-items: center; justify-content: center;">
        <input type="text" name="SQLkeyword" style="width: 1000px; height: 200px; padding: 10px;font-size: 22px;" placeholder="請輸入SQL語法！">
        <input type="submit" name="Submit" value="搜尋" style="width: 60px;height: 40px; margin-left: 50px;">
    </div>
</form>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Query Result</title>
    <style>
        .row {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: auto; /* 新增的居中樣式 */
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
            word-wrap: break-word;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <!-- -------------------------SQL查詢結果----------------------- -->
    <div class="row">
        <span style="font-size: 0.6cm;">【SQL查詢結果】</span>
        <table>
            <?php
            if (isset($_POST['SQLkeyword'])) {
                function validate($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $form_SQLkeyword = validate($_POST['SQLkeyword']);

                if (!empty($form_SQLkeyword)) {  // 檢查 SQL 語句是否為空   
				// Execute the user-input SQL query
                $result = mysqli_query($conn, $_POST['SQLkeyword']);

                if ($result) {
                    // Display table header
                    echo "<tr>";
                    while ($fieldinfo = mysqli_fetch_field($result)) {
                        // 判斷是否是存儲圖片的欄位
                        if ($fieldinfo->name === 'bin_data' || $fieldinfo->name === 'activity_pic') {
                            // 跳過顯示圖片欄位的標題
                            continue;
                        }

                        echo "<th>{$fieldinfo->name}</th>";
                    }
                    echo "</tr>";

                    // Display results
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            // 判斷是否是存儲圖片的欄位
                            if ($key === 'bin_data' || $key === 'activity_pic') {
                                // 跳過顯示圖片欄位
                                continue;
                            }

                            echo "<td>{$value}</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    // Handle error
                    echo "<tr><td colspan='100%'>Error in query: " . mysqli_error($conn) . "</td></tr>";
					}
				} else {
					// SQL 語句為空的情況
					echo "<tr><td colspan='100%'>SQL query is empty.</td></tr>";
				}
            } else {
                // Handle other cases or set a default query
                echo "<tr><td colspan='100%'>No SQL query provided.</td></tr>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </table>
    </div>

</body>

</html>





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