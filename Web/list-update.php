<?php
session_start();
  //�ˬd cookie ���� passed �ܼƬO�_���� TRUE
  $passed = $_COOKIE["passed"];
	
  /* �p�G cookie ���� passed �ܼƤ����� TRUE�A
     ��ܩ|���n�J�����A�N�ϥΪ̾ɦV���� index.htm */
  if ($passed != "TRUE")
  {
    header("location:pyshome.php");
    exit();
  }
	
  /* �p�G cookie ���� passed �ܼƵ��� TRUE�A
     ��ܤw�g�n�J�����A�h���o�ϥΪ̸�� */
  else
  {
    require_once("dbtools.inc.php");
	
    //���o modify.php �����������
    $id = $_SESSION["id2"];
    $date = $_POST["date"];
    $cname2 = $_POST["cname2"];
    $usen = $_POST["usen"];
    $detail = $_POST["detail"];
    $eg = $_POST["eg"];
    $state = $_POST["state"];
		
    //�إ߸�Ƴs��
    $link = create_connection();
				
    //���� UPDATE ���z���ӧ�s�ϥΪ̸��
    $sql = "UPDATE price SET date = '$date', cname2 = '$cname2', 
            usen = '$usen', detail = '$detail', eg = '$eg', 
            state = '$state' WHERE id = $id";
    $result = execute_sql("mydatabase", $sql, $link);
		
    //������Ƴs��
    mysql_close($link);
	}
?>	
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>修改詢價單成功</title>
	
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
  <center>
      <img src="images/cc3.png"><br><br>
      <button type="button" class="btn btn-primary" onclick="location.href='list-mang.php'">回詢價單管理</button> 
    </center>        
  </body>
</html>