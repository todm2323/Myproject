<?php
error_reporting(0);
session_start();
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
ini_set("SMTP","msa.hinet.net");
ini_set("smtp_port","25");
$link = create_connection();
$id = $_SESSION["id"];
$productid = $_GET["productid"];  
$sql="SELECT * FROM product Where id = $productid";
$result = execute_sql("mydatabase", $sql, $link);
//$oprooductid = mysql_result($result, 0, "id");
$oproductname = mysql_result($result, 0, "productname");
$oproductbrand = mysql_result($result, 0, "brand");
$oproductnumber = mysql_result($result, 0, "number");
$sql2="SELECT * FROM orders Where uid = '$id' AND number ='$oproductnumber'";
$result2 = execute_sql("mydatabase", $sql2, $link);
$sql3="insert into orders(uid,brand,productname,number)values('$id','$oproductbrand','$oproductname','$oproductnumber')";
if (mysql_num_rows($result2) == 0)
  {
    $result3 = execute_sql("mydatabase", $sql3, $link);
    //釋放 $result 佔用的記憶體
    //關閉資料連接   
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('已加入詢價單')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "history.back();";  
    echo "</script>"; 
  
  }
  else{
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('此產品已在詢價單內')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "history.back();"; 
    echo "</script>"; 
  }
?> 

