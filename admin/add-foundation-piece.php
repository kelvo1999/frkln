<?php
session_start();
error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include('includes/dbconnection.php');
if (strlen($_SESSION['agmsaid']==0)) {
  header('location:logout.php');
  }
  else{

if(isset($_POST['submit']))
  {
    $aid=$_SESSION['agmsaid'];
    $title=$_POST['title'];
    $dimension=$_POST['dimension'];
    $orientation=$_POST['orientation'];
    $size=$_POST['size'];
    $artist=$_POST['artist'];
    $arttype=$_POST['arttype'];
    $artmed=$_POST['artmed'];
    $sprice=$_POST['sprice'];
    $description=$_POST['description'];
    $refno=mt_rand(100000000, 999999999);
//featured Image
$pic=$_FILES["images"]["name"];
$extension = substr($pic,strlen($pic)-4,strlen($pic));
//Image 1
$pic1=$_FILES["image1"]["name"];
$extension1 = substr($pic1,strlen($pic1)-4,strlen($pic1));
//Image 2
$pic2=$_FILES["image2"]["name"];
$extension2 = substr($pic2,strlen($pic2)-4,strlen($pic2));
//Image 3
$pic3=$_FILES["image3"]["name"];
$extension3 = substr($pic3,strlen($pic3)-4,strlen($pic3));
//Image 4
$pic4=$_FILES["image4"]["name"];
$extension4 = substr($pic4,strlen($pic4)-4,strlen($pic4));

// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
//if(!in_array($extension1,$allowed_extensions))
//{
//echo "<script>alert('Image 1 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
//if(!in_array($extension2,$allowed_extensions))
//{
//echo "<script>alert('Image 2 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
//if(!in_array($extension3,$allowed_extensions))
//{
//echo "<script>alert('Image 3 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
//if(!in_array($extension4,$allowed_extensions))
//{
//echo "<script>alert('Image 4 has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
else
{
//rename art images
$pic=md5($pic).time().$extension;
//$pic1=md5($pic1).time().$extension1;
//$pic2=md5($pic2).time().$extension2;
//$pic3=md5($pic3).time().$extension3;
//$pic4=md5($pic4).time().$extension4;
     move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$pic);
     //move_uploaded_file($_FILES["image1"]["tmp_name"],"images/".$pic1);
     //move_uploaded_file($_FILES["image2"]["tmp_name"],"images/".$pic2);
     //move_uploaded_file($_FILES["image3"]["tmp_name"],"images/".$pic3);
     //move_uploaded_file($_FILES["image4"]["tmp_name"],"images/".$pic4);
//     $query=mysqli_query($con, "insert into tblfashionproduct(Title,Dimension,Orientation,Size,Designer,Type,ArtMedium,SellingPricing,Description,Image,Image1,Image2,Image3,Image4,RefNum) value('$title','$dimension','$orientation','$size','$artist','$arttype','$artmed','$sprice','$description','$pic','$pic1','$pic2','$pic3','$pic4','$refno')");
//     if ($query) {
// echo "<script>alert('Foundation Piece details has been submitted.');</script>";
// echo "<script>window.location.href ='manage-fashion-product.php'</script>";
//   }
//   else
//     {
//       echo "<script>alert('Something Went Wrong. Please try again.');</script>";
//     }
// $query = mysqli_query($con, "INSERT INTO tblblogproduct (Title, Dimension, Orientation, Size, Artist, Type, ArtMedium, SellingPricing, Description, Image, Image1, Image2, Image3, Image4, RefNum) VALUES ('$title', '$dimension', '$orientation', '$size', '$artist', '$arttype', '$artmed', '$sprice', '$description', '$pic', '$pic1', '$pic2', '$pic3', '$pic4', '$refno')");
$query = $con->prepare("INSERT INTO tblfoundationproduct (Title, Dimension, Orientation, Size, Artist, Type, ArtMedium, SellingPricing, Description, Image, Image1, Image2, Image3, Image4, RefNum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->bind_param("sssssssssssssss", $title, $dimension, $orientation, $size, $artist, $arttype, $artmed, $sprice, $description, $pic, $pic1, $pic2, $pic3, $pic4, $refno);
$query->execute();

if ($query) {
    echo "<script>alert('Your Piece has been submitted.');</script>";
    echo "<script>window.location.href ='manage-foundation-piece-product.php'</script>";
} else {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";
}


  }
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Add Foundation Piece | Art Gallery Management System</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body>
  <section id="container" class="">
    <!--header start-->
    <?php include_once('includes/header.php');?>
    <!--header end-->

    <!--sidebar start-->
   <?php include_once('includes/sidebar.php');?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content" style="color:#000">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Foundation Piece Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Foundation Piece</li>
              <li><i class="fa fa-file-text-o"></i>Foundation Piece Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">      
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Add Foundation Piece Detail
              </header>
              <div class="panel-body">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="title" name="title" placeholder="name of the item" type="text" required="true" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Featured Image</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="images" id="images" value="" required="true">
                    </div>
                  </div>

    <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Piece Image1</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image1" id="image1" value="">
                    </div>
                  </div>

  <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Piece Image2</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image2" id="image2" value="">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Piece Image3</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image3" id="image3" value="">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Piece Image4</label>
                    <div class="col-sm-10">
                       <input type="file" class="form-control" name="image4" id="image4" value="">
                    </div>
                  </div>

<div class="form-group">
                    <label class="col-sm-2 control-label">Dimension</label>
                    <div class="col-sm-10">
                      <!-- <input class="form-control" id="dimension" name="dimension"  type="text" required="true"> -->
                      <select class="form-control" id="dimension" name="dimension"  required="true">
                        <option value="">Choose Size</option>
                        <option value="haiku">Haiku (3 lines, 5-7-5 syllables)</option>
    <option value="tanka">Tanka (5 lines, 5-7-5-7-7 syllables)</option>
    <option value="limerick">Limerick (5 lines, AABBA rhyme scheme, humorous)</option>
    <option value="couplet">Couplet (Two rhyming lines)</option>
    <option value="epigram">Epigram (Short, witty, and satirical)</option>
    <option value="sonnet">Sonnet (14 lines, Shakespearean or Petrarchan)</option>
    <option value="ode">Ode (10+ lines per stanza, praises something/someone)</option>
    <option value="ballad">Ballad (Narrative poem with quatrains, ABAB or ABCB)</option>
    <option value="villanelle">Villanelle (19 lines, repeated refrains)</option>
    <option value="epic">Epic (Long, tells a heroic story)</option>
    <option value="narrative">Narrative Poetry (Long storytelling poems)</option>
    <option value="free_verse">Free Verse (No set length or rhyme)</option>
                      </select>                      
                    </div>
                    </div>
                  
 </div>
</section>
</div>
                  <div class="col-lg-6">
                        <section class="panel">
                     <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orientation</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="orientation" name="orientation"  required="true">
                        <option value="">Choose orientation</option>
                        <option value="Sad">Sad</option>
                        <option value="Happy">Happy</option>
                        <option value="Mixed">Mixed</option>
                        
                      </select>
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="size" name="size"  required="true">
                        <option value="">Choose Size</option>
                        <option value="haiku">Haiku (3 lines, 5-7-5 syllables)</option>
    <option value="tanka">Tanka (5 lines, 5-7-5-7-7 syllables)</option>
    <option value="limerick">Limerick (5 lines, AABBA rhyme scheme, humorous)</option>
    <option value="couplet">Couplet (Two rhyming lines)</option>
    <option value="epigram">Epigram (Short, witty, and satirical)</option>
    <option value="sonnet">Sonnet (14 lines, Shakespearean or Petrarchan)</option>
    <option value="ode">Ode (10+ lines per stanza, praises something/someone)</option>
    <option value="ballad">Ballad (Narrative poem with quatrains, ABAB or ABCB)</option>
    <option value="villanelle">Villanelle (19 lines, repeated refrains)</option>
    <option value="epic">Epic (Long, tells a heroic story)</option>
    <option value="narrative">Narrative Poetry (Long storytelling poems)</option>
    <option value="free_verse">Free Verse (No set length or rhyme)</option>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Artist</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="artist" id="artist">
                                <option value="">Choose an Artist</option>
                                <?php $query=mysqli_query($con,"select * from founder");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['ID'];?>"><?php echo $row['Name'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Type</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="arttype" id="arttype">
                                <option value="">Choose Foundation Type</option>
                                <?php $query=mysqli_query($con,"select * from tblfoundation");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['ID'];?>"><?php echo $row['Type'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Genre</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="artmed" id="artmed">
                                <option value="">Choose Genre</option>
                                <?php $query=mysqli_query($con,"select * from tblfoundationmaterial");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['ID'];?>"><?php echo $row['Material'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Selling Price</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="sprice" type="text" name="sprice" required="true">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Foundation Piece Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control " id="description" type="text" name="description" rows="12" cols="4" required="true"></textarea>
                    </div>
                  </div>
              </div>
            </section>
            
          </div>
               <p style="text-align: center;"> <button type="submit" name='submit' class="btn btn-primary">Submit</button></p>
              </form>
        </div>
      
      </section>
    </section>
 <?php include_once('includes/footer.php');?>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php  } ?>