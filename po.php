<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$id=$_GET['id'];
$qt=$_GET['qt'];
$d=date('Y-m-d');

$s="select * from product where proid='$id'";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$qty1=$row['qty'];
$am=$row['price'];

$amt=$am*$qt;

if($qt>$qty1)
{
	echo "<script> alert('Enter valid Quantity');
	window.location='viewproduct.php';</script>";
}
else
{
	$q="insert into orders(pcode,qty,amt,date,status,vid)values('$id',$qt,'$amt','$d','pending',$val)";
	$db->insertQuery($q);
	
	$q1=$qty1-$qt;
	$q2="update product set qty='$q1' where proid='$id'";
	$db->updateQuery($q2);
	$q5="update rform set status='ordered' where fid='$id'";
	$db->updateQuery($q5);
	
	echo "<script> alert('Successfully ordered.');
	window.location='myproducts.php';</script>";
}

?>