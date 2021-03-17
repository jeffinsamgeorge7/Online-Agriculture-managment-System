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
              <div class="top-header-meta text-right">
                </div>
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
                  <li class="active"><a href="emphome.php">Home</a></li>
                  
                     
                      
                     
                 <!-- <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>-->
                  <li><a href="myprofile.php">Profile</a></li>
                   <li><a href="emver.php">Verification</a></li>
<li><a href="addnotification.php">Notifications</a></li>
<!--<li><a href="productview.php">View product</a></li>
<li><a href="stockview.php">View stock</a></li>-->
<li><a href="addpm.php">Practicing Method</a></li>

<!--<li><a href="paymentview.php">Paymentview</a></li>-->
<li><a href="time_view.php">Timing</a></li>


                  <!--<li><a href="adview.php">Ad</a></li>-->
                   <li><a href="logout.php">Logout</a></li>
                </ul>
                <!-- Search Icon -->
                
              <!-- Navbar End -->
            </div>
          </nav>


          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

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
  
  <h2><b><center> </center></b></h2><br>
  <br>
 <center><h1><b>VERIFICATION DETAILS</b></h1></center>

<br><br><br>
<table border="1" align="center">
<tr>
<th>&nbsp;&nbsp;&nbsp;Request Id&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Id&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Farmer Name&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;District&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Gender&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Phone No&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Taluk&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Village&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Block&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Land Holdingr&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Area for subsidy&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Survey No.&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Ration Card No.&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Crop&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Annual Income&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Land Type&nbsp;&nbsp;&nbsp;</th>
<th> &nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;</th>
<th> &nbsp;&nbsp;&nbsp;Employee&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</th></tr>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$val=$_SESSION['uid'];
$s="select * from employee where e_id='$val'";
$rs2=$db->selectData($s);
$row2=mysql_fetch_array($rs2);
$e=$row2['ename'];
$q="select * from rform where emp='$e'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
    <tr>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['rfid'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['fid'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['frn'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['fa'];?>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<?php echo $row['dis'];?>&nbsp;&nbsp;&nbsp;</td>
     <td>&nbsp;&nbsp;&nbsp;<?php echo $row['gen'];?>&nbsp;&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;&nbsp;<?php echo $row['em'];?>&nbsp;&nbsp;&nbsp;</td>
       <td>&nbsp;&nbsp;&nbsp;<?php echo $row['ph'];?>&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;<?php echo $row['taluk'];?>&nbsp;&nbsp;&nbsp;</td>
         <td>&nbsp;&nbsp;&nbsp;<?php echo $row['village'];?>&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;<?php echo $row['bl'];?>&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;<?php echo $row['lh'];?>&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;<?php echo $row['ars'];?>&nbsp;&nbsp;&nbsp;</td>
           <td>&nbsp;&nbsp;&nbsp;<?php echo $row['sn'];?>&nbsp;&nbsp;&nbsp;</td>
           <td>&nbsp;&nbsp;&nbsp;<?php echo $row['rcn'];?>&nbsp;&nbsp;&nbsp;</td>
           <td>&nbsp;&nbsp;&nbsp;<?php echo $row['cr'];?>&nbsp;&nbsp;&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;<?php echo $row['ain'];?>&nbsp;&nbsp;&nbsp;</td>
           <td>&nbsp;&nbsp;&nbsp;<?php echo $row['lt'];?>&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['date'];?>&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['emp'];?>&nbsp;&nbsp;&nbsp;</td>
             <td>&nbsp;&nbsp;&nbsp;<?php echo $row['status'];?>&nbsp;&nbsp;&nbsp;</td>
         
    <?php
	if($row['status']=="pending")
	{
		?>
    <td><a href="emapr.php?id=<?php echo $row['rfid'];?>">&nbsp;&nbsp;&nbsp;Approve</a></td>
     <td><a href="emrej.php?id=<?php echo $row['rfid'];?>">&nbsp;&nbsp;&nbsp;Reject</a></td>
    <?php } ?>
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

































































