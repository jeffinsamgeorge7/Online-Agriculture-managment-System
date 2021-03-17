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
                  <li class="active"><a href="adminhome.php">Home</a></li>
                  
                     
                      
                     
                 <!-- <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>-->
                  <!--<li><a href="addproducts.php">Product</a></li>
 -->                 
                  <li><a href="">Product</a>
                        <ul class="dropdown">
                          <li><a href="addproducts.php">Add Products</a></li>
                          <li><a href="prqst.php">Requests</a></li>
                        </ul>
                      </li>
                      
                      
                      
                      <li><a href="">Stock</a>
                        <ul class="dropdown">
                          <li><a href="addstock.php">Add Stock</a></li>
                          <li><a href="strqst.php">Requests</a></li>
                        </ul>
                      </li>
                  
                     <li><a href="">Fertiliser</a>
                        <ul class="dropdown">
                          <li><a href="addfertiliser.php">Add Fertiliser</a></li>
                          <li><a href="frrqst.php">Requests</a></li>
                        </ul>
                      </li>  
                      
                      
                      
                      
                  
<!--<li><a href="addstock.php">Stock</a></li>
<li><a href="productview.php">View product</a></li>
<li><a href="stockview.php">View stock</a></li>
<li><a href="addfertiliser.php">Fertilizers</a></li>-->
<li><a href="regview.php">Customers</a></li>
<!--<li><a href="paymentview.php">Paymentview</a></li>-->
<li><a href="time.php">Timing</a></li>
<li><a href="addemp.php">Employee</a></li>

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
  
  <h2><b><center>Add Stock</center></b></h2><br>
  <br>
 <form action="stock.php" method="post" enctype="multipart/form-data">
<table align="center">
<tr>
<td>Category:</td>
<td><select name="t1" required class="btn btn-success">
<option value="seeds">seeds</option>
<option value="crops">crops</option>
<option value="others">others</option>
</select>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Name:
</td>
<td><input type="text" name="n" id="n" required class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Quatity:
</td>
<td>
<input type="text" name="qual"id="qual" required  class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Price(per qty):
</td>
<td>
<input type="text" name="price"id="price" required class="btn btn-success" />
</td>
</tr><tr><td>&nbsp;</td></tr>

<tr>
<td>
Date:
</td>
<td><input type="text" name="da" value="<?php echo date('Y-m-d');?>" required class="btn btn-success" />
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Valid upto:
</td>
<td><input type="number" name="va" class="btn btn-success"required/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td>
Type:
</td>
<td><select name="ty" class="btn btn-success" required/>
<option>All</option>
<option>Subsidy</option></select>
</td>
</td>
</tr><tr><td>&nbsp;</td></tr>

<tr>
<td>
Image:
</td>
<td>
<input type="file" name="file"required class="btn btn-success"/>
</td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
<td align="center"><input type="submit" name="submit" value="Add" class="btn btn-success"  />
</td></tr>
</table>
</form>
  <br><br><br>
  
  <table border="1" align="center">
<tr>
<th>&nbsp;&nbsp;&nbsp;Id&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Category&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Quantity&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Expiry date&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Amount&nbsp;&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;</th>
</tr>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$q="select * from stock";
$rs=$db->selectData($q);
while($row=mysqil_fetch_array($rs))
{
	?>
    <tr>
    <td><?php echo $row['stoid'];?></td>
    <td><?php echo $row['category'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['qty'];?></td>
    <td><?php echo $row['edate'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><?php echo "<img src='uploads/".$row['img']."' width='50px' height='50px'";?></td>
      <td><a href="delstock.php?id=<?php echo $row['stoid'];?>">delete</a></td>
    <td><a href="upstock.php?id=<?php echo $row['stoid'];?>">update</a></td>
    </tr>
    <?php } ?>
    </table></div>
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
function check()
{
	if(!document.getElementById("n").value.match(letters))
	{
		alert("please input alphabets only,enter name");
		return false;
	}
	else if(!document.getElementById("quantity").value.match(numbers))
	{
		alert("please input numbers only,enter Quantity");
		return false;
	}
	else if(document.getElementById("quantity").value.length<1)
	{
		alert("please input  digits only,enter quantity");
		return false;
	}
	
	else
	{
		return true;
	}
}

</script>



</html>

































































