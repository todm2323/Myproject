<?php
$deleteid = $_GET["deleteid"];  
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$sql="delete from orders where id='$deleteid'";
$result=execute_sql("mydatabase",$sql,$link);
mysql_close($link);
    echo "<script language='javascript'>"; 
    echo "history.back();"; 
    echo "</script>"; 
?>