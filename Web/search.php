<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $username = $_POST["username"]; 
  $email = $_POST["email"];
  
  //建立資料連接
  $link = create_connection();
			
  //檢查查詢的帳號是否存在
  $sql = "SELECT * FROM tbl_user Where username = '$username' or email='$email'";
  $result = execute_sql("mydatabase", $sql, $link);
  //如果帳號不存在
  if (mysql_num_rows($result) == 0)
  {
    //顯示訊息告知使用者，查詢的帳號並不存在
    echo "<script type='text/javascript'>
            alert('您所查詢的資料不存在，請檢查是否輸入錯誤。');
            history.back();
          </script>";
  }
  else  //如果帳號存在
  {  $to =" $email "; //收件者
     $subject = "查詢密碼"; //信件標題
    $headers = "From: adidassk2@yahoo.com.tw";
    $row = mysql_fetch_object($result);
    $username = $row->username;
    $password = $row->password;
    $msg = "您的帳號和密碼如下:
              帳號: $username
              密碼：$password ";
    mail("$to", "$subject", "$msg", "$headers");
  }

  //釋放 $result 佔用的記憶體
  mysql_free_result($result);
		
  //關閉資料連接	
  mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查詢密碼</title>
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
    <p align="center"><img src="images/yyyhh.png"> <br>       
    <p align="center">您的密碼已寄到您的信箱<br> <br> 
  <button type="button" class="btn btn-primary" onclick="location.href='pyshome.php'">回到首頁</button>	
    </p>
  </body>
</html>