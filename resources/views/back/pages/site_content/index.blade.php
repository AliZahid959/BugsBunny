@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">General Site Setting</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Manage Site Content</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Site Logo</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="site_logo">
                                </div>
                                @error('site_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Site Banner Heading</label>
                                <input type="text" name="site_heading" class="form-control @error('site_heading') is-invalid @enderror" value="{{$site_content->site_heading}}">
                                @error('site_heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Site Banner Description</label>
                                <textarea name="site_description" class="form-control @error('site_description') is-invalid @enderror" rows="4">{{$site_content->site_description}}</textarea>
                                @error('site_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Home Page banner Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="banner_image">
                                </div>
                                @error('banner_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                       <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Web Site LinkedIn Link</label>
                                <input type="text" name="social_link" class="form-control @error('social_link') is-invalid @enderror" value="{{$site_content->social_link}}">
                                @error('social_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                      <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Home Page Video</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="video">
                                </div>
                                @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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
