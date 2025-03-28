<?php
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['send']))
  {
    $fullname=$_POST['fullname'];
    $size=$_POST['size'];
    $orders=$_POST['orders'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobnum'];
    $message=$_POST['message'];
    $enquirynumber = mt_rand(100000000, 999999999);
$eid=$_GET['eid'];
    $query1=mysqli_query($con,"insert into  tblfoundationenquiry(Artpdid,FullName,Size,Orders,Email,MobileNumber,Message,EnquiryNumber) value('$eid','$fullname','$size','$orders','$email','$mobilenumber','$message','$enquirynumber')");
        if ($query1) {
 echo '<script>alert("Your order was successfully placed. Your Order number is "+"'.$enquirynumber.'")</script>';
echo "<script>window.location.href='index.php'</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong.');</script>";  
    }

  
}

  ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>FRNKL FOUNDATION | Foundation</title>
      
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
   </head>
   <body>
      <?php include_once('includes/header.php');?>
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Foundation</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Purchase</h3>
            <div class="contact-list-grid">
               <form action="#" method="post">
                  <div class=" agile-wls-contact-mid">
                     <div class="form-group contact-forms">
                       <input class="form-control" type="text" name="fullname" required="true" placeholder="Name"/>
                     </div>
                     <div class="form-group contact-forms">
                     <select class="form-control" id="size" name="size"  required="true">
                        <option value="">Choose Size</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                        <option value="Large">XLarge</option>
                        <option value="Large">XXLarge</option>
                        <!-- <option value="Large">All Sizes</option> -->
                      </select>
                     </div>
                     <div class="form-group contact-forms">
                        <input class="form-control" type="number" name="orders" required="true" placeholder="Number of orders"/>
                     </div>
                     <div class="form-group contact-forms">
                        <input class="form-control" type="email" name="email" required="true" placeholder="Email"/>
                     </div>
                     <div class="form-group contact-forms">
                        <input class="form-control" type="text" name="mobnum" maxlength="10" pattern="[0-9]+" placeholder="Mobile Number" required="true"/>
                     </div>
                     <div class="form-group contact-forms">
                       <textarea class="form-control" name="message" placeholder="Message" required="true" rows="4"></textarea>
                     </div>
                     <button type="submit" class="btn btn-block sent-butnn" name="send">Purchase</button>
                  </div>
               </form>
            </div>
         </div>
         <!--//contact-map -->
      </section>
      <!--subscribe-address-->
    
 <?php include_once('includes/footer.php');?>
      
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>