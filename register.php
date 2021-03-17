<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-image:url(img/bg-img/214.jpg)">
  <!-- Preloader -->
  
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  
                     
                      
                     
                 <!-- <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>-->
                 
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <section class="famie-benefits-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Single Benefits Area -->
      

        <!-- Single Benefits Area -->
        
        <!-- Single Benefits Area -->
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
           <form action="regaction.php" enctype="multipart/form-data" method="post" style="color:black" onsubmit="return check();">
           <table align="center"  >
           <tr><th><h3><b>REGISTERATION DETAILS</b></h3></th></tr>
           <br>
           <tr>
           <td>Name :</td>
           <td><input type="text" name="n" id="n" required class="btn btn-success"></td></tr><br><tr><td>&nbsp;</td></tr>
           
           <tr><td>Address :</td>
           <td><input type="textarea rows="10" cols="10"" name="a"id="a" required class="btn btn-success"> </textarea></td></tr><tr><td>&nbsp;</td></tr>
            <tr>
           <td>Email(username) :</td>
           <td><input type="email" name="e" id="e" class="btn btn-success"required></td></tr><tr><td>&nbsp;</td></tr>
            <tr>
           <td>Contact Number :</td>
           <td><input type="text" name="p" id="p"class="btn btn-success" required maxlength="12" minlength="10"></td></tr><tr><td>&nbsp;</td></tr>
           <tr>
           <td>Gender :</td>
           <td>Male<input type="radio" name="g" id="g" value="male"class="btn btn-success" required></td>
           <td>Female<input type="radio"class="btn btn-success" name="g" id="g" value="female" required></td></tr><tr><td>&nbsp;</td></tr>
            <!--<tr>
            <tr><td>Mode :</td>
            <td><select name="m" id="m" class="btn btn-success">
            <option>--select--</option>
            <option>farmer</option>
            <option>supplier</option>
            </select></td></tr>-->
           <td>Aadhaar Number :</td>
           <td><input type="text" name="an" id="an" maxlength="12"minlength="12" required class="btn btn-success"></td></tr><tr><td>&nbsp;</td></tr>
           <tr><td>Image</td><td><input type="file" name="file"></td></tr><tr><td>&nbsp;</td></tr>
            <tr>
           <td>Password :</td>
           <td><input type="password" name="up" id="up" class="btn btn-success"required></td></tr><tr><td>&nbsp;</td></tr>
           <tr>
           <td>Confirm Password :</td>
           <td><input type="password" name="cp" id="cp" required class="btn btn-success"></td></tr>
           <br><tr><td>&nbsp;</td></tr>
           <tr><td align="center"><input type="submit" value="Register" class="btn btn-success" name="submit"></td></tr>
           </table>
           </form>
           
            
          </div>
        </div>

        <!-- Single Benefits Area -->
        
        <!-- Single Benefits Area -->
      
      </div>
    </div>
  </section>
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
 
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
	else if(!document.getElementById("p").value.match(numbers))
	{
		alert("please input numbers only,enter phone number");
		return false;
	}
	else if(document.getElementById("p").value.length<10)
	{
		alert("please input 10 digits only,enter phone number");
		return false;
	}
	else if(!document.getElementById("an").value.match(numbers))
	{
		alert("please input numbers only,enter aadhaar number");
		return false;
	}
	else if(document.getElementById("an").value.length<12)
	{
		alert("please input 12 digits only,enter aadhar number");
		return false;
	}
	else
	{
		return true;
	}
}

</script>
