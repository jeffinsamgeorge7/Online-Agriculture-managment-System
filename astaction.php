<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];

$d=date('Y-m-d');
$a1=$_GET['a1'];
$a2=$_GET['a2'];
$a3=$_GET['a3'];
$a4=$_GET['a4'];
$a5=$_GET['a5'];
$a6=$_GET['a6'];
$va=$_GET['va'];
$bl=$_GET['bl'];
$lh=$_GET['lh'];
$ars=$_GET['ars'];
$sn=$_GET['sn'];
$rc=$_GET['rc'];
//$cr=$_GET['cr'];
$ai=$_GET['ai'];
$lt=$_GET['lt'];
$n=$_GET['n'];
$a=$_GET['a'];

$q="insert into rform(fid,frn,fa,dis,gen,em,ph,taluk,village,bl,lh,ars,sn,rcn,cr,ain,lt,vid,date,status,emp) values($n,'$a','$a1','$a2','$a3','$a4',$a5,'$a6','$va','$bl','$lh','$ars','$sn','$rc','nil','$ai','$lt',$val,'$d','pending','nil')";
$db->insertQuery($q);
echo "<script> alert('Form submitted wait for the officer approval'); window.location='userhome.php'; </script>";
?>