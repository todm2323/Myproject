<?
session_start();
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$uid = $_SESSION["id"];  
$date=$_POST["date"];
$cname=$_POST["cname"];
$uname=$_POST["uname"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$productname=$_POST["productname"];
$content=$_POST["content2"];
$link = create_connection();
$sql="insert into maintain(date,cname,uname,phone,address,pid,content,uid)values('$date','$cname','$uname','$phone','$address','$productname','$content','$uid')";
$result=execute_sql("mydatabase",$sql,$link);
mysql_close($link);
echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('維修單已送出')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php'"; 
    echo "</script>"; 
?>