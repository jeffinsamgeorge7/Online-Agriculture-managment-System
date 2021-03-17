<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body><?php
include("DatabaseCon.php");
$db=new DatabaseCon;

                
  $cat=$_POST['t2'];
  $n2=$_POST['n'];
  $qua=$_POST['qual'];

  $amount=$_POST['price'];
  $da=$_POST['da'];
  
  
  $va=$_POST['va'];
  
				    $ty=$_POST['ty'];
				   $date=date_create($da);
				
					date_add($date,date_interval_create_from_date_string("$va days"));
				$edate=date_format($date,"Y-m-d");
				
				
  
  
  $q="insert into fertiliser(category,name,quantity,edate,amount,date,type)values('$cat','$n2',$qua,'$edate','$amount','$da','$ty')";
  $db->insertQuery($q);
  header('location:addfertiliser.php');
  ?>
</body>
</html>