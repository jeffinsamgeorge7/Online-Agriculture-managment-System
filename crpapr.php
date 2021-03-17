
<?php
include("DatabaseCon.php");
session_start();
$val=$_SESSION['uid'];
$id1=$_GET['id'];

//cat on cat.catcode=product.catcode inner join subcat on subcat.subcatcode=product.subcatcode inner join
$query="update sell set status='Accepted' where sid='$id1'" ;

$db=new DatabaseCon;
$db->updateQuery($query);
echo "<script> alert('sucessfully updated');window.location='cpreceived.php';</script>";
	 

?>
