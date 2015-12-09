<?php
  session_start();
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
	
  //取得表單資料
  $username = $_POST["username"]; 	
  $password = $_POST["password"];

  //建立資料連接
  $link = create_connection();
  //檢查帳號密碼是否正確
  $sql = "SELECT * FROM tbl_user Where username = '$username' AND password = '$password'";
  $result = execute_sql("mydatabase", $sql, $link);

  $sql2 = "SELECT * FROM tbl_user Where username = '$username' and state ='success'";
  $result2 = execute_sql("mydatabase", $sql2, $link);

  $sql3 = "SELECT * FROM tbl_user Where username = '$username' and state ='stop'";
  $result3 = execute_sql("mydatabase", $sql3, $link);
  //如果帳號密碼錯誤
  if (mysql_num_rows($result) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result);
	
    //關閉資料連接	
    mysql_close($link);		
		
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請重新輸入');";
    echo "history.back();";
    echo "</script>";
  }

  elseif(mysql_num_rows($result3) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result3);
    //關閉資料連接	
    mysql_close($link);		
		
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳戶已遭到停權');";
    echo "history.back();";
    echo "</script>";
  }

  elseif(mysql_num_rows($result2) == 0)
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result2);
    //關閉資料連接	
    mysql_close($link);		
		
    //顯示訊息要求使用者輸入正確的帳號密碼
    echo "<script type='text/javascript'>";
    echo "alert('帳戶還未啟用');";
    echo "history.back();";
    echo "</script>";
  }

  //如果帳號密碼正確
  else
  {
    //取得 id 欄位
	$username = mysql_result($result, 0, "username");
    $id = mysql_result($result, 0, "id");
	$level = mysql_result($result, 0, "level");
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result);
		
    //關閉資料連接	
    mysql_close($link);				

    //將使用者資料加入 cookies
    $_SESSION["username"]=$username;
	$_SESSION["id"]=$id;
    $_SESSION["level"]=$level;
    setcookie("passed", "TRUE");			
    header("location:pysmain.php");		
  }
?>