@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-2">Update Job</h5>
                    <form action="{{ route('careers.destroy', $careers) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete Job</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('careers.update', $careers) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="service_name">Job Title</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-wrench"></i></span>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$careers->title}}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Job Description</label>
                                <textarea name="description" placeholder="" class="form-control @error('description') is-invalid @enderror" rows="4">{{$careers->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Ideal Candidate</label>
                                <textarea name="ideal_candidate" placeholder="Write Some Descripton About Ideal Candiate For This Job" class="form-control @error('ideal_candidate') is-invalid @enderror" rows="4">{{$careers->ideal_candidate}}</textarea>
                                @error('ideal_candidate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <div class="">
                                <label class="form-label" for="required_skills">Required Skills </label>
                                    <select class="form-control" name="required_skills[]" id="required_skills" multiple>
                                        @foreach ($careers->required_skills as $item)
                                            <option value="{{ $item }}" selected>{{ $item }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                         <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Other Requirments</label>
                                <textarea name="other_requirments" placeholder="Write Some Requirments For This Job" class="form-control @error('other_requirments') is-invalid @enderror" rows="4">{{$careers->other_requirments}}</textarea>
                                @error('other_requirments')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="experience">Experienced Required</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-wrench"></i></span>
                                    <input type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{$careers->experience}}">
                                    @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                         <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">What are we Offering </label>
                                <textarea name="what_are_we_offering"  class="form-control @error('what_are_we_offering') is-invalid @enderror" rows="4">{{$careers->what_are_we_offering}}</textarea>
                                @error('what_are_we_offering')
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
                                            <option value="Publish" {{$careers->status == 'Publish' ? 'selected' : ''}}>Publish</option>
                                            <option value="Draft" {{$careers->status == 'Draft' ? 'selected' : ''}}>Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="salary">Salary Offered</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-wrench"></i></span>
                                    <input type="salary" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $careers->salary }}">
                                    @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="city">City</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-wrench"></i></span>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $careers->city}}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="address">Address</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-wrench"></i></span>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$careers->city}}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            {{-- <div class="col-12">
                                <label>Upload CV</label>
                                <input type="file" class="form-control"  name="cv">

                                @error('cv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Job</button>
                            </div>
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
            $('#required_skills').select2({
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
