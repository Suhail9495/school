<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{ URL::asset('usersimages/favicon.png') }}" type="image/x-icon">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{URL::asset('users/css/fontawesome.min.css')}}">
  <!-- flaticon -->
  <link rel="stylesheet" href="{{URL::asset('users/assets/css/flaticon.css')}}">
  <!-- bootstrap -->
  <link rel="stylesheet" href="{{URL::asset('users/css/bootstrap.min.css')}}">
  <!-- animate css -->
  <link rel="stylesheet" href="{{URL::asset('users/css/animate.min.css')}}">
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{URL::asset('users/css/owl.carousel.min.css')}}">
  <!-- main style css -->
  <link rel="stylesheet" href="{{URL::asset('users/css/style.css')}}">
  <!-- responsive css -->
  <link rel="stylesheet" href="{{URL::asset('users/css/responsive.css')}}">
  <style>
border: ;{
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
  
    <!-- preloader start -->
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- preloader end -->

  <!--  header-section start  -->
    <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 col-md-8">
            <ul class="header-company-contact">
              <li><i class="fa fa-phone"></i>3322 1762 , 5535 7882, 30055749</li>
              <li><i class="fa fa-envelope"></i> school@gmail.com</li>
            </ul>
          </div>
        
        </div>
      </div>
    </div><!-- header-top end -->
    <div class="header-bottom">
      <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="site-logo site-title"  href="/"><img style="width: 109px;height: 94px" src="{{URL::asset('users/images/logo.pn')}}" alt="logo of school"></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              {{-- <ul class="navbar-nav main-menu ml-auto">
                <li class=""><a href="/">Home</a>
                  
                </li>
                <li><a href="/#about">About</a>
                
                </li>
             
                 <li><a href="/#ins">Instructors</a>
                
                </li>

                <li><a href="/gallery1">Gallery</a>
                
                </li>
             
                <li><a href="/contact">Contact us</a></li>                    
              </ul>
 --}}
                 

     {{--          <form class="example" action="/search" method="post" style="margin:auto;max-width:300px">
                @csrf
                                         @if(Session::has('Warning'))
<p class="alert alert-danger">{{ Session::get('Warning') }}</p>
@endif

  <input type="text" required="" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>

</form> --}}
            
            </div>
          </nav>
      </div>
    </div>
  </header>
  <!--  header-section end  -->
   @yield('content')

<br>

  <!-- fooetr-section start -->
  <footer class="footer-section">
    <div class="footer-top">

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-sm-left text-center">
              <center><span class="copy-right-text">© 2020 <a href="#">School name</a> All Rights Reserved.By <a href="https://risbuzz.com/">Risbuzz</a></span></center>
            </div>
        
        </div>
      </div>
    </div><!-- footer-bottom end -->
  </footer>

  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket" aria-hidden="true"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- jquery library js -->
  <script src="{{URL::asset('users/js/jquery-3.3.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{URL::asset('users/js/bootstrap.min.js')}}"></script>
  <!-- owl carousel js -->
  <script src="{{URL::asset('users/js/owl.carousel.min.js')}}"></script>
  <!-- lightcase js -->
  <script src="{{URL::asset('users/js/lightcase.js')}}"></script>
  <!-- jquery waypoints js -->
  <script src="{{URL::asset('users/js/jquery.waypoints.min.js')}}"></script>
  <!-- countup js -->
  <script src="{{URL::asset('users/js/jquery.countup.min.js')}}"></script>
  <!-- main js -->
  <script src="{{URL::asset('users/js/main.js')}}"></script>
</body>


</html>