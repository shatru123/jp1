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

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminSpecController@store','files'=>true]) !!}

          <div class="form-group">
                 {!! Form::label('specialization_name', 'Specialization Name:') !!}
                 {!! Form::text('specialization_name', null, ['class'=>'form-control'])!!}
           </div>


            <div class="form-group">
                {!! Form::label('sector_id', 'Sector:') !!}
                {!! Form::select('sector_id', [''=>'Choose Options'] + $sectors , null, ['class'=>'form-control'])!!}
            </div>


             <div class="form-group">
                {!! Form::submit('Add Specialization', ['class'=>'btn btn-primary']) !!}
             </div>

      {!! Form::close() !!}



@endsection









