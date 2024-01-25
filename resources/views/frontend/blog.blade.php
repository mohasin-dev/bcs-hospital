@extends('frontend.layouts.app')

@section('title', 'Blog Archive')

@section('content')
     <!--=========== START BLOG SECTION ================-->
    <section id="blogArchive">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="blog-breadcrumbs-area">
                  <div class="container">
                    <div class="blog-breadcrumbs-left">
                      <h2>Blog</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                      <ol class="breadcrumb">
                        <li>You are here</li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Blog</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <!-- Start Blog Archive Area -->
                      <div class="blogArchive-area">
                        <div class="row">
                          <!-- Start Blog Content -->
                          <div class="col-md-9 col-sm-8">
                              <!-- Start Single Blog -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-img">
                                            <figure class="blog-figure">
                                                <a href="#"><img alt="img" src="{{ asset('assets/frontend/images/9.jpg') }}"></a>
                                                <span class="image-effect"></span>
                                            </figure>
                                        </div>
                                        <div class="blog-author">
                                            <ul>
                                                <li>By <a href="#">Dr. Smith</a></li>
                                                <li>In <a href="#">Dental</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-content">
                                            <h2>Latest Trend Of Medical Dental Department</h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <!-- Read more btn -->
                                            <a class="wpcf7-submit button--itzel" href="#">
                                                <i class="button__icon fa fa-link"></i>
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-img">
                                            <figure class="blog-figure">
                                                <a href="#"><img alt="img" src="{{ asset('assets/frontend/images/9.jpg') }}"></a>
                                                <span class="image-effect"></span>
                                            </figure>
                                        </div>
                                        <div class="blog-author">
                                            <ul>
                                                <li>By <a href="#">Dr. Smith</a></li>
                                                <li>In <a href="#">Dental</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-content">
                                            <h2>Latest Trend Of Medical Dental Department</h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <!-- Read more btn -->
                                            <a class="wpcf7-submit button--itzel" href="#">
                                                <i class="button__icon fa fa-link"></i>
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-img">
                                            <figure class="blog-figure">
                                                <a href="#"><img alt="img" src="{{ asset('assets/frontend/images/9.jpg') }}"></a>
                                                <span class="image-effect"></span>
                                            </figure>
                                        </div>
                                        <div class="blog-author">
                                            <ul>
                                                <li>By <a href="#">Dr. Smith</a></li>
                                                <li>In <a href="#">Dental</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-content">
                                            <h2>Latest Trend Of Medical Dental Department</h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <!-- Read more btn -->
                                            <a class="wpcf7-submit button--itzel" href="#">
                                                <i class="button__icon fa fa-link"></i>
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-img">
                                            <figure class="blog-figure">
                                                <a href="#"><img alt="img" src="{{ asset('assets/frontend/images/9.jpg') }}"></a>
                                                <span class="image-effect"></span>
                                            </figure>
                                        </div>
                                        <div class="blog-author">
                                            <ul>
                                                <li>By <a href="#">Dr. Smith</a></li>
                                                <li>In <a href="#">Dental</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="blog-content">
                                            <h2>Latest Trend Of Medical Dental Department</h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <!-- Read more btn -->
                                            <a class="wpcf7-submit button--itzel" href="#">
                                                <i class="button__icon fa fa-link"></i>
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div><br>

                                <!-- Start blog pagination  -->
                                <div class="blog-pagination">
                                    <nav>
                                        <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                            <span class="fa fa-angle-left"></span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                            <span class="fa fa-angle-right"></span>
                                            </a>
                                        </li>
                                        </ul>
                                    </nav>
                                </div>

                          </div>
                          <!-- Start Right Side bar -->
                          <div class="col-md-3 col-sm-4">
                            <aside class="sidebar">
                              <!-- Start sidebar widget -->
                              {{-- <div class="sidebar-widget">
                                <h3>Latest Posts</h3>
                                <ul class="popular-tab">
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img1.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="blog-single.html">Dummy text of the Medical Post</a>
                                       <span class="feed-date">27.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img2.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="blog-single.html">Dummy text of the Medical Post</a>
                                       <span class="feed-date">28.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img1.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="#">Dummy text of the Medical Post</a>
                                       <span class="feed-date">28.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <!-- Start sidebar widget -->
                              <div class="sidebar-widget">
                                <h3>Most Viewed</h3>
                                <ul class="popular-tab">
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img1.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="blog-single.html">Dummy text of the Medical Post</a>
                                       <span class="feed-date">27.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img2.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="blog-single.html">Dummy text of the Medical Post</a>
                                       <span class="feed-date">28.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#" class="news-img">
                                          <img alt="img" src="{{ asset('assets/frontend/images/small-blog-img1.jpg') }}" class="media-object">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                       <a href="#">Dummy text of the Medical Post</a>
                                       <span class="feed-date">28.02.15</span>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div> --}}
                              <!-- Start sidebar widget -->
                              <div class="sidebar-widget">
                                <h3>Tags</h3>
                                <ul class="tag-nav">
                                  <li><a href="#">Dental</a></li>
                                  <li><a href="#">Surgery</a></li>
                                  <li><a href="#">Pediatric</a></li>
                                  <li><a href="#">Cardiac</a></li>
                                  <li><a href="#">Ophthalmology</a></li>
                                  <li><a href="#">Diabetes</a></li>
                                </ul>
                              </div>
                              <!-- Start sidebar widget -->
                              {{-- <div class="sidebar-widget">
                                <h3>Text Widget</h3>
                                <p>This is text widget of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly <a href="#">believable</a></p>
                              </div> --}}
                              <!-- Start sidebar widget -->
                              {{-- <div class="sidebar-widget">
                                <h3>Archives</h3>
                                <ul class="archives">
                                  <li><a title="May 2015" href="#">May 2015<span>2</span></a></li>
                                  <li><a title="April 2015" href="#">April 2015<span>5</span></a></li>
                                  <li><a title="March 2015" href="#">March 2015<span>10</span></a></li>
                                </ul>
                              </div> --}}
                              <!-- Start sidebar widget -->
                              <div class="sidebar-widget">
                                <h3>Categories</h3>
                                <ul>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Dental</a></li>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Surgery</a></li>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Pediatric</a></li>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Cardiac</a></li>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Ophthalmology</a></li>
                                  <li><a href="#"><span class="fa fa-angle-right"></span>Diabetes</a></li>
                                </ul>
                              </div>
                            </aside>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== END BLOG SECTION ================-->
@endsection
