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

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminJobsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Job Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
            <div class="form-group">
                {!! Form::label('role_description', 'Role Description:') !!}
                {!! Form::textarea('role_description', null, ['class'=>'form-control','id'=>'role_description'])!!}
            </div>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#role_description' ) )
                    .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
     </script>

      <div class="form-group">

       {!! Form::hidden('listed_by', Auth::user()->id , ['class'=>'form-control ' ])!!}

       {!! Form::hidden('listed_on',Carbon\Carbon::now() , ['class'=>'form-control ' ])!!}

      </div>

      <div class="form-group">
                      {!! Form::label('country', 'Country:') !!}
                      {!! Form::text('country', null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
                      {!! Form::label('region', 'Region:') !!}
                      {!! Form::text('region', null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
                      {!! Form::label('employment', 'Employment:') !!}
                      {!! Form::text('employment', null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
                      {!! Form::label('experties', 'Experties:') !!}
                      {!! Form::text('experties', null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
                      {!! Form::label('location_type', 'Location Type:') !!}
                      {!! Form::text('location_type', null, ['class'=>'form-control'])!!}
         </div>
    <div class="form-group">
                      {!! Form::label('education', 'Education:') !!}
                      {!! Form::text('education', null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
                      {!! Form::label('language', 'Language:') !!}
                      {!! Form::select('language',['English','Hindi','Marathi'], null, ['class'=>'form-control'])!!}
         </div>

    <div class="form-group">
        {!! Form::label('sector_id', 'Sector:') !!}
        {!! Form::select('sector_id', [''=>'Choose Options'] + $sectors , null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('specializations_id', 'Specialization:') !!}
        {!! Form::select('specializations_id', [''=>'Choose Options'] + $specialization , null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}



@endsection