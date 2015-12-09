<html>
  <head>
    <title>加入會員</title>
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

        function check_data() {
            if (document.myForm.username.value.length == 0) {
                alert("請輸入「帳號」");
                return false;
            }
            if (document.myForm.username.value.length > 10) {
                alert("「帳號」不可以超過 10 個字元");
                return false;
            }
            if (document.myForm.password.value.length == 0) {
                alert("請輸入「密碼」");
                return false;
            }
            if (document.myForm.password.value.length > 10) {
                alert("「密碼」不可以超過 10 個字元");
                return false;
            }
            
          
            if (document.myForm.uname.value.length == 0) {
                alert("您留下真實姓名");
                return false;
            }
            
             if (!validateEmail(document.myForm.email.value)) {
                alert("E-mail格式錯誤!");
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
  </head>
  <body>
<div class="row">
<div class="col-md-4"><a href="psyhome.php"><img class="img-responsive" src="images/brand.png"> </a></div>
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
				<a href="pyshome.php"><img class="img-responsive" src="images/home.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="pysknow.php"><img class="img-responsive" src="images/prokno.png" height="120%" > </a>
				</div>
				<div class="col-md-3">
				<a href="pysproduct.php"><img class="img-responsive" src="images/pintro.png" height="120%" > </a>
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
    <p align="center"><img src="join1.jpg"></p>
	<div class="container">
    <form action="addmember.php" method="post"  name="myForm">
      <table class="table table-bordered" align="center" >
        <tr> 
          <td colspan="2" bgcolor="#6666FF" align="center"> 
            <font color="#FFFFFF">請填入下列資料 (有標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
		
        <tr > 
          <td class="col-sm-3" align="right" > <label for="inputaccount" class="control-label">*帳號：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Account" name="username">
         </div>
         <label for="input" class="control-label"> (使用英文或數字，不得超過10字元)</label>
          
         </td>
         </tr>
		 
         <tr > 
          <td align="right" > <label for="inputpassword" class="control-label">*密碼：</label></td>
          <td><div class="col-sm-4">
         <input type="password" class="form-control" placeholder="Password" name="password"> 
         </div>
		<label for="input" class="control-label">(使用英文或數字)</label>
		
         </td>
        </tr>
		

        <tr > 
          <td align="right" > <label for="inputruname" class="control-label">*姓名：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Name" name="uname">
         </div>
         </td>
        </tr>
		  <tr > 
          <td align="right" > <label for="inputruname" class="control-label">*公司名稱：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="CompanyName" name="cname">
         </div>
         </td>
        </tr>
			<tr > 
          <td align="right" > <label for="inputphone" class="control-label">*公司電話：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Companyphone" name="phone">
         </div>
         </td>
        </tr>
		<tr > 
          <td align="right" > <label for="inputphone" class="control-label">*行動電話：</label></td>
          <td><div class="col-sm-4">
         <input type="text" class="form-control" placeholder="Cellphone" name="cellphone">
         </div>
         </td>
        </tr>
	<tr > 
          <td align="right" > <label for="inputemail" class="control-label">*E-mail：</label></td>
          <td><div class="col-sm-8">
         <input type="email" class="form-control" placeholder="E-mail" name="email">
         </div>
         </td>
        </tr>

       <tr > 
          <td align="right" > <label for="inputaddress" class="control-label">*地址：</label></td>
          <td><div class="col-sm-10">
         <input type="text" class="form-control" placeholder="Address" name="address">
         </div>
         </td>
        </tr>

        
        <tr > 
          <td align="center" colspan="2"> 
           <button type="button" class="btn btn-primary" id="myButton" onclick="check_data()">送出</button> 
	<button type="reset" class="btn btn-default">重新填寫</button> 
		    <button type="button" class="btn btn-primary" onclick="location.href='pyshome.php'">返回</button> 
            
          </td>
        </tr>
      </table>
    </form>
	</div>
  </body>
</html>