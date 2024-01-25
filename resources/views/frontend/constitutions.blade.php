@extends('frontend.layouts.app')

@section('title', 'Constitutions')

@section('content')
    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Constitutions</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Constitutions</li>
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
                  <h2>Constitutions</h2>
                  <div class="line"></div>
                </div>
                <!-- Start Service Content -->
                <div class="service-content">
                  <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="readmore_area" style="float: none; text-align: center; margin-top: 0px;">
                            <a data-hover="Get More Information" href="{{ asset('assets/frontend/files/constitutions.pdf') }}"><span>Get More Information</span></a>
                        </div>
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
