<?php
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("set names 'UTF8'");
$data=mysql_query("select * from product");//從member中選取全部(*)require_once("dbtools.inc.php");

?> 
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>我的清單</title>
	
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
  <div class="row">
<div class="col-md-4"><a href="pysmain.php"><img class="img-responsive" src="images/brand.png"> </a></div>
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
			<div class="col-md-12">
			  <div class="row">
				<div class="col-md-3">
				<a href="know.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="product.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="productlist.php"><img class="img-responsive" src="images/list.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="me.html"><img class="img-responsive" src="images/me.png" height="120%" > </a>
				</div>
			  </div>
			</div>
		</div>
    </div>
  </div>
</nav>
<div class="row">
  <div class="col-md-12"><img class="img-responsive" alt="Brand" src="http://www.toyota-forklift.com.tw/images/temp_a/banner_2.jpg"></div>

</div>

<div class="row">
  <div class="col-md-3"> 
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
								  <header><center> <img src="images/member1.png"></center></header>
  <div class="categorybox">
  <ul>
  <li><a href="modify.php">修改資料</a></li>
  <li><a href="management.php">管理後台資料</a></li>
  <li><a href="product-management.php">管理產品資料</a></li>
  <li><a href="booking-management.php">管理預約維修紀錄</a></li>
  <li><a href="rent-management.php">管理預約租車紀錄</a></li>
  <li><a href="noticeboard.php">發布公告</a></li>
  <li><a href="logoutsuccess.php">登出網站</a></li>
</ul>
  </div>
			    </div>
			</div>
		</div>
	</div>
  </div>
  <div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-body">

<iframe src="http://localhost/ch18/phpcart/cart.php" width=800 height=800 frameborder=0 scrollong =auto ></iframe>

		
		
	</div>
   </div>	
  </div>
</div>
  </body>
</html>



