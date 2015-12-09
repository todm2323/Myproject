<?php
header("Content-Type: text/html; charset=utf-8");
require_once("dbtools.inc.php");
		
     $nid = $_GET["id"];
		
    //«Ø¥ß¸ê®Æ³s±µ
    $link = create_connection();
							
    //°õ¦æ SELECT ³¯­z¦¡¨ú±o¨Ï¥ÎªÌ¸ê®Æ
    $sql = "SELECT * FROM news Where id = $nid";
    $result = execute_sql("mydatabase", $sql, $link);
    $rs = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
  <head>
  
  <div class="row">
<div class="col-md-4"><a href="pyscustomer.php"><img class="img-responsive" src="images/brand.png"> </a></div>
    <div class="col-md-6">
		<div class="row">
		    <div class="col-md-12">
			&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			&nbsp;
			</div>
        </div>
			  <div class="row">
				<div class="col-md-3">
				<a href="pysmain.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="producta.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="askprice1.php"><img class="img-responsive" src="images/list.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="ddmy.php"><img class="img-responsive" src="images/me.png" height="120%" > </a>
				</div>
			  </div>
			</div>
		</div>
    </div>
  </div>
</nav>
</nav>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
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
<div class="row">
<div class="col-md-12"><img class="img-responsive" alt="Brand" src="http://www.toyota-forklift.com.tw/images/temp_a/banner_2.jpg"></div>
</div>
<div class="container">
<div align="center"><h1>公告欄</h1></div>

<div class="panel panel-default">
  <div class="panel-heading">
  <?php echo $rs{"date"} ?></div>
  <div class="panel-body">
  <?php echo $rs{"class"} ?></div>
  <div class="panel-body">
  <?php echo $rs{"title"} ?></div>
   <div class="panel-body">
   <?php echo $rs{"content"} ?></div>
</div>
</div>
<div align="center">
<button align="CENTER" type="button" class="btn btn-primary" onclick="location.href='pysmain.php'">返回</button> 
</div>
  </body>
</html>

