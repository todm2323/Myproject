<?php
header("Content-Type: text/html; charset=utf-8");
mysql_connect("localhost","root","0000");//»Plocalhost³s½u¡Broot¬O±b¸¹¡B±K½X³B¿é¤J¦Û¤v³]©wªº±K½X
mysql_select_db("mydatabase");//§Ú­n±qmember³o­Ó¸ê®Æ®w¼´¸ê®Æ
mysql_query("set names 'UTF8'");
$data=mysql_query("select * from product");//±qmember¤¤¿ï¨ú¥þ³¡(*)require_once("dbtools.inc.php");

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
<div class="col-md-4"><a href="psymain.php"><img class="img-responsive" src="images/brand.png"> </a></div>
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
				  <header><center> <img src="images/owner.png"></center></header>
  <div class="categorybox">	
    <a href="modify.php"><center><img class="img-responsive" src="images/changeinformation-01.png"></center></a><br/>
  <a href="management.php"><center><img class="img-responsive" src="images/personalinformation-01.png"></center></a><br/>
  <a href="product-management.php"><center><img class="img-responsive" src="images/goodsinformation-01.png"></center></a><br/>
  <a href="booking-management.php"><center><img class="img-responsive" src="images/fixxxx-01.png"></center></a><br/>
  <a href="list-mang.php"><center><img class="img-responsive" src="images/asklistttt-01.png"></center></a><br/>
  <a href="company.php"><center><img class="img-responsive" src="images/conpanyinformation-01.png"></center></a><br/>
  <a href="noticeboard.php"><center><img class="img-responsive" src="images/inform-01.png"></center></a><br/>
  <a href="logoutsuccess.php"><center><img class="img-responsive" src="images/logout-01.png"></center></a><br/>
  </div>
			    </div>
			</div>
		</div>
	</div>
  </div>
 <div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">

		
   <h1 align="center">關於我們</h1>
   <hr size="4" noshade width="90%" color="0000ff">
   	<font size="4">保意興有限公司自83年成立以來，秉持讓客戶享有最專業穩定的服務品質為職志；更以 創新求變的思維，為客戶提供最經濟有效率的堆高機企劃方案，長久以來深受各業界客戶的肯定與信賴。 

保意興有限公司的專業服務陣容，無論是銷售工程師還是維修工程師，皆受過堆高 機專業完整的訓練；實務經驗，更是非朝夕速成可得。選擇機穎讓您工作無後顧之憂。 

保意興有限公司除了提供標準化產品，更樂於瞭解您在搬運堆高作業的特殊需求，提供完善的硬體設備與服務，保意興有限公司以最誠摯的心來替客戶服務</font>
   <p align="center"><iframe src="http://www.dr2ooo.com/tools/maps/maps.php?zoom=15&width=500&height=266&ll=24.2047471,120.6317976&cp=true&ctrl=true&" width="500" height="266"></iframe><br></p>
   <p align="center" ><a href="pysmain.php">返回首頁</a></p>
	</div>
	</div>
   </div>	
  </div>
</div>
</div>
  </body>
</html>