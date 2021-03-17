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
$qt=$_GET['qual'];
$ed=$_GET['ed'];
$q="update stock set price='$pri',date='$date',qty='$qt',edate='$ed' where stoid='$id'";
$db->updateQuery($q);
header('location:addstock.php');
?>
</body>
</html>