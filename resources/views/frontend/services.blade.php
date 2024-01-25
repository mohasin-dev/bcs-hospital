@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')
    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Features</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Features</li>
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
                  <h2>Our Services</h2>
                  <div class="line"></div>
                </div>
                <!-- Start Service Content -->
                <div class="service-content">
                  <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-stethoscope service-icon-effect"></span>
                        </div>
                        <h3><a href="#">Cardio Monitoring</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-heartbeat service-icon-effect"></span>
                        </div>
                        <h3><a href="#">Rehabilitation Therapy</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-h-square service-icon-effect"></span>
                        </div>
                        <h3><a href="#">Medical Health Care</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-medkit service-icon-effect"></span>
                        </div>
                        <h3><a href="#">Background Checks</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-user-md service-icon-effect"></span>
                        </div>
                        <h3><a href="#">Special Doctor</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-4">
                      <div class="single-service">
                        <div class="service-icon">
                          <span class="fa fa-ambulance service-icon-effect"></span>
                        </div>
                        <h3><a href="#">24 Hours Service</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div>
                <img class="img-responsive img-thumbnail" src="{{ asset('assets/frontend/images/service.jpg') }}">
            </div>
          </div>
        </div>
      </section>
      <!--=========== End Service SECTION ================-->
@endsection
