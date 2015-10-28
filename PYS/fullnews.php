<?
require_once("dbtools.inc.php");
 header("Content-type: text/html; charset=utf-8");
$link = create_connection();
$newsid = $_GET["newsid"];  
 $sql="SELECT * FROM news Where id = $newsid";
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
<div data-role="dialog" data-add-back-btn="true" data-back-btn-text="回上一頁" align="center">
            <div data-role="header">
                <h1><?php echo $row["title"]?></h1>
            </div>
            <div data-role="content">
              <div>
          
                <h1><?php echo $row["content"]?></h1>
                 <span>發布日期:<?php echo $row["date"]?></span>
              </div>
        </div>
        </div>
      </body>
</html>