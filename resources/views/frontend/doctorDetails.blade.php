@extends('frontend.layouts.app')

@section('title', 'Our Doctors')

@section('content')
<section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Our Doctors</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Doctors</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== BEGAIN Doctors SECTION ================-->
<style>

</style>

       <section id="doct">
           <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>Dr. Md Rifat Khan</h2>
                    <div class="line"></div>
                </div>
            </div>
           <div class="row" style="margin-bottom: 30px;">
               <div class="col-md-6 col-md-offset-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <img class="img-responsive" style="max-width:100%; margin: 0 auto;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <p>MBBS, FCPS</p>
                            <p>Cardiologiest</p>
                            <p>Dhaka medical collage Hospital</p>
                            <p>5 years experiences</p>
                        </div>
                    </div>
               </div>
           </div>
           <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>Related Doctors</h2>
                    <div class="line"></div>
                </div>
            </div>
           <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <a href="{{ route('doctor.details') }}"><img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" /></a>
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <a href="{{ route('doctor.details')}}"><h3>Dr. Md Rifat Khan</h3></a>
                            <p>MBBS, FCPS</p>
                            <p>Cardiologiest</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <a href="{{ route('doctor.details') }}"><img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" /></a>
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <a href="{{ route('doctor.details')}}"><h3>Dr. Md Rifat Khan</h3></a>
                            <p>MBBS, FCPS</p>
                            <p>Cardiologiest</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <a href="{{ route('doctor.details') }}"><img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" /></a>
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <a href="{{ route('doctor.details')}}"><h3>Dr. Md Rifat Khan</h3></a>
                            <p>MBBS, FCPS</p>
                            <p>Cardiologiest</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <a href="{{ route('doctor.details') }}"><img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" /></a>
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <a href="{{ route('doctor.details')}}"><h3>Dr. Md Rifat Khan</h3></a>
                            <p>MBBS, FCPS</p>
                            <p>Cardiologiest</p>
                        </div>
                    </div>
                </div>
           </div>
       </section>
      <!--=========== End Doctors SECTION ================-->
@endsection
