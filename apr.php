
<?php
include("DatabaseCon.php");
session_start();
$val=$_SESSION['uid'];
$id1=$_GET['id'];

//cat on cat.catcode=product.catcode inner join subcat on subcat.subcatcode=product.subcatcode inner join
$query="update complaint set status='read' where cmid='$id1'" ;

$db=new DatabaseCon;
$db->updateQuery($query);
echo "<script> alert('sucessfully updated');window.location='viewcom.php';</script>";
	 

?>
