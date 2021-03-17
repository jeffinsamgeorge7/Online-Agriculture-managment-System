<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body><?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['r1'];
$ph=$_GET['r6'];
$e=$_GET['r7'];
$q="update employee set phno='$ph',email='$e' where e_id='$id'";
$db->updateQuery($q);
//header('location:myprofile.php');
echo "<script> alert('Updated'); window.location:'myprofile.php'; </script>";
?>

</body>
</html>
