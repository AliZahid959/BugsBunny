@extends('back.layout.app')
@section('css')
<link rel="stylesheet" href="{{ asset('back/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Add New Team Member</h5>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="team_name">Team Member Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control @error('team_name') is-invalid @enderror" name="team_name" value="{{ old('team_name') }}">
                                    @error('team_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="designation">Designation</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}">
                                    @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="social_link">Social Profile Link</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control @error('social_link') is-invalid @enderror" name="social_link" value="{{ old('social_link') }}">
                                        @error('social_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>Team Member Image</label>
                                <input type="file" class="form-control" name="team_image">

                                @error('team_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="status">Status: </label>
                                <div class="input-group">
                                    <select class="form-control" name="status">
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Create Team Member</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</form>
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
            tags: true
            , placeholder: "Please Enter Tags Here",

        });


        tinymce.init({
            selector: 'textarea#body'
            , plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount'
            , toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat'
        , });
    });

</script>
@endsection
