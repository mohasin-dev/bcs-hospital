@extends('frontend.layouts.app')

@section('title', 'Contact')

@section('content')
<section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Contact</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Contact</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== BEGIN Google Map SECTION ================-->
      <section id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="500" frameborder="0" style="border:0"></iframe>
      </section>
      <!--=========== END Google Map SECTION ================-->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
              <div class="contact-form">
                <div class="section-heading">
                  <h2>Contact Us</h2>
                  <div class="line"></div>
                </div>
                <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
                <form class="submitphoto_form">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                  <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                 <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
              <div class="contact-address">
                <div class="section-heading">
                  <h2>Contact Information</h2>
                  <div class="line"></div>
                </div>
                 <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                <address class="contact-info">
                    <p><span class="fa fa-home"></span>120/3-C, Darus Salam (Technical More) Mirpur, Dhaka<br><span style="margin-left: 20px;"></span> -1216, Bangladesh.</p>
                    <p><span class="fa fa-phone"></span>+8801763678870</p>
                    <p><span class="fa fa-phone"></span>+88029025504</p>
                    <p class="mail"><span class="fa fa-envelope"></span>bangladeshcancersociety@gmail.com</p>
                    <p><span class="fa fa-envelope"></span>info@bangladeshcancersociety.org</p>
                </address>
                <h3>Social Media</h3>
                <div class="social-share">
                 <ul>
                   <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                   <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                   <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                   <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                   <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                 </ul>
               </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
