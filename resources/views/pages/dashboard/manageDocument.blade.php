

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                                    <h4 class="page-title">Manage Documents </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage Documents  
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
                         
                                <div class="row">
    <div class="col-sm-6 m-10">
        <input type="text" id="searchInput" class="form-control" placeholder="type to search">
    </div>
</div>
<br>
                                    <div class="table-responsive">
<table class="table table-colored table-centered table-inverse m-0">
<thead>
<tr>
                                           
<th>Owner</th>
<th>Owner Phone </th>
<th>Owner Id </th>
<th>Description</th>
<th>Document</th>
<th>Action</th>
</tr>
</thead>
<tbody>

 @foreach($documents as $data)
 <tr>
 <td>{{$data->owner}}</td>
    <td>

    {{$data->owner_phone}}

      </td> 

      <td>

{{$data->owner_id}}

  </td> 


    <td>   <?php
        echo  (substr($data->document_description,0));
        ?>
</td>
    <td>

    <a href="../documents/{{$data->document_name}}" target="_blank" rel="noopener noreferrer">  
    {{$data->document_name}}</a>  </td>

    
    <td><a href="{{route('downloadDocument',$data->document_name)}}" ><i class="fa fa-download" style="color: #29b6f6;"></i></a> 
        &nbsp;<a href="{{route('deleteDocument',$data->id)}}" onclick="return confirm('Do you reaaly want to delete this document?')"> <i class="fa fa-times" style="color: #f05050"></i></a> </td>
 
   
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

             // Function to filter the table rows based on search input
    function filterTableRows() {
        var searchText = $('#searchInput').val().toLowerCase();

        $('tbody tr').each(function () {
            var rowText = $(this).text().toLowerCase();
            var showRow = rowText.includes(searchText);
            $(this).toggle(showRow);
        });
    }

    // Listen for changes in the search input
    $('#searchInput').on('keyup', filterTableRows);


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