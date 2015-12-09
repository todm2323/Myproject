<?php 
header("Content-Type: text/html; charset=utf-8");
require_once("dbtools.inc.php");
//清單開始
require_once("mycart.php");
session_start();
$cart =& $_SESSION['cart']; // 將清單的值設定為 Session
if(!is_object($cart)) $cart = new myCart();
// 更新清單內容
if(isset($_POST["cartaction"]) && ($_POST["cartaction"]=="update")){
	if(isset($_POST["updateid"])){
		$i=count($_POST["updateid"]);
		for($j=0;$j<$i;$j++){
			$cart->edit_item($_POST['updateid'][$j],$_POST['qty'][$j]);
		}
	}
	header("Location: list.php");
}
// 移除清單內容
if(isset($_GET["cartaction"]) && ($_GET["cartaction"]=="remove")){
	$rid = intval($_GET['delid']);
	$cart->del_item($rid);
	header("Location: list.php");	
}
// 清空清單內容
if(isset($_GET["cartaction"]) && ($_GET["cartaction"]=="empty")){
	$cart->empty_cart();
	header("Location: list.php");
}
//清單結束
//繫結產品目錄資料
$query_RecCategory = "SELECT `category`.`categoryid`, `category`.`categoryname`, `category`.`categorysort`, count(`product`.`id`) as productNum FROM `category` LEFT JOIN `product` ON `category`.`categoryid` = `product`.`categoryid` GROUP BY `category`.`categoryid`, `category`.`categoryname`, `category`.`categorysort` ORDER BY `category`.`categorysort` ASC";
$RecCategory = mysql_query($query_RecCategory);
//計算資料總筆數
$query_RecTotal = "SELECT count(`id`)as totalNum FROM `product`";
$RecTotal = mysql_query($query_RecTotal);
//$row_RecTotal=mysql_fetch_assoc($RecTotal);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>保意興有限公司</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
p { font-family:Microsoft JhengHei; }
font { font-family:Microsoft JhengHei; }
h { font-family:Microsoft JhengHei; }
h1 { font-family:Microsoft JhengHei; }
h2 { font-family:Microsoft JhengHei; }
h3 { font-family:Microsoft JhengHei; }
h4 { font-family:Microsoft JhengHei; }
h5 { font-family:Microsoft JhengHei; }
</style>
</head>

<body>
<table width="780" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">
        <td width="200" class="tdrline">
            <div class="boxtl"></div>
            <div class="boxtr"></div>            
            <div class="categorybox">
              <p class="heading"><img src="images/16-cube-orange.png" width="16" height="16" align="absmiddle"> 產品搜尋 <span class="smalltext">Search</span></p>
              <form name="form1" method="get" action="index.php">
                <p>
                  <input name="keyword" type="text" id="keyword" value="請輸入關鍵字" size="12" onClick="this.value='';">
                  <input type="submit" id="button" value="查詢">
                  </p>
              </form>
            
            </div>
            <div class="boxbl"></div>
            <div class="boxbr"></div>                    	
            <hr width="100%" size="1" />
            <div class="boxtl"></div>
            <div class="boxtr"></div>            
            <div class="categorybox">
            <p class="heading"><img src="images/16-cube-orange.png" width="16" height="16" align="absmiddle"> 產品目錄 <span class="smalltext">Category</span></p>
            <ul>
              <li><a href="index.php?">所有產品 <span class="categorycount">(<?php echo $row_RecTotal["totalNum"];?>)</span></a></li>
			  <?php	while($row_RecCategory=mysql_fetch_assoc($RecCategory)){ ?>
              <li><a href="index.php?cid=<?php echo $row_RecCategory["categoryid"];?>"><?php echo $row_RecCategory["categoryname"];?> <span class="categorycount">(<?php echo $row_RecCategory["productNum"];?>)</span></a></li>
              <?php }?>
            </ul>
          </div>
          <div class="boxbl"></div>
          <div class="boxbr"></div></td>
        <td><div class="subjectDiv"> <span class="heading"><img src="images/16-cube-green.png" width="16" height="16" align="absmiddle"></span> 清單內容</div>
          <div class="normalDiv">
		  <?php if($cart->itemcount > 0) {?>
          <form action="" method="post" name="cartform" id="cartform">
          <table width="98%" border="0" align="center" cellpadding="2" cellspacing="1">
              <tr>
                <th bgcolor="#ECE1E1"><p>刪除</p></th>
                <th bgcolor="#ECE1E1"><p>產品名稱</p></th>
                <th bgcolor="#ECE1E1"><p>數量</p></th>
              </tr>
          <?php		  
		  	foreach($cart->get_contents() as $item) {
		  ?>              
              <tr>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p><a href="?cartaction=remove&delid=<?php echo $item['id'];?>">移除</a></p></td>
                <td bgcolor="#F6F6F6" class="tdbline"><p><?php echo $item['info'];?></p></td>
                <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>
                  <input name="updateid[]" type="hidden" id="updateid[]" value="<?php echo $item['id'];?>">
                  <input name="qty[]" type="text" id="qty[]" value="<?php echo $item['qty'];?>" size="1">
                  </p></td>
              </tr>
          <?php }?>
         
            </table>
            <hr width="100%" size="1" />
            <p align="center">
              <input name="cartaction" type="hidden" id="cartaction" value="update">
              <input type="submit" name="updatebtn" id="button3" value="更新清單">
              <input type="button" name="emptybtn" id="button5" value="清空全部" onClick="window.location.href='?cartaction=empty'">
              <input type="button" name="button" id="button6" value="確定送出" onClick="window.location.href='checkout.php';">
              <input type="button" name="backbtn" id="button4" value="回上一頁" onClick="window.history.back();">
              </p>
          </form>
          </div>          
            <?php }else{ ?>
            <div class="infoDiv">目前清單是空的。</div>
          <?php } ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" align="center" background="images/album_r2_c1.jpg" class="trademark">© 2015 PUAL YI SHING LTD.Studio All Rights Reserved.</td>
  </tr>
</table>
</body>
</html>
