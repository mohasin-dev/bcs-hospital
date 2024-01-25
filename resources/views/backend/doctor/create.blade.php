@extends('backend.layouts.app')

@section('title','Doctor')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW DOCTOR
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="name">
                                    <label class="form-label">Doctor Name</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Doctor Image</label>
                                <input type="file" name="image">
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('designation_id') ? 'focused error' : '' }}">
                                    <label for="category">Select Designation</label>
                                    <select name="designation_id" id="category" class="form-control show-tick" data-live-search="true">
                                        <option value="0">Select Designation</option>
                                        @foreach($designations as $designation)
                                            <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('department_id') ? 'focused error' : '' }}">
                                    <label for="category">Select Department</label>
                                    <select name="department_id" id="category" class="form-control show-tick" data-live-search="true">
                                        <option value="0">Select Department</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('degrees') ? 'focused error' : '' }}">
                                    <label for="category">Select Degrees</label>
                                    <select name="degrees[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                        <option value="0">Select Degrees</option>
                                        @foreach($degrees as $degree)
                                            <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('specialists') ? 'focused error' : '' }}">
                                    <label for="category">Select Specialists</label>
                                    <select name="specialists[]" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                        <option value="0">Select Specialists</option>
                                        @foreach($Specialists as $specialist)
                                            <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.doctor.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

@endpush
