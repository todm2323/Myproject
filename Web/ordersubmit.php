<?php
error_reporting(0);
session_start();
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
ini_set("SMTP","msa.hinet.net");
ini_set("smtp_port","25");
$link = create_connection();
$id = $_SESSION["id"];
$use=$_POST["buy"];
$eg=$_POST["eg"];
$sql="SELECT * FROM tbl_user Where id = $id";
$result = execute_sql("mydatabase", $sql, $link);
$date = date ("Y-m-d H:i:s" ,mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ; 
$sql2=mysql_query("SELECT * FROM orders Where uid = $id");
$cname = mysql_result($result, 0, "cname");
	$uname = mysql_result($result, 0, "uname");
    $email = mysql_result($result, 0,"email");
    $txt=null;
for($i=1;$i<=mysql_num_rows($sql2);$i++)
{ 
	$rs=mysql_fetch_array($sql2);
	$array1 = $rs["brand"];
	$array2 = "產品：".$rs["productname"];
	$array3 = "車號：".$rs["number"];
	$array4=array_merge($array1, $array2,$array3);
	$txt = $txt.sprintf("廠牌：%s  產品：%s  車號：%s\r\n", $rs["brand"], $rs["productname"],$rs["number"]);
     
}
    $sql3="insert into price (date,uid,cname2,detail,eg,usen)values('$date','$id','$cname','$txt','$eg','$use')";
    $result3 = execute_sql("mydatabase", $sql3, $link);
    $header .= "Content-Type:text/html\r\n";
    $emailmy= "todm2323@gmail.com";
    $subject = $cname."詢價單";
    $headers  ="From: todm2323@gmail.com";
    $message2 = "
    $cname 提出 $use 詢價：
    $txt
    備註: $eg
    請盡速回復 $uname 先生/小姐 
    Email: $email";
    
    mail($emailmy, $subject, $message2, $headers);	
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('詢價單已寄出，將回復到您的郵件信箱')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='clean.php'";
    echo "</script>"; 	
?>