<?php
header("Content-Type: text/html; charset=utf-8");
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
    <title>關於我們</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.min.js"></script>

    <script>
	$(document).ready(function() {
		$('#example').dataTable({
			"pagingType": "full_numbers"
		});
	});
    </script>
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
<div class="col-md-4"><a href="psyhome.php"><img class="img-responsive" src="images/brand.png"> </a></div>
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
				<a href="myadmin.php"><img class="img-responsive" src="images/me.png" height="120%" > </a>
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
  <li><a href="management.php">會員資料管理</a></li>
  <li><a href="product-management.php">管理產品資料</a></li>
  <li><a href="booking-management.php">管理預約維修紀錄</a></li>
  <li><a href="company.php">廠商資料</a></li>
  <li><a href="noticeboard.php">發布公告</a></li>
  <li><a href="logoutsuccess.php">登出網站</a></li>
</ul>
  </div>
			    </div>
			</div>
		</div>
	</div>
  </div>
  <div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">

		
   <p color="blue"span style="font-size:2cm;"align="center">關於我們</p>
   <hr size="5" noshade width="90%" color="0000ff">
   	<font size="5">保意興有限公司自88年成立以來，秉持讓客戶享有最專業穩定的服務品質為職志；更以 創新求變的思維，為客戶提供最經濟有效率的堆高機企劃方案，長久以來深受各業界客戶的肯定與信賴。 

保意興有限公司的專業服務陣容，無論是銷售工程師還是維修工程師，皆受過堆高 機專業完整的訓練；實務經驗，更是非朝夕速成可得。選擇機穎讓您工作無後顧之憂。 

保意興有限公司除了提供標準化產品，更樂於瞭解您在搬運堆高作業的特殊需求，提供完善的硬體設備與服務，保意興有限公司以最誠摯的心來替客戶服務</font>
   <p align="center"><iframe src="http://www.dr2ooo.com/tools/maps/maps.php?zoom=15&width=500&height=266&ll=24.145543,-239.272234&cp=true&ctrl=true&" width="500" height="266"></iframe><br></p>
   <p align="center" ><a href="pyshome.php">返回首頁</a></p>
	</div>
   </div>	
  </div>
</div>
</div>
  </body>
</html>