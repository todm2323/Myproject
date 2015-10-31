<?
require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$fixid = $_GET["fixid"];  
 $sql="SELECT * FROM maintain Where id = $fixid";
 $result = execute_sql("mydatabase", $sql, $link);
 $row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="back.js"></script>
<script>
function onBackKeyDown() {
    history.go(-1);
    navigator.app.backHistory();
}
</script>
</head>
<body>
<div data-role="page" align="center">

  
            <div data-role="header">
               <h1><?php echo $row["cname"]?></h1>
                <span><?php echo $row["date"]?></span>

            </div>
            <div data-role="content">
              <style>
td {
    border-bottom: 1px solid #d6d6d6;
}
</style>
<form name="update" action='fixupdate.php?fixid=<?php echo $fixid?>' method="post" data-ajax="false">
              <table data-role="table" class="ui-responsive ui-shadow"  data-filter="true" data-input="#filterTable-input">
      <thead>
        <tr>
          <th >機型</th>
          <th >損壞情況</th>
          <th >狀態</th>
          <th >維修日期</th>
          <th >維修人員</th>
        </tr>
      </thead>
      <tbody>
<tr>
         
          <td><?php echo $row["pid"]?></td>
          <td><?php echo $row["content"]?></td>
          <td >
            <select class="form-control" name="class" id="class">
           <option value="未維修">未維修</option>    
           <option value="維修中">維修中</option>
           <option value="已維修">已維修</option>
               </select>
          </td>
          <td><input type="date"name="fixdate" id="fixdate"/></td>
          <td><input type="text"name="fixuname" id="fixuname"/></td>
           </tr>
      </tbody>
    </table>
    <input id="update" type="submit" data-theme="b" value="更新" />
  </form>
        </div>
        </div>
      </body>
</html>