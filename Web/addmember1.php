<?php
  
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $username = $_POST["username"];
  $password =$_POST["password"]; 
  $uname = $_POST["uname"];
  $cname = $_POST["cname"];
  $phone = $_POST["phone"];  
  $cellphone = $_POST["cellphone"];  
  $address = $_POST["address"];
  $email = $_POST["email"]; 
  //建立資料連接

  $link = create_connection();
  
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM tbl_user Where username = '$username' or email='$email'";
  $result = execute_sql("mydatabase", $sql, $link);
ini_set("SMTP","msa.hinet.net");
ini_set("smtp_port","25");
  //如果帳號已經有人使用
  if (mysql_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result);
		
    //顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您的帳號或email已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result);
	function getRandNewstate()
  {
    $state_len = 6;//指定隨機密碼字串字數
    $state = '';
	//指定隨機密碼字串內容
    $word = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    $len = strlen($word);
    for ($i = 0; $i < $state_len; $i++) {
        $state .= $word[rand() % $len];
    }
    return $state;
  }
  //變數$password取得新的隨機密碼
  $state=getRandNewstate();
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO tbl_user (username, password, uname, cname,phone, 
            cellphone, address,
            email,state) VALUES ('$username', '$password', 
             '$uname', '$cname','$phone', '$cellphone', 
            '$address', '$email', '$state')";

    $result = execute_sql("mydatabase", $sql, $link);
  $to =" $email "; //收件者
  $subject = "歡迎加入保意興有限公司"; //信件標題
  $msg = "您的啟用碼和密碼如下:
              帳號: $username
              啟用碼：$state";//信件內容
  $headers = "From: todm2323@gmail.com"; //寄件者
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
  
  
   /*$subject = "歡迎加入會員";

    $message2 = "
    $uname 您好，您的帳號資料如下：
          　　帳號：$username
          　　密碼：$password
              啟用碼：$state";
   //mail($email, $subject, $message2, $headers);	
   include "mailer.php";*/
  }
	
  //關閉資料連接	
  mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>加入會員成功</title>
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
    <p align="center"><img src="images/qqqef.png">       
    <p align="center">恭喜您已經註冊成功了，您的帳戶資料和啟用碼已寄到您的信箱<br> 
  <button type="button" class="btn btn-primary" onclick="location.href='pyshome.php'">回到首頁</button>
  <button type="button" class="btn btn-primary" onclick="location.href='state_add.html'">啟用帳號</button>
    </p>
  </body>
</html>