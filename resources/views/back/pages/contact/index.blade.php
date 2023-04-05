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
                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Contact Heading</label>
                                <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror" value="{{$contact->heading}}">
                                @error('heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Contact Description</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$contact->description}}">
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Main Contact No</label>
                                <input type="text" name="main_phone_no" class="form-control @error('main_phone_no') is-invalid @enderror" value="{{$contact->main_phone_no}}">
                                @error('main_phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Secondary Contact No</label>
                                <input type="text" name="secondary_phone_no" class="form-control @error('secondary_phone_no') is-invalid @enderror" value="{{$contact->secondary_phone_no}}">
                                @error('secondary_phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Email Adress</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$contact->email}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                         <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Main Address</label>
                                <input type="text" name="main_address" class="form-control @error('main_address') is-invalid @enderror" value="{{$contact->main_address}}">
                                @error('main_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Secondary Address</label>
                                <input type="text" name="secondary_address" class="form-control @error('secondary_address') is-invalid @enderror" value="{{$contact->secondary_address}}">
                                @error('secondary_address')
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
