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
                   <li class="active"><a href="profile.php">Profile</a></li>
                  
                     
                      
                     
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
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      
      <!-- Single Welcome Slides -->
     
    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
 
  <!-- ##### Services Area Start ##### -->
  
  <!-- ##### Services Area End ##### -->

  <!-- ##### Our Products Area Start ##### -->
  <section class="our-products-area section-padding-100" align="center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>Featured Products</p>
            <h2><span>Our Product</span> Are Highest Quality</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <center><div class="row" align="center">

<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from stock where stoid='$id'";
$rs=$db->selectData($q);
while($row=mysqli_fetch_array($rs))
{
	?>
        <!-- Single Product Area -->
        <!--<div class="col-12 col-sm-6 col-lg-3" align="center">
          
            <!-- Product Thumbnail -->
            <!--<div class="product-thumbnail" align="center">
              <!--<img src="img/bg-img/p1.jpg" alt="">-->
          
              <!-- Product Tags -->
           
              <!-- Product Meta Data -->
              
            </div>
            <div class="ghj" align="center">
            <form action="sto.php">
            <!-- Product Description -->
             <?php echo "<img src='uploads/".$row['img']."' width='250px' height='250px'";?><br>
              <h6><b><a href="#" class="product-title"><?php echo $row['name'];?></a></b></h6>
               <h6><b><a href="#" class="product-title"><?php echo $row['category'];?></a></b></h6>
                 
              <h6 class="price">Rs.&nbsp;<?php echo $row['price'];?>/-</h6>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <?php 
			  if($row['qty']==0)
			  {
				  echo "<font color='#FF0000'>No stock</font>";
			  }
			  else
			  {
				  ?>
                  
              <?php echo $row['qty'];?> &nbsp;&nbsp;&nbsp;Quantities are available.
             
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              <form action="sto.php">
              <input type="hidden" name="id" value="<?php echo $row['stoid'];?>">
              Required Quantity:<input type="text" name="qt" required>
              <br>
              <div class="abc" >
             <input type="submit"class="btn btn-success"value="Order"><br></form>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </div>
          </div>
        </div><?php } 
}?>

        <!-- Single Product Area -->
        
      </div></center>
    </div>
  </section>
  <!-- ##### Our Products Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
  
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