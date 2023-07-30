
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>HJO</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="{{asset('plugins/summernote/summernote.css')}}" rel="stylesheet" />

<!-- Select2 -->
<link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Jquery filer css -->
<link href="{{asset('plugins/jquery.filer/css/jquery.filer.css')}}" rel="stylesheet" />
<link href="{{asset('plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" rel="stylesheet" />

<!-- App css -->
<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/core.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/menu.css" rel="stylesheet" type="text/css" />
<link href="assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../ZZz{{asset('plugins/switchery/switchery.min.css">
<script src="assets/admin/js/modernizr.min.js"></script>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="admin/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

          
            <!-- Top Bar Start -->
            @include('pages/dashboard/includes/header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('pages/dashboard/includes/leftSideBar')
            <!-- Left Sidebar End -


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
                                    <h4 class="page-title">Manage Articles </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage Articles  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
<table class="table table-colored table-centered table-inverse m-0">
<thead>
<tr>
                                           
<th>Image</th>
<th>Title</th>

<th>Action</th>
</tr>
</thead>
<tbody>

<?php
// if($_SESSION['id']!='1'){
//     $owner=$_SESSION['id'];
//     $query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostTitle as title,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.owner='$owner' ");
// }else{
//     $query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostTitle as title,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 ");
// }

// $rowcount=mysqli_num_rows($query);
// if($rowcount==0)
// {
?>
{{-- <tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr> --}}
<?php 
// } else {
// while($row=mysqli_fetch_array($query))
// {
?>
 @foreach($testimonies as $data)
 <tr>
    <td>
        <img src="{{ url('images/'.$data->image) }}"
      style="height: 100px; width: 150px;">
      </td> 
    <td>{{$data->testimony}}</td>

    
    <td><a href="edit-post.php?pid={{$data->id}}"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
        &nbsp;<a href="manage-posts.php?pid={{$data->id}}&&action=del" onclick="return confirm('Do you reaaly want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
 
   
 </tr>
 @endforeach
 <tr>

 </tr>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



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
        <script src="assets/admin/js/jquery.min.js"></script>
        <script src="assets/admin/js/bootstrap.min.js"></script>
        <script src="assets/admin/js/detect.js"></script>
        <script src="assets/admin/js/fastclick.js"></script>
        <script src="assets/admin/js/jquery.blockUI.js"></script>
        <script src="assets/admin/js/waves.js"></script>
        <script src="assets/admin/js/jquery.slimscroll.js"></script>
        <script src="assets/admin/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

        <!--Summernote js-->
        <script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>
        <!-- Select 2 -->
        <script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
        <!-- Jquery filer js -->
        <script src="{{asset('plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>

        <!-- page specific js -->
        <script src="{{asset('assets/admin/pages/jquery.blog-add.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/admin/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.app.js')}}"></script>

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
  <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

        <!--Summernote js-->
        <script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>

    


    </body>
</html>
