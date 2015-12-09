<?php
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from product");//從member中選取全部(*)require_once("dbtools.inc.php");
$datatoyota=mysql_query("select * from product");
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
	
	
	<div class="row">

		<div class="col-md-2">
			<div class="panel panel-default">
				<div class="panel-body">
				
	<center><button type="button" class="btn btn-link" onclick="location.href='productshow2.php?brand=TOYOTA'">TOYOTA</button>  <br/>
	<center><button type="button" class="btn btn-link" onclick="location.href='productshow2.php?brand=KOMATSU'">KOMATSU</button> <br/>
	<center><button type="button" class="btn btn-link" onclick="location.href='productshow2.php?brand=NYK'">NYK</button> <br/>
	<center><button type="button" class="btn btn-link" onclick="location.href='productshow2.php?brand=NISSION'">NISSION</button><br/>
    <center><button type="button" class="btn btn-link" onclick="location.href='productshow2.php?brand=TOYOTA'">零件</button>	<br/>
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
  <div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-body">
	
	
	<center>	<h1>所有產品</h1></center>
	
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="1000" align="center">
  
 <thead>
            <tr>
                <th>圖片</th>
                <th>規格</th>
				<th>加入詢價</th>
                
            </tr>
        </thead>
		 <tbody> 
	<?php
for($i=1;$i<=mysql_num_rows($datatoyota);$i++)
{ $rs=mysql_fetch_assoc($datatoyota);
?>

                            
								<tr>
                                    <td width="30%" align="center" valign="center">
                                        <img src="<?php echo $rs["picture"]?>"  width="200" height="200"/>
                                    </td>                                    
									<td width="50%" align="center" valign="center">
									    <h1><?php echo $rs["productname"]?></h1>
                                        <p>重量:<?php echo $rs["weigh"]?></p>
                                        <p>揚高:<?php echo $rs["mast"]?></p>
                                        <p>編號:<?php echo $rs["number"]?></p>
                                        <p>年分:<?php echo $rs["year"]?></p>
                                        <p>狀態:<?php echo $rs["state"]?></p>
								    </td>  
								    <td width="10%" align="center" valign="center">
                                        <button type="button" class="btn btn-primary" onclick="location.href='orderproduct.php?productid=<?php echo $rs["id"]?>'">加入詢價單</button> 
                                     </td>                             
	 </tr>									
                <?php }?>                                            
        </tbody>                       
                        

        </table>
	</div>
   </div>	
  </div>
</div>
</div>


  </body>
</html>