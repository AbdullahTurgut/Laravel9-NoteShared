@extends('layouts.adminbase')

@section('title', 'Show FAQ')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Showing FAQ : {{$data->id}}</h2>
                            <a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-primary" style="width: 150px">Edit</a>
                            <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure you want to delete?')" style="width: 150px">Delete</a></td>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Show FAQ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">FAQ Details</h4>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <tr class="table-info">
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr class="table-warning">
                    <th>Title</th>
                    <td>{{$data->question}}</td>
                </tr>
                <tr class="table-danger">
                    <th>Details</th>
                    <td>{!! $data->answer !!}</td><!--Bize html formatında text göstermemesi için düzenledik-->
                </tr>
                <tr class="table-primary">
                    <th>Status</th>
                    <td>{{$data->status}}</td>
                </tr>
                <tr class="table-success">
                    <th>Created Date</th>
                    <td>{{$data->created_at}}</td>
                </tr>
                <tr class="table-primary">
                    <th>Updated Date</th>
                    <td>{{$data->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
