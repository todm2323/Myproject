<?
require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$askid = $_GET["askid"];  
 $sql="SELECT * FROM price Where id = $askid";
 $result = execute_sql("mydatabase", $sql, $link);
 $row = mysql_fetch_assoc($result);
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
<form name="update" action='askupdate.php?askid=<?php echo $askid?>' method="post" data-ajax="false">
              <table data-role="table" class="ui-responsive ui-shadow"  data-filter="true" data-input="#filterTable-input">
      <thead>
        <tr>
          <th >日期</th>
          <th >公司</th>
          <th >用途</th>
          <th >細節</th>
          <th >備註</th>
          <th >狀態</th>
        </tr>
      </thead>
      <tbody>
<tr>
         
          <td><?php echo $row["date"]?></td>
          <td><?php echo $row["cname"]?></td>
          <td><?php echo $row["usen"]?></td>
          <td><?php echo $row["detail"]?></td>
          <td><?php echo $row["eg"]?></td>
          <td >
            <select class="form-control" name="class" id="class">
           <option value="未處理">未處理</option>    
           <option value="已回復">已回復</option>
               </select>
          </td>
           </tr>
      </tbody>
    </table>
    <input id="update" type="submit" data-theme="b" value="更新" />
  </form>
        </div>
        </div>
      </body>
</html>