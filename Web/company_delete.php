<?php
  session_start();
  
  $passed = $_COOKIE{"passed"};
	
  header("Content-type: text/html; charset=utf-8");
  if ($passed != "TRUE")
  {
    header("location:pysmain.php");
    exit();
  }
		
  else
  {
    require_once("dbtools.inc.php");
		
     $id = $_GET["id"];
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "delete from customer where id=$id";
    $result = execute_sql("mydatabase", $sql, $link);
    echo "<script type='text/javascript'>";
    echo "alert('移除成功');";
    echo "location.href='company.php';";
    echo "</script>";
  }
?>
