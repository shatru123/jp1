
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
                <div class="col-12 mt-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Specializations:</h4>
                            <hr>
                            <a href=" {{route('specialization.create')}}" class="btn btn-primary col-sm-2"> <i class="ti-ink-pen  ">Add New</i>  </a>
                            <hr>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sector</th>
                                    {{--<th>Created At</th>--}}
                                    {{--<th>Updated</th>--}}
                                    <th colspan="2">Actions</th>

                                </tr>
                                </thead>
                                <tbody>

                                @if($specializations)
                                    @foreach($specializations as $specialization)


                                        <tr>

                                        <td><a href="{{route('specialization.edit',$specialization->id)}}">{{$specialization->specialization_name}}</a></td>
                                        <td>{{$specialization->sector_id ? $specialization->sector->name : 'No Sector'}}</td>

                                            <td>  {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminSpecController@destroy', $specialization->id]]) !!}

                                                <div class="form-group">
                                                    {!! Form::submit('Delete Sector', ['class'=>' btn btn-danger col-sm-6']) !!}
                                                </div>
                                          {!! Form::close() !!}</td>


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



