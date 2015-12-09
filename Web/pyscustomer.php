<!DOCTYPE html>
<?php
error_reporting(0);
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("set names 'UTF8'");
$data=mysql_query("select * from news");//從member中選取全部(*)require_once("dbtools.inc.php");
$t=strtotime(date ("Y-m-d H:i:s" ,mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))));
?>
<html>
  <head>
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
			<div class="col-md-12">
			  <div class="row">
				<div class="col-md-3">
				<a href="pyscustomer.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="pysproduct.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="askprice.php"><img class="img-responsive" src="images/list.png" height="120%" > </a>
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
				  <header><center> <img src="images/custermor.png"></center></header>
  <div class="categorybox">
  <a href="modify1.php"><center><img class="img-responsive" src="images/changeinformation-01.png"></center></a><br/>
  <a href="serchperson.php"><center><img class="img-responsive" src="images/reword-01.png"></center></a><br/>
  <a href="join-fix.php"><center><img class="img-responsive" src="images/fix-01.png"></center></a><br/>
  <a href="list-find.php"><center><img class="img-responsive" src="images/asklist-01.png"></center></a><br/>
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
        <body align="CENTER">
  <h1 align="CENTER">最新公告</h1>
<table align="CENTER" id="example" class="table table-striped table-bordered" cellspacing="0" width="1200">
        <thead>
            <tr>
				<th>日期</th>
				<th>類別</th>
				<th>標題</th>
            </tr>
        </thead>
<tbody>
<tr>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{ $rs=mysql_fetch_assoc($data);
?>
<td><?php echo $rs["date"]?></td>
<td><?php echo $rs["class"]?></td>
<td><?php if($rs{"time"}>=$t){?><img src='images/new.gif'><?php }?><a href='show1.php?id=<?php echo $rs{"id"} ?>'><?php echo $rs{"title"} ?></a></td>
</tr>
<?php }?>

        </tbody>
    </table>
    </table>
	</div>
   </div>	
  </div>
  </body>
</html>