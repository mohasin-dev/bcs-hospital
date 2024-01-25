@extends('frontend.layouts.app')

@section('title', 'Donate')

@section('content')
    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Donate</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Donate</li>
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
                  <h2>Donate</h2>
                  <div class="line"></div>
                </div>
                <!-- Start Service Content -->
                <div class="service-content">
                        <div class="row" style="text-align: right; padding-right: 15px;">
                            <a href="#" class="btn btn-danger ">Download Donate Application as PDF</a>
                            <a href="#" class="btn btn-danger ">Print Donate Application</a>
                        </div><br>
                  <div class="row" >
                    <div class="col-md-12">
                        <p>To</p>
                        <p>....................</p>
                        <p>....................</p>
                        <p>Dhaka, Bangladesh.</p>
                        <h4>Subject: An appeal for donation.</h4>
                        <p>Dear Sir,<br>
                        On behalf of Bangladesh Cancer Society we take the privilege to request you for help &
                        co-operation for the benefit & wellbeing of cancer patients in our country .In this connection here are few
                        points for your kind consideration:
                        </p>
                        <p style="float: left">1. <p style="padding-left: 40px;">Bangladesh Cancer Society (BCS) was established in 1978 with an aim to raise awareness against
                                cancer. It works in the field of prevention, detection, treatment, supportive care, research & training
                                dedicated for the cause of cancer.</p></p>
                                <p style="float: left">2.<p style="padding-left: 40px;"> It is a nonpolitical, noncommercial, voluntary, social welfare health organization and the Honorable
                                President of the People’s Republic of Bangladesh is the Chief Patron of the Society.
                                </p></p>
                                <p style="float: left">3.<p style="padding-left: 40px;"> BCS owns a land of 1.75 acres at 120/3-C, Darussalam (Technical Mor), Mirpur, Dhaka leased by
                                Government of Bangladesh. It is running it’s office, outpatient service and a 30 bedded poor friendly
                                hospital in a tin shed building built by BCS’s own fund and donations mainly by Dutch-Bangla Bank
                                ltd temporarily.
                                </p></p>
                                <p style="float: left">4.<p style="padding-left: 40px;"> Currently we are working with a project to build a 250 bedded hospital and welfare home. Its aim is
                                to provide one roof service for care of cancer patients & an academic wing for research & training.
                                </p></p>
                        <p>Our plan is to build & run the hospital by Bangladesh Cancer Society with its own fund & fund raised
                                from different government, non government agencies, organizations, institutional bodies, philanthropists
                                and anybody who shares the idea to be with us.
                                </p>
                        <p>Organizations like yours have a scope to co-operate from the fund spent as part of corporate social
                                activity</p>
                        <p>Donation for building the hospital can be sent to ‘B.C.S. Hospital Development Fund’ Account No:
                                115.110.9212, Dutch-Bangla Bank Ltd. Mirpur Branch, Dhaka.</p>
                        <p>Donation for patient’s welfare can be sent to ‘Bangladesh Cancer Society Welfare Fund’ Account No:
                                115.110.9184, Dutch-Bangla Bank Ltd. Mirpur Branch, Dhaka (Zakat money is also accepted in this
                                fund).
                                </p>

                        <p>Online Banking is available for both the mentioned accounts.</p>
                        <div style="text-align: right">
                        <p>With expectations & regards</p>
                        <p style="font-weight: bold; padding-bottom: 20px;">
                        <span>(Prof. Dr. Mollah Obayedullah Baki)<span><br>
                        <span>President<span><br>
                        <span>Bangladesh Cancer Society<span><br>
                        </p>
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
@endsection
