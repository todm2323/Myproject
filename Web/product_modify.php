<?php
  session_start();
  
  $passed = $_COOKIE{"passed"};
	
  
  if ($passed != "TRUE")
  {
    header("location:pysmain.php");
    exit();
  }
		
  else
  {
    require_once("dbtools.inc.php");
		
     $id2 = $_GET["id"];
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM product Where id = $id2";
    $result = execute_sql("mydatabase", $sql, $link);
		
    $row = mysql_fetch_assoc($result);
?>
<html>
  <head>
    <title>修改產品資料</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <!--JavaScript-->
<link rel="stylesheet" href="css/bootstrap.css" />
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="jquery-bs-formalerts-0.1.3/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="jquery-bs-formalerts-0.1.3/css/docs.css" />
    <link rel="stylesheet" href="jquery-bs-formalerts-0.1.3/css/prettify.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="jquery-bs-formalerts-0.1.3/js/prettify.js"></script>
    <script src="jquery-bs-formalerts-0.1.3/js/jquery.bsFormAlerts.js"></script>

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
         function checkID(id) {
            tab = "ABCDEFGHJKLMNPQRSTUVWXYZIO"
            A1 = new Array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3);
            A2 = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5);
            Mx = new Array(9, 8, 7, 6, 5, 4, 3, 2, 1, 1);

            if (id.length != 10) return false;
            i = tab.indexOf(id.charAt(0));
            if (i == -1) return false;
            sum = A1[i] + A2[i] * 9;

            for (i = 1; i < 10; i++) {
                v = parseInt(id.charAt(i));
                if (isNaN(v)) return false;
                sum = sum + v * Mx[i];
            }
            if (sum % 10 != 0) return false;
            return true;
        } 

         function validateEmail(email) {
  reg = /^[^\s]+@[^\s]+\.[^\s]{2,3}$/;
  if (reg.test(email)) {
      return true;
  }else{
     return false;
  }
} 

      function check_data()
      {
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
  <body>
    <p align="center"><img src="images/reeproduct.png"></p>
    <div class="container">
      <form action="update-product.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
         <td colspan="2" bgcolor="#6666FF" align="center">  
            <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*編號：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control"readonly="readonly" placeholder="ID" name="id" value="<?php echo $row{"id"} ?>">
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*產品名稱：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Productname" name="productname" value="<?php echo $row{"productname"} ?>">
         </div>
         </td>
        </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*重量：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Weigh" name="weigh" value="<?php echo $row{"weigh"} ?>">
         </div>
         </td>
        </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*品牌：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Brand" name="brand" value="<?php echo $row{"brand"} ?>">
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*揚高：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Mast" name="mast" value="<?php echo $row{"mast"} ?>">
         </div>
         </td>
        </tr>
		
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*車號：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Number" name="number" value="<?php echo $row{"number"} ?>">
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*年份：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Year" name="year" value="<?php echo $row{"year"} ?>">
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*狀態：</label></td>
	 <td><div class="col-sm-10">
         <select class="form-control" name="state" id="state">
           <option value="場內">場內</option>    
           <option value="出租">出租</option>
           <option value="維修中">維修中</option>
               </select>
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">圖片：</label></td>
	 <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Picture" name="picture" value="<?php echo $row{"picture"} ?>">
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
        <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">修改資料</button> 
	<button type="reset" class="btn btn-default">重新填寫</button> 
	<button type="button" class="btn btn-primary" onclick="location.href='product-management.php'">返回</button> 
          </td>
        </tr>
		
      </table>
    </form>
	<div class="container">
  </body>
</html>
<?php
    //釋放資源及關閉資料連接
    mysql_free_result($result);
    mysql_close($link);
	$_SESSION["id2"]=$id2;
  }
?>