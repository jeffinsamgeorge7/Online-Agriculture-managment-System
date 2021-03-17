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
              <div class="top-header-meta">
                <p>Welcome to <span>Farmie</span>, we hope you will enjoy our products and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <!--<div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
              </div>-->
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
                  <li class="active"><a href="farmerhome.php">Home</a></li>
                  
                     
                      
                     
                 <!-- <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>-->
                  <li><a href="ftips.php">Farming tips</a></li>
                  <li><a href="viewad.php">Sell Crop</a></li>
                  <li><a href="adresult.php">Supplier response</a></li>
                  <li><a href="fcom.php">Complaints</a></li>
                  <li><a href="profview.php">Profile</a></li>
                  
                  
                  
                  
                  <!--<li><a href="adview.php">Ad</a></li>-->
                   <li><a href="index.html">Logout</a></li>
                </ul>
                <!-- Search Icon -->
               <!-- <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- Cart Icon -->
                <!--<div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">2</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <!--<div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>-->
            <!-- Close Icon -->
            <!--<div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>-->
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
  <br>
  <div></div>
 
  <?php
  include("DatabaseCon.php");
  session_start();
$val=$_SESSION['uid'];

//if(!isset($_GET['tt'])){
$query="select * from register where rid='$val'" ;
/*}
else{
	$p=$_GET['tt'];
	if($p=="0to1") 
		$query="select * from product order by amt ASC" ;
	else if($p=="1to0")
		$query="select * from product order by amt DESC" ;
	else if($p=="1hr1")
		$query="select * from product order by amt DESC" ;
	else
	$query="select * from product where pname  like '%".$p."%' or vid in (select sid from shop where sname like '%".$p."%')" ;
}*/
$d=new DatabaseCon;
$rt=$d->selectQuery($query);
//if($rt==1){
$rst=$d->selectData($query);
?>
<div class="tt" align="center">
<table border="1" align="center">
<tr>
<th>Register Id</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>Gender</th><th></th><th></th>
</tr>
<?php
     
while($row=mysql_fetch_array($rst)){
				
				?>

             <tr><td><?php echo $row['rid'];?></td>
             <td><?php echo $row['name'];?></td>
             <td><?php echo $row['addr'];?></td>
             <td><?php echo $row['ph'];?></td>
             <td><?php echo $row['email'];?></td>
             <td><?php echo $row['gender'];?></td>
             <td><a href="delpro.php?id=<?php echo $row['rid'];?>">delete</a></td>
             <td><a href="updatepro.php?id=<?php echo $row['rid'];?>">update</a></td></tr>
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
  <!--<section class="farming-practice-area section-padding-100-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
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

































































