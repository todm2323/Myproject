<?php
  session_start();
    require_once("dbtools.inc.php");
    header("Content-type: text/html; charset=utf-8");
    //取得 modify.php 網頁的表單資料
    $username = $_POST["username2"];
    $password = $_POST["password2"];
    $repassword = $_POST["repassword2"];
    $uname = $_POST["uname2"];
    $cellphone = $_POST["cellphone2"];
    $email = $_POST["email2"];
    $cname = $_POST["cname2"];
    $link = create_connection();
    //建立資料連接
    if($username==""||$password==""||$repassword==""){
         echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('請輸入完整資料')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#signup'"; 
    echo "</script>"; 
    }
    else if(strlen($password)<=5){
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('密碼設定請超過5個字元')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#signup'"; 
    echo "</script>"; 
    }
    else if($password!=$repassword){
    echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('確認密碼錯誤，請重新輸入')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#signup'"; 
    echo "</script>"; 
    }
    else{
        $sql="UPDATE tbl_user SET username = '$username', password = '$password',uname='$uname',cellphone='$cellphone',email='$email' WHERE cname = '$cname'";
        $result = execute_sql("mydatabase", $sql, $link);     
    //關閉資料連接
    mysql_close($link);
     echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('註冊成功，請登入')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#member'"; 
    echo "</script>"; 
    }
?>