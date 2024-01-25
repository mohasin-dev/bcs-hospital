@extends('frontend.layouts.app')

@section('title', ' List')

@section('content')

    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Member's List</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active"> List</li>
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
           <div class="col-md-6">
                <div class="section-heading">
                    <h2>Chief Patron's List</h2>
                    <div class="line"></div>
                </div>
                <div class="col-md-12">
                    <div class="readmore_area" style="float: none; text-align: center; margin-top: 0px;">
                        <a data-hover="Get More Information" href="{{ route('member.list1') }}"><span>Get More Information</span></a>
                    </div>
                </div>
           </div>
           <div class="col-md-6">
                <div class="section-heading">
                    <h2>Chief Patron's List</h2>
                    <div class="line"></div>
                </div>
                <div class="col-md-12">
                    <div class="readmore_area" style="float: none; text-align: center; margin-top: 0px;">
                        <a data-hover="Get More Information" href="{{ route('member.list1') }}"><span>Get More Information</span></a>
                    </div>
                </div>
           </div>
          </div>
        </div>
      </section>
      <style>
          .member-list-footer{
              height: 200px;
              margin-bottom: 20px;
          }
      </style>
      <!--=========== End Service SECTION ================-->
@endsection
