<html>
  <head>
    <title>新增預約紀錄</title>
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

        function check_data() {
            if (document.myForm.cname.value.length == 0) {
                alert("請輸入「公司名稱」");
                return false;
            }
            if (document.myForm.uname.value.length == 0) {
                alert("請輸入「聯絡人姓名」");
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
                alert("請輸入「損壞情形」");
                return false;
            }
            if (document.myForm.state.value.length == 0) {
                alert("請輸入「維修狀況」");
                return false;
            }
            else{myForm.submit();}
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
	<p align="center"><img src="images/qaz.png"></p>
	<div class="container">
    <form action="refix.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
          <td colspan="2" bgcolor="#6666FF" align="center"> 
            <font color="#FFFFFF">請填入下列資料 (有標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
                </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*公司名稱：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Companyname" name="cname" >
         </div>
         </td>
        </tr>
		 
		 <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputruname" class="control-label">*聯絡人：</label></td>
	<td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Username" name="uname" >
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*電話：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Phone" name="phone" >
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
        <td align="right" > <label for="inputphone" class="control-label">*地址：</label></td>
        <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Address" name="address" >
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*機型：</label></td>
	 <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Pid" name="pid" >
         </div>
         </td>
        </tr>
		
        <tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*損壞情形：</label></td>
	 <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Content" name="content" >
         </div>
         </td>
        </tr>
		
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*維修狀況：</label></td>
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
         <input type="text" id="datepicker" class="form-control" placeholder="Fixdate" name="fixdate" >
         </div>
         </td>
        </tr>
		
		<tr bgcolor="#FFFFFF"> 
         <td align="right" > <label for="inputaddress" class="control-label">*維修人員：</label></td>
	 <td><div class="col-sm-10">
         <select class="form-control" name="fixuname" id="fixuname">

    <?php 
    require_once("dbtools.inc.php");
     $link = create_connection();
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
		
      
		
        <tr > 
          <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">送出</button> 
	<button type="reset" class="btn btn-default">重新填寫</button> 
            <button type="button" class="btn btn-primary" onclick="location.href='booking-management.php'">返回</button> 
          </td>
        </tr>
      </table>
    </form>
	</div>
  </body>
</html>