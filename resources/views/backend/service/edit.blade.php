@extends('backend.layouts.app')

@section('title','service')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          Edit service
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" value="{{ $service->title }}" id="name" class="form-control" name="title">
                                    <label class="form-label">service Title</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" value="{{ $service->short_description }}" class="form-control" name="short_description">
                                        <label class="form-label">service Short Description</label>
                                    </div>
                                </div>
                                <div class="card">
                                        <div class="header">
                                            <h2>
                                               DESCRIPTION
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <textarea id="tinymce" name="description">{{ $service->description }}</textarea>
                                        </div>
                                    </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="name" value="{{ $service->service_icon }}" class="form-control" name="service_icon">
                                        <label class="form-label">Font awesome Icon class</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="image">Featured Image</label>
                                        <input type="file" name="image">
                                    </div>
                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.service.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

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
