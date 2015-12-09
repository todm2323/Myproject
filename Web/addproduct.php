<?php
  
  require_once("dbtools.inc.php");
  
  //取得表單資料
  $productname = $_POST["productname"];
  $weigh =$_POST["weigh"]; 
  $brand = $_POST["brand"];
  $mast = $_POST["mast"];
  $number = $_POST["number"];  
  $year = $_POST["year"];  
  $state = $_POST["state"];
  $picture = $_POST["picture"];

  //建立資料連接

  $link = create_connection();
  if($productname==""||$weigh==""||$brand==""||$mast==""||$number==""||$year==""||$state=="")
  {
    echo "<script type='text/javascript'>";
    echo "alert('有資料尚未填寫');";
    echo "history.back();";
    echo "</script>";
  }
  //檢查帳號是否有人申請
  else{
    $sql = "SELECT * FROM product Where  number='$number'";
  $result = execute_sql("mydatabase", $sql, $link);

    $sql = "INSERT INTO product (productname, weigh, brand, mast,number, 
            year,state,picture) VALUES ('$productname', '$weigh', 
             '$brand', '$mast','$number', '$year', 
             '$state','$picture')";

    $result = execute_sql("mydatabase", $sql, $link);
 
	
  //關閉資料連接	
  mysql_close($link);
}
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
    <div align="center">
    <p align="center"><img src="images/add.png">  <br/>     
       <button type="button" class="btn btn-primary" onclick="location.href='product-management.php'">返回</button>      
    </p>
  </div>
  </body>
</html>