<?php
  session_start();
    require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
    //取得 modify.php 網頁的表單資料
    $askid = $_GET["askid"];
    $class = $_POST["class"];
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE price SET state = '$class'
            WHERE id = $askid";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //關閉資料連接
    mysql_close($link);
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('更新成功')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#adminpriceask'"; 
    echo "</script>"; 
?>