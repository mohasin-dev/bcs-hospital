@extends('frontend.layouts.app')

@section('title', 'Service Details')

@section('content')
    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Service Details</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Service Details</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!--=========== BEGIN Service SECTION ================-->
      <section id="service">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="service-area">
                <!-- Start Service Title -->
                <div class="section-heading">
                  <h2>Member List</h2>
                  <div class="line"></div>
                </div>
                <!-- Start Service Content -->
                <div class="service-content">
                  <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                       <h1>This is service details page</h1>
                    </div>
                    <div class="col-md-3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== End Service SECTION ================-->
@endsection
