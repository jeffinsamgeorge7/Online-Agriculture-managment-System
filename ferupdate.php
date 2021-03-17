<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['r'];
$amn=$_GET['amount'];
$date=$_GET['date'];
$ed=$_GET['ed'];
$q="update fertiliser set amount='$amn',date='$date',edate='$ed' where ferid='$id'";
$db->updateQuery($q);
header('location:addfertiliser.php');
?>
</body>
</html>