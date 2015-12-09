<?php
  session_start();
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
  require_once("dbtools.inc.php");
  header("Content-Type: text/html; charset=utf-8");
  //建立資料連接
  $link = create_connection();
  
  if ($passed != "TRUE")
  {
    header("location:pyshome.html");
    exit();
  }
  /*  如果 cookie 中的 passed 變數等於 TRUE，
      表示已經登入網站，將使用者的帳號刪除 */
  else
  {
    require_once("dbtools.inc.php");  
	$state_success="success";	
    $id2 = $_GET["id"];
    //建立資料連接
    $link = create_connection();
				
    //刪除帳號
    $sql = "UPDATE tbl_user SET state='$state_success' WHERE  id = $id2";
    $result = execute_sql("mydatabase", $sql, $link);
	
  /*$to =" $email "; //收件者
  $subject = "保意興有限公司帳號恢復通知"; //信件標題
  $msg = "您的帳號已經可以使用了";//信件內容
  $headers = "From: adidassk2@yahoo.com.tw"; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;*/
		}
    //關閉資料連接
    mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>復權成功</title>
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
  <center>
    <p align="center"><img src="images/erase.png"></p><br>
    <p align="center">
      此帳號已回復正常權限。<br><br>
    </p>
	<button type="button" class="btn btn-primary" onclick="location.href='management.php'">回會員管理</button> 
	</center>
  </body>
</html>

