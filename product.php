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
				$n1=$_POST['n1'];
				$price=$_POST['price'];
				$da=$_POST['da'];
				$va=$_POST['va'];
				$q1=$_POST['q1'];
				$qt=$_POST['qt'];
				$la=$_POST['la'];
				$ai=$_POST['ai'];
				$date=date_create($da);
				
				date_add($date,date_interval_create_from_date_string("$va days"));;
				$edate=date_format($date,"Y-m-d");
				
				if($q1>=$qt)
				{
				$q="insert into product(pn,price,date,edate,qty,a_qty,la,img,ai)
				values('$n1','$price','$da','$edate',$q1,$qt,'$la','$name','$ai')";
				$db->insertQuery($q);
				
				}
				
				
				
				else
				{
					echo "<script> alert('Enter valid quantity per user'); window.location:'addproducts.php';</script>";
				}
			//echo"file uploaded successfully";
				// header('location:addstudent.php');
			}
		}
	}
	}

	 header('location:addproducts.php');
	 
?>