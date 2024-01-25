@extends('frontend.layouts.app')

@section('title', 'Membership Form')

@push('header-style')
<style>
.checkbox-inline, .radio-inline {
    position: relative;
    display: inline;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer;
}

.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px \9;
    margin-left: -65px;
}

    label {
  display: inline-block;
  width: 5em;
  padding: 0 1em;
  text-align: right;
}

/* Hide the file input using
opacity */
[type=file] {
    position: absolute;
    filter: alpha(opacity=0);
    opacity: 0;
}
input,
[type=file] + label {
  border: 1px solid #CCC;
  border-radius: 3px;
  text-align: left;
  padding: 10px;
  width: 150px;
  margin: 0;
  left: 0;
  position: relative;
}
[type=file] + label {
  text-align: center;
  /* left: 7.35em; */
  top: 0.5em;
  /* Decorative */
  background: #333;
  color: #fff;
  border: none;
  cursor: pointer;
  margin-bottom: 30px;
}
[type=file] + label {
  background: #3399ff;
}
[type=file] + label:hover {
  background: #3399ff;
}
.send:hover{
    background-color: #800!important;
    color: #fff!important;
    border: 1px solid #800!important;
}
</style>

<script>
// $("[type=file]").on("change", function(){
// // Name of file and placeholder
// var file = this.files[0].name;
// var dflt = $(this).attr("placeholder");
// if($(this).val()!=""){
//     $(this).next().text(file);
// } else {
//     $(this).next().text(dflt);
// }
// });
</script>

@endpush
@section('content')
    <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Membership Form</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Membership Form</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!--=========== BEGIN Service SECTION ================-->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
              <div class="contact-form">
                <div class="section-heading">
                  <h2>Membership Form</h2>
                  <div class="line"></div>
                </div>
                <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
                <form class="submitphoto_form">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Full name">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Father's name">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Mother's name">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Date of Birth">
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="National ID No.">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Religion">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Nationality">
                        </div>
                  </div>
                   <span style="font-weight: bold">Gender: </span>: <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio1" value="option1"> Male
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="gender" id="inlineRadio2" value="option2"> Female
                    </label>
                    <br> <br>
                   <span style="font-weight: bold">Marital Status: </span> <label class="radio-inline">
                    <input type="radio" name="marital_status" id="inlineRadio3" value="option3"> Married
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="marital_status" id="inlineRadio4" value="option4"> Unmarried
                    </label>
                    <br> <br>
                 <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="wp-form-control wpcf7-email" placeholder="Occupation (Present)">
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="wp-form-control wpcf7-email" placeholder="Occupation (Past)">
                                </div>
                      </div>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="2" placeholder="Educational Qualifications"></textarea>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="2" placeholder="Professional Qualifications"></textarea>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="2" placeholder="Present Address"></textarea>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="2" placeholder="Permanent Address"></textarea>
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone No (Office)">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone No (House)">
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Cell No (Office)">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Cell No (House)">
                        </div>
                  </div>
                  <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">

                  Membership Categories: <label class="radio-inline">
                        <input type="radio" name="membershio_cat" id="inlineRadio1" value="option1"> Life Member
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="membershio_cat" id="inlineRadio2" value="option2"> General Member
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="membershio_cat" id="inlineRadio3" value="option3"> Others
                        </label>
                        <br> <br>
                        <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="2" placeholder="Position in any other social organization"></textarea>
                    {{-- <input type="file" name="file" class="file"> --}}
                    {{-- <input id="f02" type="file"/>
                    <label for="f02">Attach File</label><br> --}}
                    <p>I here by declare that the perticular furnished that is true and I shall abide by the rules and regulations of the society. </p>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Proposed By (Name)">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="BCS Membership No">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone / Cell No">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Seconded By (Name)">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="BCS Membership No">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone / Cell No">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <input id="f02" type="file"/>
                                <label for="f02">Picture</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <input id="f02" type="file"/>
                                <label for="f02">Signature</label>
                        </div>
                    </div>
                  <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Submit</span></button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
              <div class="contact-address">
                <div class="section-heading">
                  <h2>Contact Information</h2>
                  <div class="line"></div>
                </div>
                 <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                <address class="contact-info">
                    <p><span class="fa fa-home"></span>120/3-C, Darus Salam (Technical More) Mirpur, Dhaka &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-1216, Bangladesh.</p>
                    <p><span class="fa fa-phone"></span>+8801763678870</p>
                    <p><span class="fa fa-phone"></span>+88029025504</p>
                    <p class="mail"><span class="fa fa-envelope"></span>bangladeshcancersociety@gmail.com</p>
                    <p><span class="fa fa-envelope"></span>info@bangladeshcancersociety.org</p>
                </address>
                <h3>Social Media</h3>
                <div class="social-share">
                 <ul>
                   <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                   <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                   <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                   <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                   <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                 </ul>
               </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=========== End Service SECTION ================-->
@endsection
