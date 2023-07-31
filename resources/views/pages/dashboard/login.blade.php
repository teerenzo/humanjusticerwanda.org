<?php
//  session_start();
// //Database Configuration File
// include('includes/config.php');
// //error_reporting(0);
// if(isset($_POST['login']))
//   {
 
//     // Getting username/ email and password
//      $uname=$_POST['username'];
//     $password=$_POST['password'];
//     // Fetch data from database on the basis of username/email and password
// $sql =mysqli_query($con,"SELECT id,AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
//  $num=mysqli_fetch_array($sql);
// if($num>0)
// {
// $hashpassword=$num['AdminPassword']; // Hashed password fething from database
// //verifying Password
// if (password_verify($password, $hashpassword)) {
// $_SESSION['login']=$num['AdminUserName'];
// $_SESSION['id']=$num['id'];
//     echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
//   } else {
// echo "<script>alert('Wrong Password');</script>";
 
//   }
// }
// //if username or email not found in database
// else{
// echo "<script>alert('User not registered with us');</script>";
//   }
 
// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="News Portal.">
        <meta name="author" content="PHPGurukul">


        <!-- App title -->
        <title>HJO |  Panel</title>

        <!-- App css -->
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

        <script src="assets/admin/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.html" class="text-success">
                                            <span><h2 style='color:white'>Login</h2></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="{{ route('login') }}" method="post">
                                        @if (session('status'))
                                            {{session('status')}}
                                        @endif
                                        @csrf
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text"  name="email" value="{{old('username')}}" placeholder="Username or email" autocomplete="off">
                                            </div>
                                            <div class="col-xs-12">
                                                <p><b style="color: red">
                                                @error('username')
                                                    {{$message}}
                                                @enderror
                                                </b></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" value="{{old('password')}}" name="password"  placeholder="Password" autocomplete="off">
                                            </div>
                                            <div class="col-xs-12">
                                                <p><b style="color: red">
                                                @error('password')
                                                    {{$message}}
                                                @enderror
                                                </b></p>
                                            </div>
                                        </div>


                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-primary waves-effect waves-light" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                    

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

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

        <!-- App js -->
        <script src="assets/admin/js/jquery.core.js"></script>
        <script src="assets/admin/js/jquery.app.js"></script>

    </body>
</html>