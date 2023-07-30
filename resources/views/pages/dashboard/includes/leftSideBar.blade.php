<div class="left side-menu" style="background:black">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<!-- <li class="menu-title">Navigation</li> -->

                            <li class="has_sub">
                                <a href="/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>

                           <?php // if($_SESSION['login']=='admin' && $_SESSION['id']=='1'){ ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Testimony </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                        
                                    <li><a href="{{('/testimonies')}}">Manage Testimonies</a></li>

                                
                          
                                    <li><a href="{{('/addTestimony')}}">Add Testimony</a></li>
                       
                                
                                </ul>
                            </li>
 
                                        
                        <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Services </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                @if(auth()->user()->role == 'admin')

                                    <li><a href="{{('/services')}}">Requested Services</a></li>
                                    @else
                                    <li><a href="{{('/services/request')}}">Request Service</a></li>
                                    <li><a href="{{('/services')}}">Requested Services</a></li>

                                    @endif
                                </ul>
                            </li>  
                            @if(auth()->user()->role == 'admin')

                            <li class="has_sub">

                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Documents</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{('/documents/add')}}">Add Document</a></li>
                                    <li><a href="{{route('documents')}}">Manage Documents</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Comments</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{('/comments')}}">Comments</a></li>
            
                                </ul>
                            </li>
                            @endif
     
                             <?php
                       //   } ?>
                           

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> codeit.rwanda@gmail.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>