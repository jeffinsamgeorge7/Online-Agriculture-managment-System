<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$empid=$_GET['emp_id'];
$nam=$_GET['name'];
$address=$_GET['address'];
$email=$_GET['email'];
$contno=$_GET['cntno'];
$password=$_GET['pass'];
$conpassword=$_GET['cpass'];
//$username=$_GET['username'];
if($password==$conpassword)
{
$q="insert into employee(emp_id,ename,eaddr,email,phno)
values('$empid','$nam','$address','$email','$contno')";
$db->insertQuery($q);
$q1="select max(e_id)as id from employee";
$rs1=$db->selectQuery($q1);
$rs=$db->selectData($q1);
$row=mysql_fetch_array($rs);
$r=$row['id'];

	
$s="insert into login(uid,uname,upass,cpass,utype)values($r,'$email','$password','$conpassword','emp')";
$db->insertQuery($s);
echo "<script> alert('Success'); window.location='addemp.php'; </script>";
}
else
{
	echo "<script> alert('password not matched'); window.location='addemp.php';</script>";
}
?>


