<?php
error_reporting(0);
session_start();
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$id = $_SESSION["id"];
$uname = $_POST["uname"];
$cname = $_POST["cname"];
$phone = $_POST["phone"];  
$address = $_POST["address"];
$pid = $_POST["pid"];
$content = $_POST["content"];   
$sql="SELECT * FROM tbl_user Where id = $id";
$result = execute_sql("mydatabase", $sql, $link);
$date = date ("Y-m-d H:i:s" ,mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 
//$sql1=mysql_query("SELECT * FROM maintain Where uid = $id");
//$sql2="insert into maintain (uid,uname,phone,address,pid,content)values('$id','$uname','$phone','$address','$pid','$content')";
$sql2="insert into maintain (date,uid,cname,uname,phone,address,pid,content)values('$date','$id','$cname','$uname','$phone','$address','$pid','$content')";
$result2 = execute_sql("mydatabase", $sql2, $link);
	mysql_close($link);
 
    
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>寄送維修單成功</title>
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
   <center><img src="images/eeesss.png">  <br/>
      <button type="button" class="btn btn-primary" onclick="location.href='pyscustomer.php'">返回</button>        
  
  </body>
</html>