<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="/dashboard" class="logo"><span><span>HJO</span></span><i class="mdi mdi-layers"></i></a>
    <!-- Image logo -->
    <!--<a href="index.html" class="logo">-->
        <!--<span>-->
            <!--<img src="assets/images/logo.png" alt="" height="30">-->
        <!--</span>-->
        <!--<i>-->
            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
        <!--</i>-->
    <!--</a> -->
</div>

<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">

        <!-- Navbar-left -->
        <ul class="nav navbar-nav navbar-left">
            <li>
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
     
    
        </ul>

        <!-- Right(Notification) -->
        <ul class="nav navbar-nav navbar-right">
          

            <li class="dropdown user-box">
                <a href="" class="dropdown-toggle waves-effect user-link uppercase display-2" style="font-size:30px;  border-radius:70px" data-toggle="dropdown" aria-expanded="true">
                   {{auth()->user()->email[0]}}
                </a>

                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                    <li>
                        <h5>Hi, {{auth()->user()->email}}</h5>
                    </li>
              
                    <li><a href="{{route('forgotPassword')}}"><i class="ti-settings m-r-5"></i> Change Password</a></li>
           
                    <li><a href="{{route('logout')}}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                </ul>
            </li>

        </ul> <!-- end navbar-right -->

    </div><!-- end container -->
</div><!-- end navbar -->
</div>