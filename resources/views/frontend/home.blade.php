@extends('frontend.layouts.app')

@section('title', 'Home')

@push('header-style')
    <!-- Jquery ui for datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
    .single-top-feature:hover{
        transition: all .4s;
    }
    .single-top-feature:hover{
        transform: translateY(-10px);
        /* box-shadow: 2px 5px 10px #18bbcc; */
    }
    </style>
@endpush

@section('content')
        <!--=========== BEGIN SLIDER SECTION ================-->
        <section id="sliderArea">
            <!-- Start slider wrapper -->
            <div class="top-slider">
              <!-- Start First slide -->
              <div class="top-slide-inner">
                <div class="slider-img">
                  <img src="{{ asset('assets/frontend/images/14.jpg') }}" alt="">
                </div>
                <div class="slider-text">
                  <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
                  <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
                  <div class="readmore_area">
                    <a data-hover="Read More" href="#"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!-- End First slide -->

              <!-- Start 2nd slide -->
              <div class="top-slide-inner">
                <div class="slider-img">
                  <img src="{{ asset('assets/frontend/images/15.jpg') }}" alt="">
                </div>
                <div class="slider-text">
                  <h2><strong>Best Template</strong> For your Medical Website</h2>
                  <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
                  <div class="readmore_area">
                    <a data-hover="Read More" href="#"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!-- End 2nd slide -->

              <!-- Start Third slide -->
              <div class="top-slide-inner">
                <div class="slider-img">
                  <img src="{{ asset('assets/frontend/images/7.jpg') }}" alt="">
                </div>
                <div class="slider-text">
                  <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
                  <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
                  <div class="readmore_area">
                    <a data-hover="Read More" href="#"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!-- End Third slide -->

              <!-- Start Fourth slide -->
              <div class="top-slide-inner">
                <div class="slider-img">
                  <img src="{{ asset('assets/frontend/images/12.jpg') }}" alt="">
                </div>
                <div class="slider-text">
                  <h2><strong>Best Template</strong> For your Medical Website</h2>
                  <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
                  <div class="readmore_area">
                    <a data-hover="Read More" href="#"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!-- End Fourth slide -->

              <!-- Start Fifth slide -->
              <div class="top-slide-inner">
                <div class="slider-img">
                  <img src="{{ asset('assets/frontend/images/9.jpg') }}" alt="">
                </div>
                <div class="slider-text">
                  <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
                  <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
                  <div class="readmore_area">
                    <a data-hover="Read More" href="#"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!-- End Fifth slide -->
            </div><!-- /top-slider -->
        </section>
          <!--=========== END SLIDER SECTION ================-->

          <!--=========== BEGIN Top Feature SECTION ================-->
          <section id="topFeature">
            <div class="container">
                <div class="row">
                    <!-- Start Single Top Feature -->
                    <div class="col-lg-4 col-md-4">
                      <div class="row">
                        <div class="single-top-feature">
                          <span class="fa fa-flask"></span>
                          <h3>Emergency Care</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Top Feature -->

                    <!-- Start Single Top Feature -->
                    <div class="col-lg-4 col-md-4">
                      <div class="row">
                        <div class="single-top-feature opening-hours" style="background-color: #18bbcc">
                          <span class="fa fa-clock-o"></span>
                          <h3>Opening Hours</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                          <ul class="opening-table">
                            <li>
                              <span>Monday - Friday</span>
                              <div class="value">8.00 - 16.00</div>
                            </li>
                            <li>
                              <span>Saturday</span>
                              <div class="value">9.30 - 15.30</div>
                            </li>
                            <li>
                              <span>Sunday</span>
                              <div class="value">9.30 - 17.00</div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- End Single Top Feature -->
                    {{-- style="background-color: #2daab7" --}}
                    <!-- Start Single Top Feature -->
                    <div class="col-lg-4 col-md-4">
                      <div class="row">
                        <div class="single-top-feature">
                          <span class="fa fa-hospital-o"></span>
                          <h3>Appointment</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                          <div class="readmore_area">
                            <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appoinment"><span>Appoinment</span></a>
                          </div>
                          <!-- start modal window -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="appointment-area">
                                    <form class="appointment-form" action="{{ route('appoinment') }}" method="POST">
                                        @csrf
                                      <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Your name <span class="required">*</span>
                                          </label>
                                          <input type="text" name="name" class="wp-form-control wpcf7-text" placeholder="Your name">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Your Email <span class="required"></span>
                                          </label>
                                          <input type="mail" name="email" class="wp-form-control wpcf7-email" placeholder="Email address">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Your Age <span class="required">*</span>
                                          </label>
                                          <input type="text" name="age" class="wp-form-control wpcf7-text" placeholder="Age">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Your Phone <span class="required">*</span>
                                          </label>
                                          <input type="text" name="mobile_number" class="wp-form-control wpcf7-text" placeholder="Phone Number">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Appointment Date <span class="required">*</span>
                                          </label>
                                          <input type="text" id="datepicker" name="appoinment_date" class="wp-form-control wpcf7-text" placeholder="Select a date">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                          <label class="control-label">Select Department <span class="required">*</span>
                                          </label>
                                          <select name="department_id" class="wp-form-control wpcf7-select">
                                            <option value="0">Select a Department</option>
                                           @foreach ($departments as $department)
                                           <option value="{{ $department->id }}">{{ $department->name }}</option>
                                           @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <input name="subject" type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                                      <textarea name="message" class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                                     <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>
                                    </form>
                                  </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                    </div>
                    <!-- End Single Top Feature -->
                </div>
            </div>
          </section>
          <!--=========== END Top Feature SECTION ================-->

          <!--=========== BEGIN Service SECTION ================-->
          <section id="service" style="margin-top: 10px; background-color: #f7f7f7">
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
                                <a href="#"><span class="fa fa-stethoscope service-icon-effect"></a></span>
                            </div>
                            <h3><a href="#">Cardio Monitoring</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-4">
                          <div class="single-service">
                            <div class="service-icon">
                              <a href="#"><span class="fa fa-heartbeat service-icon-effect"></span></a>
                            </div>
                            <h3><a href="#">Rehabilitation Therapy</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-4">
                          <div class="single-service">
                            <div class="service-icon">
                              <a href="#"><span class="fa fa-h-square service-icon-effect"></span></a>
                            </div>
                            <h3><a href="#">Medical Health Care</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-4">
                          <div class="single-service">
                            <div class="service-icon">
                              <a href="#"><span class="fa fa-medkit service-icon-effect"></span></a>
                            </div>
                            <h3><a href="#">Background Checks</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-4">
                          <div class="single-service">
                            <div class="service-icon">
                              <a href="#"><span class="fa fa-user-md service-icon-effect"></span></a>
                            </div>
                            <h3><a href="#">Special Doctor</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-4">
                          <div class="single-service">
                            <div class="service-icon">
                              <a href="#"><span class="fa fa-ambulance service-icon-effect"></span></a>
                            </div>
                            <h3><a href="#">24 Hours Service</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== End Service SECTION ================-->

          <!--=========== BEGAIN About us SECTION ================-->
          <section id="extraFeatures">
              <div class="container">
                <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="departments-area">
                      <div class="section-heading">
                        <h2>About Us</h2>
                        <div class="line"></div>
                      </div>
                        <div class="single-service">
                            <h1 style="text-align: left; color:#111;font-size: 28px;">Welcome to Bangladesh Cancer Society</h1>
                            <p style="font-size: 18px;">An innovative practice that cares for families.</p>
                            <p style="text-align: justify">Pediatricians specialize in the care of infants, children, and adolescents. Pediatricians provide a range of services from well-child care, to basic childhood immunizations and illnesses, to managing complex medical conditions and chronic disorders. The use of one electronic medical record for each patient ensures constant and timely communication between your child’s entire medical team.</p>
                            <div class="blog-content">
                                <div class="readmore_area" style="margin-top: 0px;">
                                <a href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="how-works-area">
                     <div class="section-heading">
                        <h2>Hospital Complex</h2>
                        <div class="line"></div>
                      </div>
                        <div class="campus-img">
                            <img class="campus img-responsive" src="{{ asset('assets/frontend/images/BCSH-Cons.png') }}" style="min-width:100%; height: 273px;;">
                        </div>
                   </div>
                 </div>
               </div>
              </div>
          </section>
          <!--=========== END about us SECTION ================-->
          <!--=========== BEGAIN department SECTION ================-->
          <section id="extraFeatures" style="margin-top: 10px; background-color: #f7f7f7">
              <div class="container">
                <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="departments-area">
                      <div class="section-heading">
                        <h2>Our Departments</h2>
                        <div class="line"></div>
                      </div>
                      <!-- Start Departments Accordion -->
                      <div class="panel-group custom-panel" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Pediatric Clinic <span class="fa fa-minus"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                             <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Dental Implants<span class="fa fa-plus"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                            <img class="img-center" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img">
                             <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                             </p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Laryngological Clinic  <span class="fa fa-plus"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                Laryngological Clinic<span class="fa fa-plus"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                            <img class="img-center" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img">
                             <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                             </p>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                Rehabilitation Therapy Clinic <span class="fa fa-plus"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="how-works-area">
                     <div class="section-heading">
                        <h2>How we work</h2>
                        <div class="line"></div>
                      </div>
                      {{-- <div id="player"></div> --}}
                        <div class="video-container">
                            <video class="bg-video" autoplay muted loop>
                              <source src="{{ asset('assets/frontend/video/Lulu_latte.mp4') }}" type="video/mp4">
                              <source src="{{ asset('assets/frontend/video/Lulu_latte.webm') }}" type="video/webm">
                              Your browser is not supported
                            </video>
                        </div>

                   </div>
                 </div>
               </div>
              </div>
          </section>
          <!--=========== END department SECTION ================-->

          <!--=========== BEGAIN Why Choose Us SECTION ================-->
          <section id="whychooseSection" style="background-color: #fff">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="service-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                      <h2>Why Choose Us</h2>
                      <div class="line"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                      <div class="whyChoose-left">
                        <div class="whychoose-slider">
                          <div class="whychoose-singleslide">
                            <img src="{{ asset('assets/frontend/images/choose-us-img1.jpg') }}" alt="img">
                          </div>
                          <div class="whychoose-singleslide">
                            <img src="{{ asset('assets/frontend/images/choose-us-img2.jpg') }}" alt="img">
                          </div>
                          <div class="whychoose-singleslide">
                            <img src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                      <div class="whyChoose-right">
                        <div class="media">
                          <div class="media-left">
                            <a href="#" class="media-icon">
                              <span class="fa fa-hospital-o"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="#"><h4 class="media-heading">Great Infrastructure</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#" class="media-icon">
                              <span class="fa fa-user-md"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="#"><h4 class="media-heading">Qualified Doctors</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#" class="media-icon">
                              <span class="fa fa-ambulance"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="#"><h4 class="media-heading">Emergency Support</h4></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== END Why Choose Us SECTION ================-->

          <!--=========== BEGAIN Counter SECTION ================-->
          <section id="counterSection">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="counter-area">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                          <div class="counter-box">
                            <div class="counter-no counter">
                              200
                            </div>
                            <div class="counter-label">Doctors</div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="counter-box">
                            <div class="counter-no counter">
                              300
                            </div>
                            <div class="counter-label">Clinic Rooms</div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="counter-box">
                            <div class="counter-no counter">
                              450
                            </div>
                            <div class="counter-label">Happy Patients</div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                           <div class="counter-box">
                            <div class="counter-no counter">
                              555
                            </div>
                            <div class="counter-label">Awards</div>
                          </div>
                        </div>
                      </div>
                </div>

              </div>
            </div>
          </section>
          <!--=========== End Counter SECTION ================-->

          <!--=========== BEGAIN Why Choose Us SECTION ================-->
          <section id="whychooseSection" style="background-color: #fff">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                          <h2>Our Recent Awards</h2>
                          <div class="line"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="whyChoose-left" style="width: 100%!important;">
                            <div class="whychoose-slider">
                              <div class="whychoose-singleslide">
                                  <div class="row">
                                    <div class="col-md-8">
                                        <img src="{{ asset('assets/frontend/images/award-1.png') }}" alt="img">
                                    </div>
                                    <div class="col-md-4">
                                        <h1>This is award title</h1>
                                        <p>This is award short description</p>
                                        <p>This is award description</p>
                                    </div>
                                  </div>
                              </div>
                              <div class="whychoose-singleslide">
                                  <div class="row">
                                    <div class="col-md-8">
                                        <img src="{{ asset('assets/frontend/images/award-1.png') }}" alt="img">
                                    </div>
                                    <div class="col-md-4">
                                        <h1>This is award title</h1>
                                        <p>This is award short description</p>
                                        <p>This is award description</p>
                                    </div>
                                  </div>
                              </div>
                              <div class="whychoose-singleslide">
                                  <div class="row">
                                    <div class="col-md-8">
                                        <img src="{{ asset('assets/frontend/images/award-1.png') }}" alt="img">
                                    </div>
                                    <div class="col-md-4">
                                        <h1>This is award title</h1>
                                        <p>This is award short description</p>
                                        <p>This is award description</p>
                                    </div>
                                  </div>
                              </div>
                              {{-- <div class="whychoose-singleslide">
                                <img style="min-width: 100%;" src="{{ asset('assets/frontend/images/award-2.png') }}" alt="img">
                              </div>
                              <div class="whychoose-singleslide">
                                <img style="min-width: 100%;" src="{{ asset('assets/frontend/images/award-1.png') }}" alt="img">
                              </div> --}}
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!--=========== END Why Choose Us SECTION ================-->

          <!--=========== BEGAIN Doctors SECTION ================-->
          <section id="meetDoctors">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="meetDoctors-area">
                   <!-- Start Service Title -->
                    <div class="section-heading">
                      <h2>Meet Our Doctors</h2>
                      <div class="line"></div>
                    </div>
                    <div class="doctors-area">
                      <ul class="doctors-nav">
                        <li>
                          <div class="single-doctor">
                            <a class="tdoctor" href="{{ route('doctor.details') }}" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-1.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. Yvonne Cadiline</h2>
                                  <p style="color: #fff;">Cardiologist</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="{{ route('doctor.details') }}" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-2.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>DR. Jack Johnson</h2>
                                  <p>Rehabilitation Therapy</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="{{ route('doctor.details') }}" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-3.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. Vanessa Smouic</h2>
                                  <p>Cardiac Clinic</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="{{ route('doctor.details') }}" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-5.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. David Gresshoff</h2>
                                  <p>Laryngological Clinic</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                         <li>
                          <div class="single-doctor">
                            <a class="tdoctor" href="{{ route('doctor.details') }}" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-1.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. Yvonne Cadiline</h2>
                                  <p>Pediatric Clinic</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-2.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>DR. Jack Johnson</h2>
                                  <p>Rehabilitation Therapy</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-3.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. Vanessa Smouic</h2>
                                  <p>Cardiac Clinic</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-doctor">
                            <div class="single-doctor">
                            <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                              <figure>
                                <img src="{{ asset('assets/frontend/images/doctor-5.jpg') }}" />
                                {{-- <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg> --}}
                                <figcaption>
                                  <h2>Dr. David Gresshoff</h2>
                                  <p>Laryngological Clinic</p>
                                  {{-- <button>View</button> --}}
                                </figcaption>
                              </figure>
                            </a>
                            <div class="single-doctor-social">
                              <a href="#"><span class="fa fa-facebook"></span></a>
                              <a href="#"><span class="fa fa-twitter"></span></a>
                              <a href="#"><span class="fa fa-google-plus"></span></a>
                              <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                          </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== End Doctors SECTION ================-->

          <!--=========== BEGAIN Testimonial SECTION ================-->
          <section id="testimonial">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="testimonial-area">
                   <!-- Start Service Title -->
                    <div class="section-heading">
                      <h2>What our patients said</h2>
                      <div class="line"></div>
                    </div>
                    <div class="testimonial-area">
                      <ul class="testimonial-nav">
                        <li>
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="{{ asset('assets/frontend/images/patients-3.jpg') }}" alt="img">
                            </div>
                            <div class="testimonial-cotent">
                              <p class="testimonial-parg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="{{ asset('assets/frontend/images/patients-1.jpg') }}" alt="img">
                            </div>
                            <div class="testimonial-cotent">
                              <p class="testimonial-parg">There are many variations of passages of Lorem Ipsum available.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="{{ asset('assets/frontend/images/patients-2.jpg') }}" alt="img">
                            </div>
                            <div class="testimonial-cotent">
                              <p class="testimonial-parg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== End Testimonial SECTION ================-->

          <!--=========== BEGAIN Home Blog SECTION ================-->
          <section id="homeBLog" style="padding: 60px 0 20px 0;">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="homBlog-area">
                   <!-- Start Service Title -->
                    <div class="section-heading">
                      <h2>News From Blog</h2>
                      <div class="line"></div>
                    </div>
                    <!-- Start Home Blog Content -->
                    <div class="homeBlog-content">
                      <div class="row">
                        <!-- Start Single Blog -->
                        {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="single-Blog">
                            <div class="single-blog-left">
                              <ul class="blog-comments-box">
                                <li>May <h2>10</h2>2015</li>
                                <li><span class="fa fa-eye"></span>1523</li>
                                <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                              </ul>
                            </div>
                            <div class="single-blog-right">
                              <div class="blog-img">
                                <figure class="blog-figure">
                                 <a href="#"><img src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img"></a>
                                  <span class="image-effect"></span>
                                </figure>
                              </div>
                              <div class="blog-author">
                                <ul>
                                  <li>By <a href="#">Dr. Smith</a></li>
                                  <li>In <a href="#">Dental</a></li>
                                </ul>
                              </div>
                              <div class="blog-content">
                                <h2>Latest Trend Of Medical Dental Department</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <div class="readmore_area">
                                  <a style="margin-bottom: 30px;" href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                         <!-- Start Single Blog customize-->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="single-Blog" style="margin-bottom: 30px">
                            <div class="single-blog-left">
                                <div class="blog-img">
                                    <figure class="blog-figure">
                                     <a href="#"><img style="max-width: 200px;" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img"></a>
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
                            <div class="single-blog-right">
                              <div class="blog-content">
                                <h2>Latest Trend Of Medical Dental Department</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
                                <div class="readmore_area">
                                  <a style="margin-bottom: 30px; margin-top: -20px;" href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="single-Blog" style="margin-bottom: 30px">
                            <div class="single-blog-left">
                                <div class="blog-img">
                                    <figure class="blog-figure">
                                     <a href="#"><img style="max-width: 200px;" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img"></a>
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
                            <div class="single-blog-right">
                              <div class="blog-content">
                                <h2>Latest Trend Of Medical Dental Department</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
                                <div class="readmore_area">
                                  <a style="margin-bottom: 30px; margin-top: -20px;" href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="single-Blog" style="margin-bottom: 30px">
                            <div class="single-blog-left">
                                <div class="blog-img">
                                    <figure class="blog-figure">
                                     <a href="#"><img style="max-width: 200px;" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img"></a>
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
                            <div class="single-blog-right">
                              <div class="blog-content">
                                <h2>Latest Trend Of Medical Dental Department</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
                                <div class="readmore_area">
                                  <a style="margin-bottom: 30px; margin-top: -20px;" href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="single-Blog" style="margin-bottom: 30px">
                            <div class="single-blog-left">
                                <div class="blog-img">
                                    <figure class="blog-figure">
                                     <a href="#"><img style="max-width: 200px;" src="{{ asset('assets/frontend/images/choose-us-img3.jpg') }}" alt="img"></a>
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
                            <div class="single-blog-right">
                              <div class="blog-content">
                                <h2>Latest Trend Of Medical Dental Department</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form...</p>
                                <div class="readmore_area">
                                  <a style="margin-bottom: 30px; margin-top: -20px;" href="#" data-hover="Read More"><span>Read More</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="homBlog-area">
                   <!-- Start Service Title -->
                    <div class="section-heading">
                      <h2>Hospital News</h2>
                      <div class="line"></div>
                    </div>
                    <!-- Start Home Blog Content -->
                    <div class="homeBlog-content">
                      <div class="row">
                        <!-- Start Single Blog -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                         <div style="margin-bottom: 30px;">
                             <h3 style="margin-top: 0; text-align: center;">Application Form</h3>
                            <img class="img-responsive" src="{{ asset('assets/frontend/images/ap-form.jpg') }}">
                         </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                         <div>
                            {{-- <h3 style="margin-top: 0">Bangladesh Cancer Society Lottery Draw Results</h3>
                            <img class="img-responsive" style="max-height: 600px;" src="{{ asset('assets/frontend/images/news-2.gif') }}"> --}}
                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--=========== End Home Blog SECTION ================-->






@endsection
@push('footer-script')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
        } );
    </script>

{{-- <script src="//www.youtube.com/iframe_api"></script> --}}

<script>
    /**
     * Put your video IDs in this array
     */
    // var videoIDs = [
    //     'tNbM3yayrD8',
    //     'GePNui434-M',
    //     'Z5jnd39CbzI',
    //     'plZ7i5lSn9k'
    // ];

    // var player, currentVideoId = 0;

    // function onYouTubeIframeAPIReady() {
    //     player = new YT.Player('player', {
    //         height: '350',
    //         width: '425',
    //         events: {
    //             'onReady': onPlayerReady,
    //             'onStateChange': onPlayerStateChange
    //         }
    //     });
    // }

    // function onPlayerReady(event) {
    //     event.target.loadVideoById(videoIDs[currentVideoId]);
    // }

    // function onPlayerStateChange(event) {
    //     if (event.data == YT.PlayerState.ENDED) {
    //         currentVideoId++;
    //         if (currentVideoId < videoIDs.length) {
    //             player.loadVideoById(videoIDs[currentVideoId]);
    //         }
    //     }
    // }
</script>
@endpush
