<?
session_start();
require_once("dbtools.inc.php");
$link = create_connection();
$id = $_SESSION["id"];
echo 123;
/* $result = execute_sql("mydatabase", $sql, $link);
$sql=mysql_query("SELECT * FROM orders Where uid = $id");
$sql2="SELECT * FROM tbl_user Where id = $id";
$result2 = execute_sql("mydatabase", $sql2, $link);
$uname=mysql_result($result2, 0, "uname");
$cellphone=mysql_result($result2, 0, "cellphone");
$email=mysql_result($result2, 0, "email"); */
?>