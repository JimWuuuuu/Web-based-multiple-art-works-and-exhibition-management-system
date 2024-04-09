<?php
			
    //$id =$_GET['id'];// $_GET['id']; 為簡潔,直接將id寫上了,正常應該是通過使用者填入的id獲取的
    $dsn ='mysql:dbname=10_lifestyle;host=localhost';
    $pdo = new PDO($dsn,'root','123456');
	
	include_once('db_conn.php');
	$sql_work = "select activity_pic,act_pictype from activity where activity_level='1' ORDER BY id DESC LIMIT 1,1";
	$sql2 = mysqli_query($conn, $sql_work);
	
    $query = "select activity_pic,act_pictype from activity where activity_level='1' ORDER BY activity_level DESC,id DESC LIMIT 1,1";
    $result = $pdo->query($query);
	
	if ($sql2 && $sql2->num_rows > 0) 
	{
    $result = $result->fetchAll(2);
//    var_dump($result);
    $data = $result[0]['activity_pic'];
    $type = $result[0]['act_pictype'];
    header( "Content-type: $type");
    echo $data;
	}
?>