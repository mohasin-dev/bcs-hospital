@extends('frontend.layouts.app')

@section('title', 'Our Staff')

@section('content')
<section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Our Staff</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Staff</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== BEGAIN Staff SECTION ================-->
<style>

</style>

       <section id="doct">
           <div class="container">
               <div class="row">
                    <div class="section-heading">
                        <h2>Our Staff</h2>
                        <div class="line"></div>
                    </div>
               </div>
           <div class="row" style="margin-bottom: 30px;">
               <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="" style="margin-bottom: 20px">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
               <div class="col-md-3">
                    <div class="">
                        <div class="panel-body" style="padding: 0!important;">
                            <img style="max-width:100%;" src="{{ asset('assets/frontend/images/staff-1.jpg') }}" />
                        </div>
                        <div class="panel-footer" style="text-align: center;">
                            <h3>Md Rifat Khan</h3>
                            <p>Designation</p>
                        </div>
                    </div>
               </div>
           </div>
       </section>
      <!--=========== End Staff SECTION ================-->
@endsection
