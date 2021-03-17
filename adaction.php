<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();

$c1=$_GET['c1'];
//$c2=$_GET['c2'];
$c3=$_GET['c3'];

$val=$_SESSION['uid'];

$q="insert into ad(crname,pic,qty,vid) values('$c1','Nil','$c3',$val)";
$db->insertQuery($q);
	 header('location:file_insert.php');
?>