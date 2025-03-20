<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Art Gallery Management System | Fashion</title>
      
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
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <!--//price range-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
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
                  <span>/ </span>
               </li>
               <li>Fashion</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--show Now-->  
      <section class="contact py-lg-4">
         <div class="container-fluid py-lg-5">
            <h3 class="title text-center mb-lg-5"><h2 class="head" align="center"><?php echo $_GET['Type'];?></h2>
               <hr />
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                     <form action="search.php" method="post">
                        <input type="search" placeholder="Clothe name..." name="search" required="">
                        <input type="submit" name="submit">
                     </form>
                  </div>
							<!-- price range -->
				
							<!-- //price range -->
                  <!--preference -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Fashion Type</h3>
                     <ul>
                        <li>
                           <?php
                                    $ret=mysqli_query($con,"select * from tblfashion");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                           <a class="nav-link" href="fashion.php?cid=<?php  echo $row['ID'];?>&&fashionname=<?php  echo $row['Type'];?>"><span class="span"><?php  echo $row['Type'];?></span></a> <?php } ?>
                        </li>
                       
                     </ul>
                  </div>
                  <!-- // preference -->
            
               
               </div>
               <div class="left-ads-display col-lg-9">
                  <div class="row">
                  <?php
                  $cid=$_GET['cid'];
$ret=mysqli_query($con,"select tblfashion.ID as fashionid,tblfashion.Type as fashionname,tblfashionproduct.ID as fashid,tblfashionproduct.Title,tblfashionproduct.Image,tblfashionproduct.Type from tblfashionproduct join tblfashion on tblfashion.ID=tblfashionproduct.Type where tblfashionproduct.Type='$cid'");
$cnt=1;
$count=mysqli_num_rows($ret);
if($count>0){ 
while ($row=mysqli_fetch_array($ret)) {

?>
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="admin/images/<?php echo $row['Image'];?>" class="img-thumbnail" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="single-fashion.php?pid=<?php  echo $row['fashid'];?>" class="link-product-add-cart"> View Details</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4 >
                                             <a href="single-fashion.php?pid=<?php  echo $row['fashid'];?>" style="color:#000"><?php  echo $row['Title'];?></a>
                                          </h4>
                                          <div class="product_price">
                                             <h4>
                                             <button class="btn btn-success"><a href="art-enquiry.php?eid=<?php echo $row['fashid'];?>" style="color:#fff">Purchase</a></button></h4>
                                          </div>
                                       </div>
                                     
                                    </div>
                       
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div><?php } } else { ?>
<h3 align="center" style="color:red;">No Record Found</h3>
                     <?php } ?>
                
               
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //show Now-->
     <?php include_once('includes/footer.php');?>
    
    
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      
      <!-- //cart-js -->
     
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>
