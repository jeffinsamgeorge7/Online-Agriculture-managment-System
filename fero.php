<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$id=$_GET['id'];
$qt=$_GET['qt'];
$d=date('Y-m-d');

$s="select * from fertiliser where ferid='$id'";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$qty1=$row['quantity'];
$am=$row['amount'];

$amt=$am*$qt;

if($qt>$qty1)
{
	echo "<script> alert('Enter valid Quantity');
	window.location='viewfer.php';</script>";
}
else
{
	$q="insert into ferorder(f_id,qty,amt,date,status,vid)values('$id',$qt,'$amt','$d','pending',$val)";
	$db->insertQuery($q);
	
	$q1=$qty1-$qt;
	$q2="update fertiliser set quantity='$q1' where ferid='$id'";
	$db->updateQuery($q2);
	$q5="update rform set status='ordered' where fid='$id'";
	$db->updateQuery($q5);
	
	echo "<script> alert('Successfully ordered.');
	window.location='myfert.php';</script>";
}

?>