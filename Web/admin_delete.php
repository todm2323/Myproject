<?php
  require_once("dbtools.inc.php");
  $passed = $_COOKIE["passed"];


  header("Content-Type: text/html; charset=utf-8");
   $id3 = $_GET["id"];
   $link2 = create_connection(); 
   $sql2 = "select level From tbl_user WHERE  id = $id3";
   $sql3 = "select email From tbl_user WHERE  id = $id3";
   $result2 = execute_sql("mydatabase", $sql2, $link2);
   $result3 = execute_sql("mydatabase", $sql3, $link2);
   $row=mysql_fetch_assoc($result2);
   $row2=mysql_fetch_assoc($result3);
   $email=$row2{"email"};
  if ($passed != "TRUE")
  {
    $sql = "SELECT * FROM tbl_user Where username = '$username' or email='$email'";
    header("location:pyshome.php");
    exit();
  }
  /*  如果 cookie 中的 passed 變數等於 TRUE，
      表示已經登入網站，將使用者的帳號刪除 */
  elseif($row{"level"}=="admin")
  {
       echo "<script type='text/javascript'>
       alert('您無權執行此動作');
       history.back();
       </script>";
  }
  else
  {

	$state_success="stop";	
    $id2 = $_GET["id"];
    //建立資料連接
    $link = create_connection();
				
    //刪除帳號
    $sql = "UPDATE tbl_user SET state='$state_success' WHERE  id = $id2";
    $result = execute_sql("mydatabase", $sql, $link);
	$to =" $email "; //收件者
    $subject = "保意興有限公司停權告知"; //信件標題
    $msg = "您的帳號已被封鎖，若要回復請回信給管理者";
  $headers = "From: adidassk2@yahoo.com.tw"; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
	}
    mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>停權成功</title>
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
    <p align="center"><img src="images/erase1.png"></p><br>
      此帳號已遭到停權。<br><br>
    </p>
	<button type="button" class="btn btn-primary" onclick="location.href='management.php'">回會員管理</button> 
	</center>
  </body>
</html>
