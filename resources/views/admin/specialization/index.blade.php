
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
                            <h4 class="header-title">Jobs:</h4>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--@if($users)--}}
                                    {{--@foreach($users as $user)--}}


                                        {{--<tr>--}}
                                        {{--<td>{{$user->id}}</td>--}}
                                        {{--<td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>--}}
                                        {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>--}}
                                        {{--<td>{{$user->email}}</td>--}}
                                        {{--<td>{{$user->role ? $user->role->name : 'User has no role'}}</td>--}}
                                        {{--<td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>--}}
                                        {{--<td>{{$user->created_at->diffForHumans()}}</td>--}}
                                        {{--<td>{{$user->updated_at->diffForHumans()}}</td>--}}
                                        {{--</tr>--}}

                                    {{--@endforeach--}}


                                {{--@endif--}}
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
