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
            <h4 class="page-title">Create Bonus</h4>
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
                    Create Bonus
                </div>

                <form action="{{ route('bonus.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="emp_code">Emp Code</label>
                        <select id="emp_code" class="form-control" name="emp_code">
                            <option value="">Select Emp Code</option>
                            @foreach ($employee as $emp)
                                <option value="{{ $emp->Emp_Code }}">{{ $emp->Emp_Code }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Month</label>
                            <input type="text" name="month" placeholder="Month" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Year</label>
                            <input type="text" name="year" placeholder="Year" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Salary</label>
                        <input type="text" name="salary" class="form-control" placeholder="Salary">
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
