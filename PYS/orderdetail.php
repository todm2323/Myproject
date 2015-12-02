<?
session_start();
require_once("dbtools.inc.php");
header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$id = $_SESSION["id"];
//$sql="SELECT * FROM orders Where uid = $id";
$result = execute_sql("mydatabase", $sql, $link);
//$oprooductid = mysql_result($result, 0, "id");
//$oproductname = mysql_result($result, 0, "productname");
//$oproductnumber = mysql_result($result, 0, "number");
$sql=mysql_query("SELECT * FROM orders Where uid = $id");
$sql2="SELECT * FROM tbl_user Where id = $id";
$result2 = execute_sql("mydatabase", $sql2, $link);
$uname=mysql_result($result2, 0, "uname");
$cellphone=mysql_result($result2, 0, "cellphone");
$email=mysql_result($result2, 0, "email");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile.theme.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="back.js"></script>

</head>
<body>
<div data-role="page" data-add-back-btn="true" align="center">
            <div data-role="header" data-position="fixed" data-theme="b">
              <button onclick="location.href='index.php'"data-theme="a" data-ajax="false">上一頁</button>
                <h1>詢價單</h1>
                 </div>
                
            <div data-role="content">
              <form action="ordersubmit.php" method="post" name="myForm" data-ajax="false">
 <div>
              <table data-role="table" class="ui-responsive ui-shadow" data-mode="columntoggle" data-column-btn-text="更多..">
                <thead>
                <tr>
                  <th data-priority="1"></th>
                  <th data-priority="1">廠牌</th>
                  <th data-priority="1">產品型號</th>
                  <th data-priority="2">車號</th>
                </tr>
              </thead>
               <tbody>
                          <?php
for($i=1;$i<=mysql_num_rows($sql);$i++)
{ $rs=mysql_fetch_assoc($sql);
?>
        <tr> 
                  <th><a href="deleteorder.php?deleteid=<?php echo $rs["id"]?>" style="text-decoration:none;" data-ajax="false"><span style="color:red" >移除</span><a></th>
                  <th><?php echo $rs["brand"]?></th>
                  <th><?php echo $rs["productname"]?></th>
                  <th><?php echo $rs["number"]?></th>
                 
                </tr>
                 <?php }?>
                 </tbody>
                  </table>
                   </div>
                   <div data-role="fieldcontain">
                    <select class="form-control" name="buy" id="buy">
           <option value="租賃">租賃</option>    
           <option value="購買">購買</option>
               </select>
               </div>
                   <div data-role="fieldcontain">
             <label for="bei">備註</label>
             <textarea class="ckeditor" rows="5" id="bei" name="bei" placeholder="e.g.用途"></textarea>
              </div>
             <div data-role="fieldcontain">
             <label for="uname">姓名</label>
             <input type="text" name="uname" id="uname"  value="<?php echo $uname ?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="cellphone">電話</label>
             <input type="text" name="cellphone" id="cellphone"  value="<?php echo $cellphone?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="email">E-mail</label>
             <input type="text" name="email" id="email"  value="<?php echo $email ?>" />
              </div>
              <button type="submit" class="btn btn-primary" data-theme="b">送出</button>
            </form>
        </div>

        </div>

      </body>
</html>
