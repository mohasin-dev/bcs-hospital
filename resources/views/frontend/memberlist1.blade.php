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
    <style>
        .member-single{
            border: 1px solid #ccc;
            margin-bottom: 30px;
        }
        .member-img img{
            margin: 0 auto;
            height: 150px;
            border-radius: 50%;
            width: 150px;
            padding-top: 10px;
        }
        .member-desc{
            padding: 20px 0;
            background-color: #f5f5f5;
            text-align: center;
            height: 180px;
        }
        .member-desc .position{
            font-size: 20px;
            font-weight: 500;
            color: #37c6f5;
        }
        .member-desc .name{
            font-size: 16px;
        }
        .member-desc .designation{
            font-size: 14px;
        }
        .last-p{
            margin-bottom: 0;
        }
    </style>
      <!--=========== BEGIN Service SECTION ================-->
      <section id="service">
        <div class="container">
            <div class="row" style="text-align: right; padding-right: 15px;">
                <a href="#" class="btn btn-danger ">Download Member List as PDF</a>
                <a href="#" class="btn btn-danger ">Print Member List</a>
            </div><br>
          <div class="row">
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc2.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc2.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc2.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc2.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
                    </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="member-single">
                    <div class="member-img">
                        <img class="img-responsive img-circle" src="{{ asset('assets/frontend/images/doc2.jpg') }}">
                    </div>
                    <div class="member-desc">
                        <p class="position">President</p>
                        <p class="name">Prof. Dr.Md.Moazzam Hossain</p>
                        <p class="last-p designation">Head of the Department of Surgery, Holy Family Red Crescent Medical College & Hospital, Dhaka and Ex. Secretary General, BCS</p>
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
