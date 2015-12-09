<?php
error_reporting(0);
session_start();
require_once("dbtools.inc.php");
$link = create_connection();
$id = $_SESSION["id"];
$result = execute_sql("mydatabase", $sql, $link);
$sql=mysql_query("SELECT * FROM orders Where uid = $id");
$sql2="SELECT * FROM tbl_user Where id = $id";
$result2 = execute_sql("mydatabase", $sql2, $link);
$uname=mysql_result($result2, 0, "uname");
$cellphone=mysql_result($result2, 0, "cellphone");
$email=mysql_result($result2, 0, "email");
?>
<html>
  <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

		<div class="col-md-2">
			<div class="panel panel-default">
				<div class="panel-body">
				
				<button type="button" class="btn btn-link" onclick="location.href='productshow.php?brand=TOYOTA'">TOYOTA</button>  <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow.php?brand=KOMATSU'">KOMATSU</button> <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow.php?brand=NYK'">NYK</button> <br/>
	<button type="button" class="btn btn-link" onclick="location.href='productshow.php?brand=NISSION'">NISSION</button><br/>
    <button type="button" class="btn btn-link" onclick="location.href='productshow.php?brand=TOYOTA'">零件</button>	<br/>
			    </div>
			</div>

  </div>
  <div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-body">
	<h1 align="center">詢價單</h1><br/>
	
	<form action="ordersubmit.php" method="post" name="myForm" data-ajax="false">
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="1000" align="center">
<thead>
              <tr>
                <th bgcolor="#ECE1E1"><p>刪除</p></th>
                <th bgcolor="#ECE1E1"><p>廠牌</p></th>
                <th bgcolor="#ECE1E1"><p>產品名稱</p></th>
                <th bgcolor="#ECE1E1"><p>編號</p></th>
              </tr>
			  </thead>
               <tbody>  
<?php
for($i=1;$i<=mysql_num_rows($sql);$i++)
{ $rs=mysql_fetch_assoc($sql);
?>			   
              <tr>
                <td><a href="deleteorder.php?deleteid=<?php echo $rs["id"]?>">移除</a></td>
<td><?php echo $rs["brand"]?></td>
<td><?php echo $rs["productname"]?></td>
<td><?php echo $rs["number"]?></td>
              </tr>
			   <?php }?>        
       </tbody>
              
            </table>
			 <div data-role="fieldcontain">
                    <select class="form-control" name="buy" id="buy">
           <option value="租賃">租賃</option>    
           <option value="購買">購買</option>
               </select>
               </div>
                   <div data-role="fieldcontain">
             <label for="bei">備註</label>
             <textarea class="ckeditor" rows="5" id="eg" name="eg" placeholder="e.g.用途"></textarea>
              </div>
             <div data-role="fieldcontain">
             <label for="uname">姓名</label>
             <input type="text" name="uname" id="uname"  value="<?php echo $uname ?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="cellphone">電話</label>
             <input type="text" name="cellphone" id="cellphone"  value="<?php echo $cellphone?>" />
              </div>
              <div data-role="fieldcontain">
             <label for="email">E-mail</label>
             <input type="text" name="email" id="email"  value="<?php echo $email ?>" />
              </div>
              <button type="submit" class="btn btn-primary" data-theme="b">送出</button>
            </form>
        </div>
	</div>
   </div>	
  </div>
</div>
</div>


  </body>
</html>
