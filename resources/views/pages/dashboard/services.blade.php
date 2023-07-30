
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
        <title>HRO</title>

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
<link rel="stylesheet" href="../ZZz{{asset('plugins/switchery/switchery.min.css')}}">
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
                                           
<th>User</th>
<th>Service Name</th>
<th>Description</th>
<th>Document</th>
@if(auth()->user()->role == 'admin')
<th>Action</th>
@else
<th>Status</th>
@endif
</tr>
</thead>
<tbody>

 @foreach($services as $data)
 <tr>
 <td>{{$data->user->name}}</td>
    <td>

    {{$data->service_type}}

      </td> 


    <td>   <?php
        echo  (substr($data->description,0));
        ?>
</td>
    <td>

    <a href="document/{{$data->document}}" target="_blank" rel="noopener noreferrer">  
    {{$data->document}}</a>  </td>
    <td class="flex " style="display:flex; flex-direction:column">
        <div>
    @if($data->status == 'pending')
    <span class="label label-warning">Pending</span>
    @elseif($data->status == 'accepted')
    <span class="label label-success">Accepted</span>
    @else
    <span class="label label-danger">Rejected</span>
        @endif
        </div>
        <div>
            
  
    @if(auth()->user()->role == 'admin')
  <a href="{{route('acceptService',$data->id)}}" onclick="return confirm('Do you reaaly want to accept this case ?')"><i class="fa fa-check" style="color: #29b6f6;"></i></a> 
        &nbsp;<a href="{{route('rejectService',$data->id)}}" onclick="return confirm('Do you reaaly want to reject this case?')"> <i class="fa fa-times" style="color: #f05050"></i></a> 
        @endif
        </div>
    
    </td>
  

 

 
   
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
