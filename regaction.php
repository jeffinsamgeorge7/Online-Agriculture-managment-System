<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
	if(isset($name))
	{
		if(!empty($name))
		{
			$location='uploads/';
			echo"file is".$name;
			if(move_uploaded_file($tmpname,$location.$name))
			{
//$s=$_GET["s"];
session_start();
$n=$_POST["n"];
$a=$_POST["a"];
$p=$_POST["p"];
$e=$_POST["e"];
$g=$_GET["g"];
//$m=$_GET["m"];
$an=$_POST["an"];
$up=$_POST["up"];
$cp=$_POST["cp"];
//$val=$_SESSION['uid'];
if($up==$cp)
{
$qry="insert into registration(name,address,phoneno,email,gender,adharno,image) values('$n','$a',$p,'$e','$g',$an,'$name')";
$db=new DatabaseCon;
$db->insertQuery($qry);

$query="select max(regid) as id from registration" ;
$d=new DatabaseCon;
$rst=$d->selectData($query);
$row=mysql_fetch_array($rst);
$uid=$row["id"];


$qry1="insert into login(uid,uname,upass,cpass,utype) values($uid,'$e','$up','$cp','user')";
$db=new DatabaseCon;
$db->insertQuery($qry1);

	echo "<script> alert('Successfully registered');window.location='login.php'; </script>";

}

else
{
	echo "<script> alert('Password not matched,try again.');window.location='register.php'; </script>";

}
			}
		}
	}
}
?>