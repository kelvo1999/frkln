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
   
    $title=$_POST['title'];
    $dimension=$_POST['dimension'];
    $orientation=$_POST['orientation'];
    $size=$_POST['size'];
    $artist=$_POST['artist'];
    $arttype=$_POST['arttype'];
    $artmed=$_POST['artmed'];
    $sprice=$_POST['sprice'];
    $description=$_POST['description'];
    $eid=$_GET['editid'];
    $query=mysqli_query($con, "update tblblogproduct set Title='$title',Dimension='$dimension',Orientation='$orientation',Size='$size',Artist='$artist',Type='$arttype',Material='$artmed',SellingPricing='$sprice',Description='$description' where ID='$eid'");
    if ($query) {
  
    echo "<script>alert('Piece has been updated.');</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
  }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Edit Blog Piece | Art Gallery Management System</title>
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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Add Blog Piece Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Blog Piece</li>
              <li><i class="fa fa-file-text-o"></i>Blog Piece Detail</li>
            </ol>
          </div>
        </div>
        <div class="row">      
          <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
            <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select tblblog.ID as atid,tblblog.Type as typename,tblblogmaterial.ID as amid,tblblogmaterial.Material as amname,tblblogproduct.ID as apid,artist.ID as arid,artist.Name,tblblogproduct.Title,tblblogproduct.Dimension,tblblogproduct.Orientation,tblblogproduct.Size,tblblogproduct.Artist,tblblogproduct.Type,tblblogproduct.Material,tblblogproduct.SellingPricing,tblblogproduct.Description,tblblogproduct.Image,tblblogproduct.Image1,tblblogproduct.Image2,tblblogproduct.Image3,tblblogproduct.Image4,tblblogproduct.RefNum,tblblogproduct.Type from tblblogproduct join tblblog on tblblog.ID=tblblogproduct.Type join tblblogmaterial on tblblogmaterial.ID=tblblogproduct.Material join artist on artist.ID=tblblogproduct.Artist where tblblogproduct.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Update Blog Piece Detail
              </header>
              <div class="panel-body">
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="title" name="title"  type="text" required="true" value="<?php  echo $row['Title'];?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Featured Image</label>
                    <div class="col-sm-10">
                     <img src="images/<?php echo $row['Image'];?>" width="200" height="150" value="<?php  echo $row['Image'];?>"><a href="changeimage.php?editid=<?php echo $row['apid'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

    <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Piece Image1</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['Image1'];?>" width="200" height="150" value="<?php  echo $row['Image1'];?>"><a href="changeimage1.php?editid=<?php echo $row['apid'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

  <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Piece Image2</label>
                    <div class="col-sm-10">
                       <img src="images/<?php echo $row['Image2'];?>" width="200" height="150" value="<?php  echo $row['Image2'];?>"><a href="changeimage2.php?editid=<?php echo $row['apid'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Piece Image3</label>
                    <div class="col-sm-10">
                       <img src="images/<?php echo $row['Image3'];?>" width="200" height="150" value="<?php  echo $row['Image3'];?>"><a href="changeimage3.php?editid=<?php echo $row['apid'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Piece Image4</label>
                    <div class="col-sm-10">
                      <img src="images/<?php echo $row['Image4'];?>" width="200" height="150" value="<?php  echo $row['Image4'];?>"><a href="changeimage4.php?editid=<?php echo $row['apid'];?>"> &nbsp; Edit Image</a>
                    </div>
                  </div>

<div class="form-group">
                    <label class="col-sm-2 control-label">Dimension</label>
                    <div class="col-sm-10">
                      <!-- <input class="form-control" id="dimension" name="dimension"  type="text" required="true" value=""> -->
                      <select class="form-control" id="dimension" name="dimension"  required="true">
                        <option value="">Choose Size</option>
                        <option value="<?php  echo $row['Dimension'];?>"><?php  echo $row['Dimension'];?></option>
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
                        <option value="<?php  echo $row['Orientation'];?>"><?php  echo $row['Orientation'];?></option>
                        <option value="Potrait">Potrait</option>
                        <option value="Landscape">Landscape</option>
                        
                      </select>
                    </div>
                  </div>
                   
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="size" name="size"  required="true">
                        <option value="<?php  echo $row['Size'];?>"><?php  echo $row['Size'];?></option>
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
                                <option value="<?php  echo $row['arid'];?>"><?php  echo $row['Name'];?></option>
                                <?php $query1=mysqli_query($con,"select * from designer");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>    
              <option value="<?php echo $row1['ID'];?>"><?php echo $row1['Name'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"> Type</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="arttype" id="arttype">
                                <option value="<?php  echo $row['atid'];?>"><?php  echo $row['Type'];?></option>
                                <?php $query2=mysqli_query($con,"select * from tblblog");
              while($row2=mysqli_fetch_array($query2))
              {
              ?>    
              <option value="<?php echo $row2['ID'];?>"><?php echo $row2['Type'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Genre</label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="artmed" id="artmed">
                                <option value="<?php  echo $row['amid'];?>"><?php  echo $row['Material'];?></option>
                                <?php $query3=mysqli_query($con,"select * from tblblogmaterial");
              while($row3=mysqli_fetch_array($query3))
              {
              ?>    
              <option value="<?php echo $row3['ID'];?>"><?php echo $row3['Material'];?></option>
                  <?php } ?> 
                            </select>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Selling Price</label>
                    <div class="col-sm-10">
                      <input class="form-control " id="sprice" type="text" name="sprice" required="true" value="<?php  echo $row['SellingPricing'];?>">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Blog Piece Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control " id="description" type="text" name="description" rows="12" cols="4" required="true"><?php  echo $row['Description'];?></textarea>
                    </div>
                  </div>
              </div>
            </section>
            
          </div>
          <?php } ?>
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