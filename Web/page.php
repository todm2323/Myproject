<?php
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from product");//從member中選取全部(*)require_once("dbtools.inc.php");

 $nid = $_GET["id"];

 $link = create_connection();
 
 $sql = "SELECT * FROM product Where id = $nid";
 $result = execute_sql("mydatabase", $sql, $link);
 $rs = mysql_fetch_assoc($result);

?> 
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>首頁</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <style>
	body { font-size: 140%; }
	</style>
	
	<script>
	$(document).ready(function() {
    $('#example').dataTable({
        "pagingType": "full_numbers"
    });
} );
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
<div class="col-md-4"><a href="pyshome.php"><img class="img-responsive" src="images/brand.png"> </a></div>
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
				<div class="col-md-4">
				<a href="pyshome.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-4">
				<a href="pysproduct.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-4">
				<a href="mypys.php"><img class="img-responsive" src="images/me.png" height="120%" > </a>
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
				<center> <img src="images/member1.png" /></center>
				<form class="form-horizontal" id="example-form" action="checkpwd.php" method="post">
				  <label for="inputEmail">帳號</label>
				  <input type="text" class="form-control" placeholder="Account" name="username" id="inputExample">
				  <label for="inputPassword" >密碼</label>
				  <input type="password" class="form-control" placeholder="Password" name="password" id="inputExample2">
				  <button type="submit" class="btn btn-success">登入</button>
				  <button type="reset" class="btn btn-default">重新填寫</button>
				  <br/>
	  <button type="button" class="btn btn-primary" onclick="location.href='join.html'">加入會員</button> 
	  <button type="button" class="btn btn-primary" onclick="location.href='search_pwd.html'">忘記密碼</button> 
	  <button type="button" class="btn btn-primary" onclick="location.href='state_add.html'">帳戶啟用</button> 
	  </form>
			    </div>
			</div>
		</div>
	</div>
  </div>
  <p align="center"><img src="images/bbbbb.png"> 
<div class="panel panel-default">
  <div class="panel-heading">
  <?php echo $rs{"productname"} ?></div>
  <div class="panel-body">
  <?php echo $rs{"weigh"} ?></div>
  <div class="panel-body">
  <?php echo $rs{"brand"} ?></div>
   <div class="panel-body">
   <?php echo $rs{"mast"} ?></div>
</div>
  </body>
</html>