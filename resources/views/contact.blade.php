@extends('layouts.users')
@section('title','Contact')
@section('content')
  <!-- single-page-banner start -->
  <section class="single-page-banner">
    <div class="single-banner-content-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-banner-content">{{-- 
              <h2 class="single-banner-title">Contact us</h2> --}}
              <ul class="page-list">
                  {{-- <li><a href="/">Home</a></li> --}}
                  <center><h2 style="color: white">Registration</h2></center>
                  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- single-page-banner end  -->

  <!-- contact-section strat -->
  <section class="contact-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6">
          <div class="contact-form-area">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

           @if(Session::has('status'))
<p class="alert alert-info">{{ Session::get('status') }}</p>
@endif
            <h2 class="contact-form-title">Regiter Your Seet</h2>
            <p>Online Admission  Registration Form 2020-2021</p>
            
            <a href="" type="submit" title="">
             <input type="submit" value="Brochure"></a>
            <form action="/register1" method="get" class="contact-from">
              {{csrf_field()}}
              <div class="frm-group">
                <h6>Name of Student</h6>
                <input type="text" name="sname" required="" id="contact-name" placeholder="Full Name">
              </div>

              <div class="frm-group">
                <h6>Name of Father</h6>
                <input type="text" name="fname" required="" id="contact-name" placeholder="Full Name">
              </div>

            
              <div class="frm-group">
                <h6>Address</h6>
                <textarea name="address" required="" id="contact-message" placeholder="address"></textarea>
              </div>
              <div class="frm-group">
                <h6>Contact Number</h6>
                <input type="number" required="" name="no" id="contact-name" placeholder="Mobile Number">
              </div>

            <div class="frm-group">
                <h6>Date Of Birth</h6>
                <input type="date" required="" name="birth" id="contact-name" placeholder="Date of Birth">
              </div>

           <div class="frm-group">
                <h6>Adhaar  Number</h6>
                <input type="number" required="" name="adhar" id="contact-name" placeholder="Adhar Number">
              </div>
              <div class="frm-group">
                <h6>Admission for Which Class</h6>
                <input type="number" required="" name="class" id="contact-name" placeholder="Classes">
              </div>
              <div class="frm-group">
                <h6>Admission for Which Medium</h6>
                <input type="text" required="" name="med" id="contact-name" placeholder="">
              </div>

              <div class="frm-group">
                <input type="submit" value="submit now">
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-address-block">
            <span>Our Office</span>
            <h4 class="contact-address-title">Contact Info</h4>
            {{-- <p>There are many variations of passages of an Lorem Ipsum available but the majority have suffered alteration.</p> --}}
            <ul class="address-items-list">
              <li class="address-single-item">
                <div class="address-icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <div class="address-content">
                  <h5>Find Us</h5>
                  <p>Calicut Kerala</p>
                </div>
              </li><!-- address-single-item end -->
              <li class="address-single-item">
                <div class="address-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="address-content">
                  <h5>Call Us</h5>
                  <p>3322 1762 , 5535 7882, 300557490</p>
                </div>
              </li><!-- address-single-item end -->
              <li class="address-single-item">
                <div class="address-icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <div class="address-content">
                  <h5>Mail Us</h5>
                  <p>school@gmail.com</p>
                </div>
              </li><!-- address-single-item end -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

  <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d38595.1535816854!2d75.80638104384315!3d11.26352368093135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d11.2648192!2d75.80057599999999!4m5!1s0x3ba6591e3c33ce5d%3A0xb9d4b2c79532e85d!2srisbuzz!3m2!1d11.2654277!2d75.7871182!5e0!3m2!1sen!2sin!4v1558086469364!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  

  
@endsection