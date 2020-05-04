<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>@yield('title')</title>          
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="{{ asset('asset/admin/favicon.ico') }}" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('asset/admin/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->   

        <!-- BOOSTRAP --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- sweet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- data table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

         <!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        @yield('head')                                 
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ asset('asset/admin/assets/images/users/avatar.jpg') }}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('asset/admin/assets/images/users/avatar.jpg') }}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Administrator</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                            <!-- <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div> -->
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                   
                  
                    <li class="xn-title">Data</li>
                      
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                          
                            <li><a href="{{ url('/bidang') }}"><span class="fa fa-download"></span>Bidang</a></li> 
                            <li><a href="asdasd"><span class="fa fa-sort-alpha-desc"></span>Contact Person</a><li>                           
                        </ul>
                    </li>
                                   
                                    
                  
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <!-- <li class="xn-search">
                        <fom role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>    -->
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                 
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <!-- <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul> -->
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <!-- <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">     
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3"> -->
                            
                            <!-- START WIDGET CLOCK -->
                            <!-- <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             -->
                                <!-- <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                             -->
                            <!-- </div>                         -->
                            <!-- END WIDGET CLOCK -->
                            
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- END WIDGETS -->                    
                    
                    @yield('konten')
                    
                 
                    
                    <!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{ asset('asset/admin/audio/alert.mp3') }}" preload="auto"></audio>
        <audio id="audio-fail" src="{{ asset('asset/admin/audio/fail.mp3') }}" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
    
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <!-- <script type='text/javascript' src="{{ asset('asset/admin/js/plugins/icheck/icheck.min.js') }}"></script>         -->
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/morris/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/morris/morris.min.js') }}"></script>       
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/rickshaw/d3.v3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('asset/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('asset/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
        <script type='text/javascript' src="{{ asset('asset/admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>                
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/owl/owl.carousel.min.js') }}"></script>                 
        
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ asset('asset/admin/js/settings.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('asset/admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('asset/admin/js/actions.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('asset/admin/js/demo_dashboard.js') }}"></script>
        <!-- END TEMPLATE -->

       
<!-- data table -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- END SCRIPTS -->         
    @yield('script')
    </body>
    
</html>