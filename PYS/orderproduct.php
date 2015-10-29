<?
session_start();
require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$id = $_SESSION["id"];
$productid = $_GET["productid"];  
$sql="SELECT * FROM product Where id = $productid";
$sql2="SELECT * FROM tbl_user Where id = $id";
$result = execute_sql("mydatabase", $sql, $link);
$result2 = execute_sql("mydatabase", $sql2, $link);
//$oprooductid = mysql_result($result, 0, "id");
$oproductname = mysql_result($result, 0, "productname");
$oproductbrand = mysql_result($result, 0, "brand");
$oproductnumber = mysql_result($result, 0, "number");

$uname=mysql_result($result2, 0, "uname");
$cellphone=mysql_result($result2, 0, "cellphone");
$email=mysql_result($result2, 0, "email");
 //$row = mysql_fetch_assoc($result);
/*$sql3 = "INSERT INTO order (prooductname, brand, number, uname,cellphone,
            email,state) VALUES ('$oprooductname', '$oprooductbrand', 
             '$oprooductnumber', '$uname','$cellphone', '$email')";*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="back.js"></script>

</head>
<body>
<div data-role="page" data-add-back-btn="true" data-back-btn-text="回上一頁" align="center">
            <div data-role="header">
                <h1>詢價單</h1>
                 </div>
            <div data-role="content">
 <div>
              <table data-role="table" class="ui-responsive">
                <thead>
                <tr>
                  <th>廠牌</th>
                  <th>產品型號</th>
                  <th>編號</th>
                </tr>
              </thead>
               <tbody>
        <tr>
               
                  <th><?php echo $oproductbrand?></th>
                  <th><?php echo $oproductname?></th>
                  <th><?php echo $oproductnumber?></th>
                </tr>
                 </tbody>
                  </table>
                   </div>
             <div data-role="fieldcontain">
             <label for="uname">姓名</label>
             <input type="text" name="uname" id="uname"  value="<?php echo $uname ?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="uname">電話</label>
             <input type="text" name="cellphone" id="uname"  value="<?php echo $cellphone?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="uname">E-mail</label>
             <input type="text" name="email" id="uname"  value="<?php echo $email ?>" />
              </div>
            
        </div>
        </div>
      </body>
</html>
