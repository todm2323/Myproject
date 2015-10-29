<?
session_start();
require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$id = $_SESSION["id"];  
$date = date ("Y-m-d" ,mktime(date('m'), date('d'), date('Y'))) ; 
$sql="SELECT * FROM tbl_user Where id = $id";
$result = execute_sql("mydatabase", $sql, $link);
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="back.js"></script>

</head>
<body>
<div data-role="page" id="fix">
            <div data-role="header" data-position="fixed">

                <h1>預約維修單</h1>
            </div>
            <div data-role="content" align="center">
              <form action="fixpost.php" method="post"  name="myForm">
                <div data-role="fieldcontain">
                    <label for="date">日期</label>
              <input type="date"name="date" id="date" value="<?php echo $date ?>" />
              </div>
              <div data-role="fieldcontain">
              <label for="cname">公司名稱</label>
            <input type="text" name="cname" id="cname"  value="<?php echo $row{"cname"} ?>" />
             </div>
             <div data-role="fieldcontain">
             <label for="uname">姓名</label>
             <input type="text" name="uname" id="uname" value="<?php echo $row{"uname"} ?>"/>
              </div>
              <div data-role="fieldcontain">
          <label for="phone">聯絡電話</label>
            <input type="text" name="phone" id="phone"  value="<?php echo $row{"phone"} ?>"/>
        </div>
            <div data-role="fieldcontain">
            <label for="address">地址</label>
            <input type="text" name="address" id="address" value="<?php echo $row{"address"} ?>" />
            </div>
          <div data-role="fieldcontain">
            <label for="productname">機型</label>
                  <input type="text" name="productname" id="productname"/>
               </div>
                <div data-role="fieldcontain">
            <label for="textarea">損壞情況</label>
          <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
               </div>
                <input id="post" type="submit" data-theme="a" value="送出" />
                </form>
            </div>
        </div>
      </body>
</html>