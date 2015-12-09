<?php
error_reporting(0);
session_start();
$id=$_SESSION["id"];
$username=$_SESSION["username"];
mysql_connect("localhost","root","0000");//»Plocalhost³s½u¡Broot¬O±b¸¹¡B±K½X³B¿é¤J¦Û¤v³]©wªº±K½X
mysql_select_db("mydatabase");//§Ú­n±qmember³o­Ó¸ê®Æ®w¼´¸ê®Æ
mysql_query("SET NAMES 'UTF8'");//³]©wutf8 ¤¤¤å¦r¤~¤£·|¥X²{¶Ã½X
$data=mysql_query("select * from price where uid=$id");
//$data=mysql_query("select * from maintain where uname = '$username'");//±qmember¤¤¿ï¨ú¥ş³¡(*)require_once("dbtools.inc.php");
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title></title>
	
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
        "order": [[ 1, "desc" ]]
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
  <body>
    <h1 align="CENTER">è©¢åƒ¹å–®æŸ¥è©¢</h1>
  <body>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
			    <th>id</th>
                <th>æ—¥æœŸ</th>
				<th>å…¬å¸åç¨±</th>
				<th>ä½¿ç”¨æ–¹å¼</th>
				<th>è©¢åƒ¹å–®å…§å®¹</th>
				<th>è©¢å•å…§å®¹</th>
				<th>ç‹€æ…‹</th>
            </tr>
        </thead>

<tbody>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{ $rs=mysql_fetch_assoc($data);
?><tr>
<td><?php echo $rs["id"]?></td>
<td><?php echo $rs["date"]?></td>
<td><?php echo $rs["cname2"]?></td>
<td><?php echo $rs["usen"]?></td>
<td><?php echo $rs["detail"]?></td>
<td><?php echo $rs["eg"]?></td>
<td><?php echo $rs["state"]?></td>

</td>
	 

</tr>
<?php }?>

        </tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="location.href='pyscustomer.php'">è¿”å›</button> 
	  </body>
</html> 