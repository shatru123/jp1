
@extends('layouts.main')

@section('pageheader')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="#">Dashboard</a></li>
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
                            <h4 class="header-title">Employees:</h4>

                              {!! Form::open(['method'=>'POST', 'action'=> 'EmployeesController@store','files'=>true]) !!}


                                    <div class="form-group">
                                           {!! Form::label('first_name', 'Name:') !!}
                                           {!! Form::text('first_name', null, ['class'=>'form-control'])!!}
                                     </div>

                                     <div class="form-group">
                                        {!! Form::label('last_name', 'Last Name:') !!}
                                        {!! Form::text('last_name', null, ['class'=>'form-control'])!!}
                                     </div>

                                     <div class="form-group">
                                        {!! Form::label('email', 'Email:') !!}
                                        {!! Form::email('email', null, ['class'=>'form-control'])!!}
                                     </div>

                                     <div class="form-group">
                                        {!! Form::label('contact_no', 'Contact Number:') !!}
                                        {!! Form::text('contact_no', null, ['class'=>'form-control'])!!}
                                     </div>

                                     <div class="form-group">
                                        {!! Form::label('Department', 'Department:') !!}
                                        {!! Form::select('Department', array(0=>'Choose Options',1=>'IT',2=>'Other') , null, ['class'=>'form-control'])!!}
                                    </div>


                                       <div class="form-group">
                                          {!! Form::submit('Add Employee', ['class'=>'btn btn-primary']) !!}
                                       </div>

                                 @if ($errors->any())
                                       <div class="alert alert-danger">
                                           <ul>
                                               @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   @endif
                   

                                {!! Form::close() !!}


                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
