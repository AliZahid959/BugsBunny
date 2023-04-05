@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Contact application</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="blog_table" class="table table-striped w-100 table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Applicant Name</th>
                                    <th>Applicant Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($application as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->applicant_name }}</td>
                                        <td>{{ $item->applicant_email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            {{-- <a href="{{ route('course-enrollment.show', $item) }}" class="btn btn-sm w-50"
                                                style="background: #fff; border:1px solid #696cff;">
                                                <i class="bx bx-show-alt"></i>
                                            </a> --}}
                                            <form
                                                action="{{ route('contact-application.destroy', ['contact_application' => $item]) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="mt-2 w-50 btn btn-primary btn-sm mt-2"><i
                                                        class="bx bx-trash me-1"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#blog_table').DataTable({
                "dom": '<lfB<t>ip>',
                buttons: ['excel', 'print'],
                paging: true,
                searching: true,
                autoWidth: true,
                lengthChange: true,
                columnDefs: [{
                    orderable: true,
                    targets: '_all'
                }],
                pageLength: 8

            });

        });
    </script>
@endsection
