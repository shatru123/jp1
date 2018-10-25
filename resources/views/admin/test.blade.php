
@extends('layouts.main')

@section('pageheader')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="index.html">Dashboard</a></li>
            <li><span>Sectors</span></li>
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
                          <h4 class="header-title">Add Sectors:</h4>
{!! Form::open(['method'=>'POST', 'action'=> 'test@test','files'=>true]) !!}


      <div class="form-group">
             {!! Form::label('name', 'Name:') !!}
             {!! Form::text('name', null, ['class'=>'form-control'])!!}
       </div>


       <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
       </div>

        {{--<div class="form-group">--}}
            {{--{!! Form::label('role_id', 'Role:') !!}--}}
            {{--{!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}--}}
        {{--</div>--}}


        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
         </div>


        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
         </div>



        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control'])!!}
         </div>


         <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
         </div>

  {!! Form::close() !!}

  </div>

  </div>
              </div>

          </div>
      </div>

  </div>

@endsection
