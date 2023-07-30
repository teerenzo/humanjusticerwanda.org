<?php 
// session_start();
// include('includes/config.php');
// error_reporting(0);
// if(strlen($_SESSION['login'])==0)
//   { 
// header('location:index.php');
// }
// else{

// // For adding post  
// if(isset($_POST['submit']))
// {
// $posttitle=$_POST['posttitle'];
// $catid=$_POST['category'];
// $subcatid=$_POST['subcategory'];
// $postdetails=$_POST['postdescription'];
// $arr = explode(" ",$posttitle);
// $url=implode("-",$arr);
// $imgfile=$_FILES["postimage"]["name"];
// // get the image extension
// $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// // allowed extensions
// $allowed_extensions = array(".jpg","jpeg",".png",".gif");
// // Validation for allowed extensions .in_array() function searches an array for a specific value.
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {
// //rename the image file
// $imgnewfile=md5($imgfile).$extension;
// // Code for move image into directory
// move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

// $status=1;
// $owner=$_SESSION['id'];
// $query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active,PostImage,owner) values('$posttitle','$catid','$subcatid','$postdetails','$url','$status','$imgnewfile','$owner')");
// if($query)
// {
// $msg="Post successfully added ";
// }
// else{
// $error="Something went wrong . Please try again.";    
// } 

// }
// }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/images/favicon.ico">
        <!-- App title -->
        <title>HJO | Add Articles</title>

        <!-- Summernote css -->
        <link href="plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/core.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/components.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="admin/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="admin/js/modernizr.min.js"></script>
 <script>
function getSubCat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcategory.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
  }
  </script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
          @include('pages/dashboard/includes/header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('pages/dashboard/includes/leftSideBar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Article </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Article</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Article </a>
                                        </li>
                                        <li class="active">
                                            Add Article
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php //if($msg){ ?>
{{-- <div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div> --}}
<?php //} ?>

<!---Error Message--->
<?php //if($error){ ?>
{{-- <div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div> --}}
<?php //} ?>


</div>
</div>


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
<form name="{{route('addDocumentary')}}" method="post" enctype="multipart/form-data">
    @csrf
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Documentary Title</label>
<input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
</div>

<div class="form-group m-b-20">
    <label for="exampleInputEmail1">Documentary Link</label>
    <input type="text" class="form-control" id="posttitle" name="link" placeholder="Enter title" required>
    </div>
    




<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
<input type="file" class="form-control" id="postimage" name="postimage"  required>
</div>
</div>
</div>


<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
 <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           @include('pages/dashboard/includes/footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="admin/js/jquery.min.js"></script>
        <script src="admin/js/bootstrap.min.js"></script>
        <script src="admin/js/detect.js"></script>
        <script src="admin/js/fastclick.js"></script>
        <script src="admin/js/jquery.blockUI.js"></script>
        <script src="admin/js/waves.js"></script>
        <script src="admin/js/jquery.slimscroll.js"></script>
        <script src="admin/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="admin/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="admin/js/jquery.core.js"></script>
        <script src="admin/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>

    


    </body>
</html>
<?php //} ?>