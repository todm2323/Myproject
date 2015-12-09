<?php
  session_start();
  
  $passed = $_COOKIE{"passed"};
	
  
  if ($passed != "TRUE")
  {
    header("location:pyshome.php");
    exit();
  }
		
  else
  {
    require_once("dbtools.inc.php");
		
    $id2 = $_GET["id"];
		
    $link = create_connection();
				
    $sql = "SELECT * FROM price Where id = $id2";
    $result = execute_sql("mydatabase", $sql, $link);
		
    $row = mysql_fetch_assoc($result);
?>
<html>
  <head>
    <title>è©¢åƒ¹å–®ç®¡ç†</title>
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
				<a href="product.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="productlist.php"><img class="img-responsive" src="images/list.png" height="120%" > </a>
				</div>	
				<div class="col-md-3">
				<a href="myadmin.php"><img class="img-responsive" src="images/me.png" height="120%" > </a>
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
    <p align="center"><img src="images/bb99.png"></p>
    <div class="container">
      <form action="list-update.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
         <td colspan="2" bgcolor="#6666FF" align="center">  
            <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
          <td class="col-sm-3" align="right" > <label for="inputdate" class="control-label">*日期:</label></td>
          <td><div class="col-sm-4">
          <input type="text" class="form-control" placeholder="date" name="date" value="<?php echo $row{"date"} ?>">
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
           <td align="right" > <label for="inputcname2" class="control-label">*公司名稱:</label></td>
	<td><div class="col-sm-4">
          <input type="text" class="form-control" placeholder="cname2" name="cname2" value="<?php echo $row{"cname2"} ?>">
         </div>
         </td> 
        </tr>
		
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputusen" class="control-label">*用途</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="usen" name="usen" value="<?php echo $row{"usen"} ?>">
         </div>
         </td>
        </tr>
		
 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputdetail" class="control-label">*詳細資料</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="detail" name="detail" value="<?php echo $row{"detail"} ?>">
         </div>
         </td>
        </tr>
		
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputeg" class="control-label">*備註</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="eg" name="eg" value="<?php echo $row{"eg"} ?>">
         </div>
         </td>
        </tr>
		
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputstate" class="control-label">*狀態</label></td>
	<td><div class="col-sm-4">
    <select class="form-control" name="state" id="state">
      <option value="未處理">未處理</option>
    <option value="已回復">已回復</option>
  </select>
         </div>
         </td>
        </tr>

		
        <tr bgcolor="#FFFFFF"> 
        <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">送出</button> 
	<button type="reset" class="btn btn-default">重新填寫</button> 
	<button type="button" class="btn btn-primary" onclick="location.href='list-mang.php'">返回</button> 
          </td>
        </tr>
		
      </table>
    </form>
	<div class="container">
  </body>
</html>
<?php
    //ÄÀ©ñ¸ê·½¤ÎÃö³¬¸ê®Æ³s±µ
    mysql_free_result($result);
    mysql_close($link);
	$_SESSION["id2"]=$id2;
  }
?>