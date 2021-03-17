<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];
if($t2==$t3)
{

$q="update login set upass='$t2',cpass='$t3' where uname='$t1'";
$db->updateQuery($q);
echo "<script> alert('Successfully Changed');window.location='login.php'; </script>";

}

else
{
	echo "<script> alert('Password not matched,try again.');window.location='cp.php'; </script>";

}
?>