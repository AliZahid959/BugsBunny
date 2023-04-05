@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">About Page Setting</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Manage About Page Content</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">About Our Agency Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="about_our_agency_image">
                                </div>
                                @error('about_our_agency_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Main Heading</label>
                                <input type="text" name="about_our_agency_heading" class="form-control @error('about_our_agency_heading') is-invalid @enderror" value="{{$about->about_our_agency_heading}}">
                                @error('about_our_agency_heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Main Description</label>
                                <input type="text" name="about_our_agency_description" class="form-control @error('about_our_agency_description') is-invalid @enderror" value="{{$about->about_our_agency_description}}">
                                @error('about_our_agency_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Why Choose us Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="why_choose_us_image">
                                </div>
                                @error('why_choose_us_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Why Choose us Heading</label>
                                <input type="text" name="why_choose_us_heading" class="form-control @error('why_choose_us_heading') is-invalid @enderror" value="{{$about->why_choose_us_heading}}">
                                @error('why_choose_us_heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Why choose us Description</label>
                                <input type="text" name="why_choose_us_description" class="form-control @error('why_choose_us_description') is-invalid @enderror" value="{{$about->why_choose_us_description}}">
                                @error('why_choose_us_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('back/vendor/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/select2/dist/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Please select as option",

            });
            $('#meta_keyword').select2({
                tags: true,
                placeholder: "Please Enter Tags Here",

            });

            tinymce.init({
                selector: 'textarea#body',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
            });
        });
    </script>
@endsection
