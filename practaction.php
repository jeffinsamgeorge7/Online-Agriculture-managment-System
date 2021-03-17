<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
 
  $farm=$_GET['n'];
  $date=$_GET['d'];
  $sea=$_GET['s'];
  $fer=$_GET['f'];
  $meth=$_GET['m'];
  $des=$_GET['de'];
  $q="insert into pract(ftype,date,season,fertilizer,method,des)values('$farm','$date','$sea','$fer','$meth','$des')";
  $db->insertQuery($q);
  header('location:addpm.php');
  ?>
</body>
</html>