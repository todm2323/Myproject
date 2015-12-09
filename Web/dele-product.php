<?php
  session_start();
  
  $passed = $_COOKIE{"passed"};
	
  
  if ($passed != "TRUE")
  {
    header("location:pysmain.php");
    exit();
  }
		
  else
  {
    require_once("dbtools.inc.php");
		
     $id2 = $_GET["id"];
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
	$sql = "delete from product where id=id2";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //$row = mysql_fetch_assoc($result);
	}
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>成功</title>
    <style>
p { font-family:Microsoft JhengHei; }
font { font-family:Microsoft JhengHei; }
h { font-family:Microsoft JhengHei; }
h1 { font-family:Microsoft JhengHei; }
h2 { font-family:Microsoft JhengHei; }
h3 { font-family:Microsoft JhengHei; }
h4 { font-family:Microsoft JhengHei; }
h5 { font-family:Microsoft JhengHei; }
</style>
  </head>
  <body bgcolor="#FFFFFF">
    <p align="center"><img src="images/erase1.jpg"></p>
    <p align="center"><a href="product-management.php">回會員管理頁面</a></p>
  </body>
</html>