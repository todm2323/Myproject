<?php
error_reporting(0);
setcookie('passed'); 
  session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>登出</title>
	
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
<div align="center"><h1>成功登出</h1><br/><button type="button" class="btn btn-primary" onclick="location.href='pyshome.php'">回首頁</button> </div>

  </body>
</html>
