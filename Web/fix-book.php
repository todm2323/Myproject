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
    $sql = "SELECT * FROM maintain Where id = $id2";
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
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd',yearRange:"-1:+1",defaultDate:(new Date(new Date().getFullYear()))/(1000*60*60*24),
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
    <p align="center"><img src="images/aass.png"></p>
    <div class="container">
      <form action="res-book.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
         <td colspan="2" bgcolor="#6666FF" align="center">  
            <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*日期：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="date" name="date" value="<?php echo $row{"date"} ?>">
         </div>
         </td>
        </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*公司名稱：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="cname" name="cname" value="<?php echo $row{"cname"} ?>">
         </div>
         </td>
        </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*聯絡人：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="uname" name="uname" value="<?php echo $row{"uname"} ?>">
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*電話：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="phone" name="phone" value="<?php echo $row{"phone"} ?>">
         </div>
         </td>
        </tr>
		
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*地址：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="address" name="address" value="<?php echo $row{"address"} ?>">
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*機型：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="pid" name="pid" value="<?php echo $row{"pid"} ?>">
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*損壞情形：</label></td>
	 <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="content" name="content" value="<?php echo $row{"content"} ?>">
         </div>
         </td>
        </tr>
		
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*狀態：</label></td>
	 <td><div class="col-sm-10">
    <select class="form-control" name="state" id="state">
      <option value="待維修">待維修</option>
    <option value="維修中">維修中</option>
    <option value="已維修">已維修</option>
  </select>
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*維修日期：</label></td>
	 <td><div class="col-sm-10">
         <input type="text" id="datepicker" class="form-control" placeholder="fixdate" name="fixdate" value="<?php echo $row{"fixdate"} ?>">
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*維修人員：</label></td>
	 <td><div class="col-sm-10">
     <select class="form-control" name="fixuname" id="fixuname">

    <?php 
    $sql2="SELECT name FROM employee";
    $result2 = execute_sql("mydatabase", $sql2, $link);
        while ($ro = mysql_fetch_array($result2)) {
    echo "<option value='" . $ro['name'] . "'>" . $ro['name'] . "</option>";
}
    ?>
    </select>
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
        <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">修改資料</button> 
	<button type="reset" class="btn btn-default">重新填寫</button> 
	<button type="button" class="btn btn-primary" onclick="location.href='booking-management.php'">返回</button> 
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