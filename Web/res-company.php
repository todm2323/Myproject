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
    $id = $_SESSION["id2"];
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
    $sql = "UPDATE customer SET  cname = '$cname',cid = '$cid',uname = '$uname',  phone = '$phone', ephone = '$ephone', cellphone = '$cellphone', 
            address = '$address'WHERE id = $id";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //關閉資料連接
    mysql_close($link);
  }		
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>修改廠商資料成功</title>
	
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
  <center>
      <img src="images/eesd.png"><br>
      <button type="button" class="btn btn-primary" onclick="location.href='company.php'">回廠商管理</button> 
    </center>        
  </body>
</html>