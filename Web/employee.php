<?php
error_reporting(0);
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from employee");//從member中選取全部(*)require_once("dbtools.inc.php");

?> 
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>員工資料</title>
	
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
	function myFunction() {
    var r = confirm("確認要刪除?");
    if (r == true) {
        location.href='company_delete?id=$rs["id"].php';
    } else {
        location.href='company.php';
    }
    }
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
<div class="row">
<div class="col-md-12"><img class="img-responsive" alt="Brand" src="http://www.toyota-forklift.com.tw/images/temp_a/banner_2.jpg"></div>
</div>
    <h1 align="CENTER">員工資料</h1>
  <body>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>編號</th>
			    <th>姓名</th>
                <th>年齡</th>
                <th>員工資歷</th>
				<th>行動</th> 
				<th>地址</th> 
				<th>Email</th> 
                <th>編輯</th>				
                
            </tr>
        </thead>

<tbody>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++)
{ $rs=mysql_fetch_assoc($data);
?><tr>
<td><?php echo $rs["id"]?></td>
<td><?php echo $rs["name"]?></td>
<td><?php $birthDate = $rs["birthday"];
  //explode the date to get month, day and year
  $birthDate = explode("-", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[0]) - 1)
    : (date("Y") - $birthDate[0]));
  echo  $age;?></td>
<td><?php $birthDate = $rs["year"];

if($birthDate!="(離)"){
	$birthDate = explode("-", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[0]) - 1)
    : (date("Y") - $birthDate[0]));
  echo  $age;}
  else{
echo  "(離)";
  }?></td>
<td><?php echo $rs["cellphone"]?></td>
<td><?php echo $rs["address"]?></td>
<td><?php echo $rs["email"]?></td>


<td> <?php  echo" <a href='employee-modify.php?id=".$rs["id"]."'>修改</a>"?>
</td>
</tr>
<?php }?>

        </tbody>
    </table>
	<button type="button" class="btn btn-primary" onclick="location.href='join-employee.html'">新增員工資料</button> 
    <button type="button" class="btn btn-primary" onclick="location.href='pysmain.php'">返回</button> 
	  </body>
</html>