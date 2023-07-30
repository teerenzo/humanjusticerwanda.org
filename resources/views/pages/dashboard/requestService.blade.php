

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
        <title>HRO | add </title>

        <!-- Summernote css -->
        <link href="{{asset('plugins/summernote/summernote.css')}}" rel="stylesheet" />

        <!-- Select2 -->
        <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="{{asset('plugins/jquery.filer/css/jquery.filer.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" rel="stylesheet" />

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
                                    <h4 class="page-title">Request Service</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#">Request Service</a>
                                        </li>
                                        <!-- <li class="active">
                                            Add Article
                                        </li> -->
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
<form name="{{route('requestService')}}" method="post" enctype="multipart/form-data">
@if (session('status'))
                                            {{session('status')}}
                                        @endif

    @csrf



<div class="form-group m-b-20">
    
<label for="exampleInputEmail1">Service</label>
  <select name="service" id="" class="form-control">
    <option value="">
    Assisting defiled and raped persons
    </option>

    <option >
    Orienting cases
    </option>


    <option >
    Counselling based on laws
    </option>


    <option >
    Advocacy for persons with disabilities
    </option>

    <option>
    Mediating people in society using ADR (Alternative dispute Resolution)
    </option>



  </select>


</div>



    


<div class="row">
<div class="col-sm-12">
 <div class="card-box">
 <div class="col-xs-12">
                                                <p><b style="color: red">
                                                @error('service')
                                                    {{$message}}
                                                @enderror
                                                </b></p>
                                            </div>
<h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
<textarea class="w-48 summernote"  id="summernote" name="description" required></textarea>
</div>
<div class="col-xs-12">
                                                <p><b style="color: red">
                                                @error('description')
                                                    {{$message}}
                                                @enderror
                                                </b></p>
                                            </div>
</div>
</div>


<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Supporting Document (option)</b></h4>
<input type="file" class="form-control" id="postimage" name="file"  required>
</div>
<div class="col-xs-12">
                                                <p><b style="color: red">
                                                @error('file')
                                                    {{$message}}
                                                @enderror
                                                </b></p>
                                            </div>
</div>
</div>


<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save.</button>
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
            <!-- =============a================================================= -->


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
