<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | Home</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
   <?php 
  session_start();
  if($_SESSION['uid']=="" || $_SESSION['uid']=='null')
  header('location:index.html');
  ?>
</head>

<body style="background-image:url(img/bg-img/214.jpg)">
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
   <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              
              <!-- Top Header Content -->
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu" style="background-color:#3C0">
      <div class="classy-nav-container breakpoint-off" style="background-color:#3C0">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler" style="background-color:#6C3">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                 <li class="active"><a href="userhome.php">Home</a></li>
                   <li><a href="profile.php">Profile</a></li>
                  
                     
                      
                     
                 <!-- <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>-->
                  <li><a href="myproducts.php">My Product</a></li>
<li><a href="mystock.php">My Stock</a></li>
<!--<li><a href="productview.php">View product</a></li>
<li><a href="stockview.php">View stock</a></li>-->
<li><a href="myfert.php">Fertilizers</a></li>

<!--<li><a href="paymentview.php">Paymentview</a></li>-->
<li><a href="timeview.php">Timing</a></li>
<li><a href="empview.php">Employee</a></li>

                  <!--<li><a href="adview.php">Ad</a></li>-->
                   <li><a href="logout.php">Logout</a></li>
                </ul>
                <!-- Search Icon -->
                
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
         
        </div>
      </div>
    </div>
  </header>  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <!--<div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      <!--<div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <p data-animation="fadeInUp" data-delay="400ms"></p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slides -->
      <!--<div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/7.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">The hearth of the farm is the true center of our universe.</h2>
                <p data-animation="fadeInDown" data-delay="400ms"></p>
                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  
  <h2><b><center>FERTILIZER DETAILS </center></b></h2><br>
  <br>

<br><br><br>
<table border="1" align="center">
<tr>
<th>&nbsp;&nbsp;&nbsp;Id&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Product name&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Request Id&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Amount&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;</th>

<th>&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</th>
</tr>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$val=$_SESSION['uid'];

$q="select * from  fertiliser inner join rform on fertiliser.ferid=rform.fid where vid='$val'";
$rs=$db->selectData($q);
$r=mysql_fetch_array($rs);
$vid=$r['vid'];
if($vid==$val)
{
while($row=mysql_fetch_array($rs))
{
	?>
    <tr>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['fid'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['rfid'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['amount'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['date'];?>&nbsp;&nbsp;&nbsp;</td>
   
     <td>&nbsp;&nbsp;&nbsp;<?php echo $row['status'];?>&nbsp;&nbsp;&nbsp;</td>
     <?php
	 if($row['status']=="verified")
	 {
		 ?>
         <td><a href="buyfer.php?id=<?php echo $row['ferid'];?>">&nbsp;&nbsp;&nbsp;<font color="#0033FF"><u>Order</u></font>&nbsp;&nbsp;&nbsp;</a></td>
    <?php
	 }
}
}
	 else
	 {
		 $q="select * from  fertiliser inner join ferorder on fertiliser.ferid=ferorder.f_id where vid='$val'";
$rs=$db->selectData($q);

while($row=mysql_fetch_array($rs))
{
	?>
    <tr>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['f_id'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['qty'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['amt'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['date'];?>&nbsp;&nbsp;&nbsp;</td>
   
     <td>&nbsp;&nbsp;&nbsp;<?php echo $row['status'];?>&nbsp;&nbsp;&nbsp;</td>
     <?php
	 if($row['status']=="verified")
	 {
		 ?>
         <td><a href="buyfer.php?id=<?php echo $row['ferid'];?>">&nbsp;&nbsp;&nbsp;<font color="#0033FF"><u>Order</u></font>&nbsp;&nbsp;&nbsp;</a></td>
    <?php
	 }
}
	 ?>
    </tr>
    <?php } ?>
    </table>
</div>
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
 
  <!-- ##### Services Area End ##### -->

  <!-- ##### Our Products Area Start ##### -->
  
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
 
            <!-- Section Heading -->
           
  <!-- ##### Newsletter Area End ##### -->

  <!-- ##### Farming Practice Area Start ##### -->
  <section class="farming-practice-area section-padding-100-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
        </div></div></div></section>
          <!-- Section Heading -->
         
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>

































































