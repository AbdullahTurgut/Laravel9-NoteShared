@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add Question</a>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>FAQ List</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FAQ List</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw"
                                           onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success btn-rounded btn-fw">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#"><<</a> </li>
                        <li class="page-item"><a class="page-link" href="#">1</a> </li>
                        <li class="page-item"><a class="page-link" href="#">2</a> </li>
                        <li class="page-item"><a class="page-link" href="#">3</a> </li>
                        <li class="page-item"><a class="page-link" href="#">>></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
