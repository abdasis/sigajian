@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </div>
            <h4 class="page-title">Basic Elements</h4>
        </div>
    </div>
</div>

<div class="row justify-content-center">


    <div class="col-md-7">
        <div class="card">
                @if (Session::has('status'))
                <div class="card-body">

                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                </div>

                @endif
            <div class="card-body">
                <div class="card-title">
                    Create Employee
                </div>

                <form action="{{ route('employee.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Employee Code</label>
                        <input type="text" name="emp_code" placeholder="Employee Code" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Employee Name</label>
                        <input type="text" name="emp_name" placeholder="Employee Name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Birt Date</label>
                        <input class="form-control" id="example-date" type="date" name="birth_date" placeholder="Birth Date">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea class="form-control" id="example-textarea" name="address" rows="5" placeholder="Address"></textarea>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-blue"><i class="fa fa-save mr-1"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
