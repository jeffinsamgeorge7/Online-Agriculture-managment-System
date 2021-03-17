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
$pri=$_GET['price'];
$date=$_GET['date'];
$edate=$_GET['edate'];
$ai=$_GET['ai'];
//$img=$_GET['img'];
$q="update product set price='$pri',date='$date',ai='$ai' where proid='$id'";
$db->updateQuery($q);
header('location:addproducts.php');
?>
</body>
</html>