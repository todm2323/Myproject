<?php
session_start();
  //ÀË¬d cookie ¤¤ªº passed ÅÜ¼Æ¬O§_µ¥©ó TRUE
  $passed = $_COOKIE["passed"];
	
  /* ¦pªG cookie ¤¤ªº passed ÅÜ¼Æ¤£µ¥©ó TRUE¡A
     ªí¥Ü©|¥¼µn¤Jºô¯¸¡A±N¨Ï¥ÎªÌ¾É¦V­º­¶ index.htm */
  if ($passed != "TRUE")
  {
    header("location:pyshome.php");
    exit();
  }
	
  /* ¦pªG cookie ¤¤ªº passed ÅÜ¼Æµ¥©ó TRUE¡A
     ªí¥Ü¤w¸gµn¤Jºô¯¸¡A«h¨ú±o¨Ï¥ÎªÌ¸ê®Æ */
  else
  {
    require_once("dbtools.inc.php");
	
    //¨ú±o modify.php ºô­¶ªºªí³æ¸ê®Æ
    $id = $_SESSION["id2"];
    $date = $_POST["date"];
    $cname2 = $_POST["cname2"];
    $usen = $_POST["usen"];
    $detail = $_POST["detail"];
    $eg = $_POST["eg"];
    $state = $_POST["state"];
		
    //«Ø¥ß¸ê®Æ³s±µ
    $link = create_connection();
				
    //°õ¦æ UPDATE ³¯­z¦¡¨Ó§ó·s¨Ï¥ÎªÌ¸ê®Æ
    $sql = "UPDATE price SET date = '$date', cname2 = '$cname2', 
            usen = '$usen', detail = '$detail', eg = '$eg', 
            state = '$state' WHERE id = $id";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //Ãö³¬¸ê®Æ³s±µ
    mysql_close($link);
	}
?>	
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>ä¿®æ”¹è©¢åƒ¹å–®æˆåŠŸ</title>
	
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
  <center>
      <img src="images/cc3.png"><br><br>
      <button type="button" class="btn btn-primary" onclick="location.href='list-mang.php'">å›è©¢åƒ¹å–®ç®¡ç†</button> 
    </center>        
  </body>
</html>