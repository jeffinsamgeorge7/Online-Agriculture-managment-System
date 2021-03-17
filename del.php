<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();

$c=$_GET['id'];
//$c2=$_GET['c2'];
//$tn=$_GET['tn'];

$val=$_SESSION['uid'];
$d=date("d-M-y");

$q="delete from tips where tip='$c'"; 
$db->insertQuery($q);
	 header('location:addftips.php');
?>

