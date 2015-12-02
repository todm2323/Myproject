<?
error_reporting(E_ERROR);
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$username=$_POST["setusername"];
$email=$_POST["setemail"];
$sql="SELECT * FROM tbl_user Where username  = '$username' AND email = '$email'";
$result = execute_sql("mydatabase", $sql, $link);
ini_set("SMTP","msa.hinet.net");
ini_set("smtp_port","25");
if($username==""||$email==""){
	echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('帳號或Email不得為空白')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "history.back();";  
    echo "</script>"; 
}
else if (mysql_num_rows($result) == 0)
  {
    mysql_close($link);		
	echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('您輸入的帳戶不存在請重新輸入')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "history.back();";
    echo "</script>"; 
	
  }
else{
    $uname = mysql_result($result, 0, "uname");
    $password = mysql_result($result, 0,"password");
    $subject = "補寄會員密碼";
    $headers  ="From:todm2323@gmail.com";
    $message2 = "
    $uname 您好，您的帳號資料如下：
          　　帳號：$username
          　　密碼：$password
    建議您重設您的密碼已確保障戶安全。";
    mail($email, $subject, $message2, $headers);	echo "<SCRIPT language='javascript'>"; 
    echo "window.alert('您的帳戶資料已寄送到註冊時所填寫的E-mail')"; 
    echo "</SCRIPT>"; 
    echo "<script language='javascript'>"; 
    echo "location.href='index.php#member'";
    echo "</script>"; 	
}
?>