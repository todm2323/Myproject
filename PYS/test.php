<?
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$sql="SELECT * FROM orders";
$result=execute_sql("mydatabase",$sql,$link);
$uid=mysql_result($result, 0, "number");
echo $uid;
?>