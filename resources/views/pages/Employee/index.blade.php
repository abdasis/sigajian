@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Asis</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ol>
            </div>
            <h4 class="page-title">Employee</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-2">
        <a href="{{ route('employee.create') }}">
            <button class="btn btn-blue"><i class="fa fa-plus mr-1"></i>Add Employee</button>
        </a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">All Employee</h4>
                <p class="text-muted font-13 mb-4">
                   List all Employee
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Birth Day</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($employees as $key => $employee)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $employee->Emp_Code }}</td>
                            <td>{{ $employee->Emp_Name }}</td>
                            <td>{{ $employee->Birth_Date }}</td>
                            <td>{{ $employee->Address }}</td>
                            <td>
                                <div class="row justify-content-center">
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="mr-1">
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                    </a>

                                    <form action="{{ route('employee.store', $employee->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection

@section('css')
<!-- third party css -->
<link href="{{ asset('/') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('/') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('/') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('/') }}/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection


@section('js')
<!-- third party js -->
<script src="{{ url('/') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{ url('/') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ url('/') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ url('/') }}/assets/js/pages/datatables.init.js"></script>
@endsection
