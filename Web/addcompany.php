<?php
session_start();
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /* 如果 cookie 中的 passed 變數不等於 TRUE，
     表示尚未登入網站，將使用者導向首頁 index.htm */
  if ($passed != "TRUE")
  {
    header("location:pyshome.php");
    exit();
  }
	
  /* 如果 cookie 中的 passed 變數等於 TRUE，
     表示已經登入網站，則取得使用者資料 */
  else
  {
    require_once("dbtools.inc.php");
	
    //取得 modify.php 網頁的表單資料
    $cname = $_POST["cname"];
    $cid = $_POST["cid"];
    $uname = $_POST["uname"];
    $phone = $_POST["phone"];
	$ephone = $_POST["ephone"];
	$cellphone = $_POST["cellphone"];
    $address = $_POST["address"];
		
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "INSERT INTO customer (cname,cid,uname,phone,ephone,cellphone,address) VALUES ('$cname','$cid','$uname' ,'$phone','$ephone','$cellphone','$address')";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //關閉資料連接
    mysql_close($link);
	}
?>	
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>新增廠商資料成功</title>
      <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <p align="center"><img src="images/wweds.png">   <br> <br>   
	<button type="button" class="btn btn-primary" onclick="location.href='company.php'">回到廠商首頁</button>
    </p>
  </body>
</html>