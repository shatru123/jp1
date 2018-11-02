
@extends('layouts.main')

@section('pageheader')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="index.html">Dashboard</a></li>
            <li><span>Employees</span></li>
        </ul>
    </div>
@stop
@section('content')

    <div class="row">

        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Employee:</h4>
                            <hr>
                            <a href=" {{route('employees.create')}}" class="btn btn-primary col-sm-2"> <i class="ti-ink-pen">Add New</i>  </a>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Department</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($employees)
                                    @foreach($employees as $employee)
                                        <tr>

                                        <td>{{$employee->first_name}}</td>
                                        <td>{{$employee->last_name}}</td>
                                        <td>{{$employee->contact_no}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->Department}}</td>

                                         <td><a href=" {{route('employees.edit',$employee->id)}}" class="btn  "> <i class="ti-pencil-alt col-sm-6"></i></a></td>
                                            <td> 
                                                 {!! Form::open(['method'=>'DELETE', 'action'=> ['EmployeesController@destroy', $employee->id]]) !!}

                                                <div class="form-group">
                                                    {!! Form::submit('Delete Employee', ['class'=>' btn btn-danger col-sm-12']) !!}
                                                </div>

                                                {!! Form::close() !!}
                                            </td>
                                        </tr>

                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
