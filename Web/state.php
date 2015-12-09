
<?php
  require_once("dbtools.inc.php");
  //取得表單資料
  $username = $_POST["username"]; 
  $state= $_POST["state"]; 
  //建立資料連接
  $link = create_connection();
			
  //檢查查詢的帳號是否存在
  $sql = "SELECT uname, password FROM tbl_user WHERE 
          username  = '$username' AND state = '$state'";
  $result = execute_sql("mydatabase", $sql, $link);

  //如果帳號不存在
  if (mysql_num_rows($result) == 0)
  {
    //顯示訊息告知使用者，查詢的帳號並不存在
    echo "<script type='text/javascript'>
            alert('您所查詢的資料不存在，或啟用碼輸入錯誤。');
            history.back();
          </script>";
  }
  else  //如果帳號存在
  {
   require_once("dbtools.inc.php");
   $state_success="success";
   $link2 = create_connection();		
  //檢查查詢的帳號是否存在
   $sql2 = "UPDATE tbl_user SET state='$state_success' WHERE 
          username  = '$username'";
   $result2 = execute_sql("mydatabase", $sql2, $link2);
  }

  //釋放 $result 佔用的記憶體
  mysql_free_result($result);
  
  //關閉資料連接	
  mysql_close($link);
?>
</body>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>啟用成功</title>
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
    <p align="center"><img src="images/qwdde.png">       <br> <br> 
  <button type="button" class="btn btn-primary" onclick="location.href='pyshome.php'">回到首頁</button>
    </p>
  </body>
</html>