<?php
  session_start();
  require_once("dbtools.inc.php");
  
  //取得表單資料
  //$id=$_POST["id"];
  $cname = $_POST["cname"];
  $uname = $_POST["uname"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $pid = $_POST["pid"]; 
  $content = $_POST["content"]; 
  $state = $_POST["state"];   
  $fixdate = $_POST["fixdate"];  
  $fixuname = $_POST["fixuname"]; 
$date = date ("Y-m-d H:i:s" ,mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;   

  //建立資料連接

  $link = create_connection();
    //執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO maintain (date ,cname, uname ,phone ,address, 
            pid,content,state,fixdate,fixuname) VALUES ('$date', '$cname', 
             '$uname', '$phone','$address', '$pid', 
             '$content','$state','$fixdate','$fixuname')";

    $result = execute_sql("mydatabase", $sql, $link);
   /*$subject = "歡迎加入會員";
    $headers  ="From:todm2323@gmail.com";
    $message2 = "
    $uname 您好，您的帳號資料如下：
          　　帳號：$username
          　　密碼：$password
              啟用碼：$state";
   mail($email, $subject, $message2, $headers);	*/
  
	
  //關閉資料連接	
  mysql_close($link);
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>新增維修紀錄成功</title>
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
    <p align="center"><img src="images/fix.png"> <br><br>	
    <button type="button" class="btn btn-primary" onclick="location.href='booking-management.php'">回預約維修管理</button> 	
    </p>
  </body>
</html>