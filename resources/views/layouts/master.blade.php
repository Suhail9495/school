<!DOCTYPE html>
<html>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 04:43:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>School</title>
    <!-- Favicon-->
    <link rel="icon" href="{{URL::asset('newad/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{URL::asset('newad/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{URL::asset('newad/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{URL::asset('newad/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{URL::asset('newad/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{URL::asset('newad/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{URL::asset('newad/css/themes/all-themes.css')}}" rel="stylesheet" />

      <!-- JQuery DataTable Css -->
    <!-- <link href="{{URL::asset('newad/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet"> -->

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
   
    <div class="overlay"></div>
   
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="">School</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            
                            <span class="label-count"></span>
                        </a>
                    
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            
                            <span class="label-count"></span>
                        </a>
                        
                                
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{URL::asset('newad/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                 
                    <h3>{{$email = Auth::user()->name}}</h3>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
               
               
              

                <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <img src="https://img.icons8.com/material/24/000000/edit-user-male.png">
                            <span>Registration</span>
                        </a>
                         <ul class="ml-menu">
                                        <li>
                                        <a target="_blank" href="/">Registration</a>
                                    </li>
                                    <li>
                                        <a href="/students">Classes</a>
                                    </li>
                                  
                                   
                                </ul>
                       
                            </li>


                 
                       {{--  <a href="javascript:void(0);" class="menu-toggle">
                             <i class="material-icons">no_encryption</i>

                            <span>Password</span>
                        </a>
                        <ul class="ml-menu">
                         
                                    <li>
                                        <a href="{{url('changePassword')}}">Change Password</a>
                                    </li>
                                    
                                </ul> --}}
                            </li>
                            

                             <li>
                                
                                  <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                    </li>
                      
                        </ul>
                    </li>
                 
            
                
                    
                  
                
            
              
                
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a target="_blank" href="https:\\www.risbuzz.com">Risbuzz</a>.
                </div>
                <div class="version">
                    <!-- <b>Version: </b> 1.0.5 -->
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>



            <div class="row clearfix">
                <!-- Task Info -->
               @yield('content')
          <!-- #END# Task Info -->
                <!-- Browser Usage -->
               
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{URL::asset('newad/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{URL::asset('newad/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{URL::asset('newad/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{URL::asset('newad/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{URL::asset('newad/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{URL::asset('newad/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{URL::asset('newad/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{URL::asset('newad/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{URL::asset('newad/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{URL::asset('newad/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('newad/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('newad/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('newad/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('newad/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{URL::asset('newad/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{URL::asset('newad/js/admin.js')}}"></script>
    <script src="{{URL::asset('newad/js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{URL::asset('newad/js/demo.js')}}"></script>
   
</body>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 04:43:59 GMT -->
</html>
