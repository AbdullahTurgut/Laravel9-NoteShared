@extends('layouts.adminwindow')

@section('title', 'Show Comment')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Showing Comment From : {{$data->name}}</h2>
                            <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure you want to delete?')" style="width: 150px">Delete</a></td>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Show Comment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">Comment Details</h4>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <tr class="table-info">
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr class="table-warning">
                    <th>Content</th>
                    <td>{{$data->content->title}}</td>
                </tr>
                <tr class="table-danger">
                    <th>Comment</th>
                    <td>{{$data->comment}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
                </tr>
                <tr class="table-danger">
                    <th>Ip Number</th>
                    <td>{{$data->ip}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
                </tr>
                <tr class="table-danger">
                    <th>Rate</th>
                    <td>{{$data->rate}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
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
                <tr class="table-primary">
                    <th>Admin Note :</th>
                    <td>
                        <form class="forms-sample" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                            <button type="submit" class="btn btn-primary me-2">Update Comment</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
