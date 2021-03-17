<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();

$c1=$_GET['c'];
//$c2=$_GET['c2'];
$c3=$_GET['c3'];

$val=$_SESSION['uid'];
$d=date("j M,Y");

$q="insert into complaint(date,com,vid,status) values('$d','$c1',$val,'unread')";
$db->insertQuery($q);
	 header('location:scom.php');
?>

