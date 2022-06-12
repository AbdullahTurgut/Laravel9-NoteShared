@extends('layouts.frontbase')

@section('title', 'User Contents')

@section('content')
    <div id="fh5co-course-categories">
        <div class="container">
            <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 animate-box">
                            <h3>User Menu</h3>
                            @include('home.user.usermenu')
                        </div>
                        <div class="col-md-10 animate-box">

                            <div class="fh5co-contact-info">
                                <h3>User Contents</h3>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Content List</h4>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Id</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contents as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('userpanel.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

