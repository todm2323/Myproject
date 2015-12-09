<?php
  
  require_once("dbtools.inc.php");
  
  //取得表單資料
  //$id = $_POST["id"];
  $date = date ("Y-m-d H:i:s" ,mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 
  $title  = $_POST["title"];
  $content = $_POST["content"];
  $time=$_POST["time"];
  $time2=strtotime("+$time day 8 hours");
  $class=$_POST["class"];
  //建立資料連接

  $link = create_connection();

   $sql="insert into news(title,content,date,class,time)values('$title','$content','$date','$class','$time2')";

    $result = execute_sql("mydatabase", $sql, $link);
	$data=mysql_query("select * from news");
	
  //關閉資料連接	
  mysql_close($link);
  
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>公告發布成功</title>
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
  <p align="center"><img src="images/post.png"> <br> <br>   
	<button type="button" class="btn btn-primary" onclick="location.href='pysmain.php'">回管理首頁</button>  
    </p>
  </body>
</html>