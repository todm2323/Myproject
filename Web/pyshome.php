<?php
header("Content-Type: text/html; charset=utf-8");
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("set names 'UTF8'");
$data=mysql_query("select * from news ORDER BY date DESC");//從member中選取全部(*)require_once("dbtools.inc.php");
$t=strtotime(date ("Y-m-d H:i:s" ,mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))));
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
        "order": [[ 0, "desc" ]]
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
				<div class="col-md-3">
				<a href="pyshome.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="product.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
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
				<center> <img src="images/custermor.png" /></center>
				<form align="CENTER" class="form-horizontal" id="example-form" action="checkpwd.php" method="post">
					<div align="CENTER">
				  <label for="inputEmail">帳號</label>
				  <input type="text" class="form-control" placeholder="Account" name="username" id="inputExample">
				  <label for="inputPassword" >密碼</label>
				  <input type="password" class="form-control" placeholder="Password" name="password" id="inputExample2">
				  <button type="submit" class="btn btn-success">登入</button>
				  <button type="reset" class="btn btn-default">重新填寫</button>
				  <br/>
	  <button type="button" class="btn btn-primary" onclick="location.href='join1.html'">加入會員</button> 
	  <button type="button" class="btn btn-primary" onclick="location.href='search_pwd.html'">忘記密碼</button> 
	  <button type="button" class="btn btn-primary" onclick="location.href='state_add.html'">帳戶啟用</button> 
	   </div>
	  </form>
			    </div>
			</div>
		</div>
	</div>
  </div>
	<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
    
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
<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{ $rs=mysql_fetch_assoc($data);
?>
<td><?php echo $rs["date"]?></td>
<td><?php echo $rs["class"]?></td>
<td><?php if($rs{"time"}>=$t){?><img src='images/new.gif'><?php }?><a href='show.php?id=<?php echo $rs{"id"} ?>'><?php echo $rs{"title"} ?></a></td>
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