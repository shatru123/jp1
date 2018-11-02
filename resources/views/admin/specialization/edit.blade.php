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


    {!! Form::model($specializations, ['method'=>'PATCH', 'action'=> ['AdminSpecController@update', $specializations->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('specialization_name', 'Specialization Name:') !!}
        {!! Form::text('specialization_name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('sector_id', 'Sector:') !!}
        {!! Form::select('sector_id', [''=>'Choose Options'] + $sectors , null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Specialization', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSpecController@destroy', $specializations->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Specialization', ['class'=>'btn btn-danger col-sm-6']) !!}
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



@endsection


