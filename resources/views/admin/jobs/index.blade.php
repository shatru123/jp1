
@extends('layouts.main')

@section('pageheader')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="">Dashboard</a></li>
            <li><span>Jobs</span></li>
        </ul>
    </div>
@stop
@section('content')

    <div class="row">

        <div class="col-lg-10 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Jobs:</h4>
                            <hr>
                            <a href=" {{route('jobs.create')}}" class="btn btn-primary col-sm-2"> <i class="ti-ink-pen  ">Add New</i>  </a>
                            <hr>
                            <table class="table">
                                   <thead>
                                     <tr>
                                         <th>Title</th>
                                         <th>Role Description</th>
                                         <th>Sector</th>
                                         <th>Specialization</th>
                                         <th>Created</th>
                                         <th>Updated</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    @if($jobs)
                                  @foreach($jobs as $job)

                                       <tr>

                                          <td><a href="{{route('jobs.edit', $job->id)}}">{{$job->title}}</a></td>
                                          <td>{!! html_entity_decode($job->role_description) !!}</td>
                                          <td>{{ $job->sector->name}}</td>
                                           <td>{{$job->specializations->specialization_name }}</td>
                                          <td>{{$job->created_at->diffForHumans()}}</td>
                                          <td>{{$job->updated_at->diffForHumans()}}</td>
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
