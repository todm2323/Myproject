<?php
error_reporting(0);
mysql_query("SET NAMES 'UTF8'");
$brand=$_GET["brand"];
mysql_query("SET NAMES 'UTF8'");//設定utf8 中文字才不會出現亂碼
mysql_connect("localhost","root","0000");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("mydatabase");//我要從member這個資料庫撈資料

$datatoyota=mysql_query("select * from product where brand = '$brand'");
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>擐����</title>
	
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

		<div class="col-md-2">
			<div class="panel panel-default">
				<div class="panel-body">
				
    <button type="button" class="btn btn-link" onclick="location.href='productshow1.php?brand=TOYOTA'">TOYOTA</button>  <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow1.php?brand=KOMATSU'">KOMATSU</button> <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow1.php?brand=NYK'">NYK</button> <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow1.php?brand=NISSION'">NISSION</button><br/>
    <button type="button" class="btn btn-link" onclick="location.href='productshow1.php?brand=��嗡辣'">��嗡辣</button>	<br/>
			    </div>
			</div>

  </div>
  <div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-body">
	
	
	<center>	<h1><?php echo $brand?></h1></center>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="1000" align="center">
  
 <thead>
            <tr>
            <tr>
                <th>������</th>
                <th>閬����</th>
				<th>�����亥岷���</th>
                
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
                                        <p>������:<?php echo $rs["weigh"]?></p>
                                        <p>���擃�:<?php echo $rs["mast"]?></p>
                                        <p>蝺刻��:<?php echo $rs["number"]?></p>
                                        <p>撟游��:<?php echo $rs["year"]?></p>
                                        <p>������:<?php echo $rs["state"]?></p>
								    </td>  
								    <td width="10%" align="center" valign="center">
                                            <button type="button" class="btn btn-primary" onclick="location.href='join1.html?productid=<?php echo $rs["id"]?>'">隢���������交�����</button>
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