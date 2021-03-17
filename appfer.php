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
  
  <h2><b><center>Application Form</center></b></h2><br>
  <br>
  <form action="afaction.php"  onSubmit="return check();">
  <?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from fertiliser where ferid='$id'";
$rs=$db->selectData($q);
$row=mysqli_fetch_array($rs);
	?>
<table align="center">
<tr>
<td><input type="hidden" name="n" value="<?php echo $row['ferid'];?>"></td>
</tr>
<tr>

<td>
Name Of Farmer:
</td>
<td><input type="text" name="a" id="a" required class="btn btn-success" />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Address:
</td>
<td><input type="text" name="a1"class="btn btn-success"id="a2" required />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
District:
</td>
<td><input type="text" name="a2" id="a2" required class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Gender:
</td>
<td>Male<input type="radio" name="a3"class="btn btn-success"id="a3"  value="male"/>&nbsp;
Female<input type="radio" name="a3"class="btn btn-success"id="a3"  value="female"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Email:
</td>
<td><input type="email" name="a4"class="btn btn-success"id="a4" required />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Contact No.:
</td>
<td><input type="text" name="a5"class="btn btn-success"id="a5" maxlength="12" required />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Taluk:
</td>
<td><input type="text" name="a6" id="a6" required class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Village:
</td>
<td><input type="text" name="va" id="va" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Block:
</td>
<td><input type="text" name="bl" id="b1" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>

<tr>
<td>
Actual Land Holding(In hectar(ha)):
</td>
<td><input type="text" name="lh" id="lh" required class="btn btn-success" />
</td>
</tr>
<tr><td>&nbsp;</td></tr>


<tr>
<td>
Area/No for subsidy:
</td>
<td><input type="text" name="ars" id="ars" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Survey No.:
</td>
<td><input type="text" name="sn" id="sn" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>



<tr>
<td>
Ration Card No:
</td>
<td><input type="text" name="rc" id="rc" maxlength="8" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Crop:
</td>
<td><input type="text" name="cr" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Land Type:
</td>
<td><select name="lt" class="btn btn-success"/>
<option>Owned</option>
<option>Leased</option>
<option>Share Cropper</option></td>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Annual Income:
</td>
<td><input type="text" name="ai"id="ai" maxlength="10" class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<!--<tr>
<td>
Image:
</td>
<td><input type="file" name="file"class="btn btn-success"  required />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr><td><u>Conditions</u></td></tr>

<tr><td>&nbsp;</td></tr>
<tr>
<td>
Maximum Allowable Quantity(per user):
</td>
<td><input type="number" name="qt" id="qt" maxlength="5" minlength="1" required class="btn btn-success" />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Land/Acre:
</td>
<td><input type="text" name="la" id="la"  required class="btn btn-success" />
</td>
</tr><tr><td>&nbsp;</td></tr>-->

<tr><td>&nbsp;</td></tr>
<center><tr><td><input type="submit" value="Submit" name="submit" class="btn btn-success"></td></tr></center>

</table>
</form>
  
  
  </form>
  
  <br><br><br>
  
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
<script type="text/javascript">
var letters=/^[a-z A-Z]+$/;
var numbers=/^[0-9]+$/;
var num=/^[0-9.]+$/;
function check()
{
	if(!document.getElementById("n1").value.match(letters))
	{
		alert("please input alphabets only,enter name");
		return false;
	}
	else if(!document.getElementById("q1").value.match(numbers))
	{
		alert("please input numbers only,enter Quantity");
		return false;
	}
	else if(document.getElementById("q1").value.length<1)
	{
		alert("please input  digits only,enter quantity");
		return false;
	}
	else if(!document.getElementById("qt").value.match(numbers))
	{
		alert("please input numbers only,enter Quantity per user");
		return false;
	}
	else if(document.getElementById("qt").value.length<1)
	{
		alert("please input  digits only,enter quantity per user");
		return false;
	}
	else if(!document.getElementById("la").value.match(num))
	{
		alert("please input valid character only,enter acre");
		return false;
	}
	else if(document.getElementById("la").value.length<1)
	{
		alert("please input valid value only,enter acre");
		return false;
	}
	
	else
	{
		return true;
	}
}

</script>

</html>

































































