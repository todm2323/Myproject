<?php
error_reporting(0);
session_start();
require_once("dbtools.inc.php");
$link = create_connection();
$id = $_SESSION["id"];
$result = execute_sql("mydatabase", $sql, $link);
$sql=mysql_query("SELECT * FROM maintain Where uid = $id");
$sql2="SELECT * FROM tbl_user Where id = $id";
$result2 = execute_sql("mydatabase", $sql2, $link);
    
    $row = mysql_fetch_assoc($result2);
//$uname=mysql_result($result2, 0, "uname");
//$cellphone=mysql_result($result2, 0, "cellphone");
//$email=mysql_result($result2, 0, "email");
?>
<html>
  <head>
    <title>預約維修</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <!--JavaScript-->
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
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd',yearRange:"-50:+50",defaultDate:(new Date(new Date().getFullYear()-30+"/01/01")-new Date())/(1000*60*60*24),
maxDate:new Date(),changeMonth: true,
    changeYear: true,});
	$("#ui-datepicker-div").css('font-size','0.9em')
  });
  </script>
<!--CSS-->
    <script type="text/javascript">

        function check_data() {
            if (document.myForm.uname.value.length == 0) {
                alert("請輸入「姓名」");
                return false;
            }
            if (document.myForm.cname.value.length == 0) {
                alert("請輸入「公司名稱」");
                return false;
            }
            if (document.myForm.phone.value.length == 0) {
                alert("請輸入「聯絡電話」");
                return false;
            }
            if (document.myForm.address.value.length == 0) {
                alert("請輸入「地址」");
                return false;
            }
            if (document.myForm.pid.value.length == 0) {
                alert("請輸入「車型」");
                return false;
            }
            if (document.myForm.content.value.length == 0) {
                alert("請輸入「內容」");
                return false;
            }
            
            
            
            
             
            myForm.submit();
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
	<body>
  </head>
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
    <p align="center"><img src="images/kkaa.png"></p>
	<div class="container">
    <form action="add_fix.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
          <td colspan="2" bgcolor="#6666FF" align="center"> 
            <font color="#FFFFFF">請填入下列資料 (有標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
        <tr > 
          <td class="col-sm-3" align="right" > <label for="inputuname" class="control-label">*姓名：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="name" name="uname" value="<?php echo $row{"uname"} ?>">
         </div>
          
         </td>
         </tr>
		 
         <tr > 
          <td align="right" > <label for="inputcname" class="control-label">*公司名稱：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="CompanyName" name="cname" value="<?php echo $row{"cname"} ?>"> 
         </div>
		
         </td>
        </tr>
		
			<tr > 
          <td align="right" > <label for="inputphone" class="control-label">*聯絡電話：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Companyphone" name="phone" value="<?php echo $row{"phone"} ?>">
         </div>
         </td>
        </tr>
		
		 <tr > 
          <td align="right" > <label for="inputaddress" class="control-label">*地址：</label></td>
          <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $row{"address"} ?>">
         </div>
         </td>
        </tr>
		
	<tr > 
          <td align="right" > <label for="inputpid" class="control-label">*車型：</label></td>
          <td><div class="col-sm-8">
         <input type="text" class="form-control" placeholder="pid" name="pid">
         </div>
         </td>
        </tr>

       <tr > 
          <td align="right" > <label for="inputcontent" class="control-label">*損壞情形：</label></td>
          <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="content" name="content">
         </div>
         </td>
        </tr>

        
        <tr > 
          <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">送出</button> 
	       <button type="reset" class="btn btn-default">重新填寫</button> 
		   <button type="button" class="btn btn-primary" onclick="location.href='pysmain.php'">返回</button> 
            
          </td>
        </tr>
      </table>
    </form>
	</div>
  </body>
</html>
