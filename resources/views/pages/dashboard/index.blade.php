
@auth

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>HRO | Panel</title>
		<link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- App css -->
        <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/css/responsive.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('plugins/switchery/switchery.min.css')}}">
        <script src="{{asset('assets/admin/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper" >

            <!-- Top Bar Start -->
            <div class="topbar" >

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span><span style="color:red">Baker Byansi</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="admin/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="admin/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
      
             @include('./pages/dashboard/includes/header');
        
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
    
     @include('./pages/dashboard/includes/leftSideBar');
    
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
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Baker</a>
                                        </li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                    <?php
                    //  if($_SESSION['id']=='1') { 
                         
                         ?>

    <!-- end row -->
{{-- 
    <div class="row">
<a href="manage-categories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>
<?php

// $query=mysqli_query($con,"select * from tblcategory where Is_Active=1");
// $countcat=mysqli_num_rows($query);
?>

                                        <h2><?php
                                        //  echo htmlentities($countcat);
                                         
                                         ?> <small></small></h2>
                                    
                                    </div>
                                </div>
                            </div></a><!-- end col -->
<a href="manage-subcategories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Listed Subcategories</p>
<?php 
// $query=mysqli_query($con,"select * from tblsubcategory where Is_Active=1");
// $countsubcat=mysqli_num_rows($query);
?>
                                        <h2><?php
                                        //  echo htmlentities($countsubcat);
                                         ?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>

     <a href="manage-posts.php">                       
        <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
<?php 
// $query=mysqli_query($con,"select * from tblposts where Is_Active=1");
// $countposts=mysqli_num_rows($query);
?>
                                        <h2><?php
                                        //  echo htmlentities($countposts);
                                         ?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>
                
                  
                        </div> --}}
                        <!-- end row -->
                        <?php
                    
                    // }else{ 
                        
                        ?>


    <!-- end row -->
{{-- 
    <div class="row">



     <a href="manage-posts.php">                       
        <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
<?php
// $owner=$_SESSION['id'];
// $query=mysqli_query($con,"select * from tblposts where Is_Active=1 and owner='$owner'");
// $countposts=mysqli_num_rows($query);
?>
                                        <h2><?php
                                        //  echo htmlentities($countposts);
                                         ?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>
                
                  
                        </div>
                        <!-- end row --> --}}

                            <?php 
                        // }
                          ?>


                    </div> <!-- container -->

                </div> <!-- content -->

 @include('./pages/dashboard/includes/footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/detect.js')}}"></script>
        <script src="{{asset('assets/admin/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/admin/js/waves.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

        <!-- Counter js  -->
        <script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
   

        <!--Morris Chart-->
		<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('assets/admin/pages/jquery.dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/admin/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.app.js')}}"></script>

    </body>
</html>
    

@endauth
