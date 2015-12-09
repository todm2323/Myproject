<?php 
header("Content-Type: text/html; charset=utf-8");
require_once("dbtool.inc.php");
if(isset($_POST["customername"]) && ($_POST["customername"]!="")){
	//清單開始
	require_once("mycart.php");
	session_start();
	$cart =& $_SESSION['cart']; // 將清單的值設定為 Session
	if(!is_object($cart)) $cart = new myCart();
	//清單結束	
	//新增訂單資料
	$sql_query = "INSERT INTO `order` (`customername` ,`customeremail` ,`customeraddress` ,`customerphone`) VALUES (";
	$sql_query .= "'".$_POST["customername"]."',";
	$sql_query .= "'".$_POST["customeremail"]."',";
	$sql_query .= "'".$_POST["customeraddress"]."',";
	$sql_query .= "'".$_POST["customerphone"]."',";
	mysql_query($sql_query);
	//取得新增的訂單編號
	$o_pid = mysql_insert_id();
	//新增訂單內貨品資料
	if($cart->itemcount > 0) {
		foreach($cart->get_contents() as $item) {
		$sql_query="INSERT INTO `orderdetail` (`orderid` ,`productid` ,`productname` ,`quantity`) VALUES (";
		$sql_query .= $o_pid.",";
		$sql_query .= $item['id'].",";
		$sql_query .= "'".$item['info']."',";
		$sql_query .= $item['qty'].")";	
		mysql_query($sql_query);
		}
	}
	//郵寄通知
	$cname = $_POST["customername"];
	$cmail = $_POST["customeremail"];
	$ctel = $_POST["customerphone"];
	$caddress = $_POST["customeraddress"];
	$mailcontent=<<<msg
	親愛的 $cname 您好：
	感謝您的光臨
	清單資料如下：
	--------------------------------------------------
	訂單編號： $o_pid 
	客戶姓名：$cname 
	電子郵件： $cmail 
	電話： $ctel 
	住址： $caddress 

	--------------------------------------------------
	希望能再次為您服務 
	
	保意興有限公司 敬上
msg;
	$mailFrom="=?UTF-8?B?" . base64_encode("保意興有限公司") . "?= <service@e-happy.com.tw>";
	$mailto = $_POST["customeremail"];
	$mailSubject="=?UTF-8?B?" . base64_encode("保意興有限公司訂單通知"). "?=";
	$mailHeader="From:".$mailFrom."\r\n";
	$mailHeader.="Content-type:text/html;charset=UTF-8";
	if(!@mail($mailto,$mailSubject,nl2br($mailcontent),$mailHeader)) die("郵寄失敗！");
	//清空購物車
	$cart->empty_cart();
}	
?>
<script language="javascript">
alert("感謝您的光臨，我們將儘快進行處理。");
window.location.href="index.php";
</script>