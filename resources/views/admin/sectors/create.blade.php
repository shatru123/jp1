
@extends('layouts.main')

@section('pageheader')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="#">Dashboard</a></li>
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
                            <h4 class="header-title">Sectors:</h4>

                              {!! Form::open(['method'=>'POST', 'action'=> 'AdminSectorController@store','files'=>true]) !!}


                                    <div class="form-group">
                                           {!! Form::label('name', 'Name:') !!}
                                           {!! Form::text('name', null, ['class'=>'form-control'])!!}
                                     </div>



                                       <div class="form-group">
                                          {!! Form::submit('Create Sector', ['class'=>'btn btn-primary']) !!}
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
