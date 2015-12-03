<?
session_start();
$id = $_SESSION["id"]; 
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$sql="delete from orders where uid='$id'";
$result=execute_sql("mydatabase",$sql,$link);
mysql_close($link);
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#priceask'";
    echo "</script>"; 	 
?>
