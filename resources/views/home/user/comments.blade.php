@extends('layouts.frontbase')

@section('title', 'User Comments')

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
                                <h3>User Comments</h3>
                            </div>
                            <div class="input-checkbox">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Content</th>
                                        <th>Comment</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('content',['id'=>$rs->content_id])}}">{{$rs->content->title}}</a></td>
                                            <td>{{$rs->comment}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw"
                                                   onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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
@endsection

