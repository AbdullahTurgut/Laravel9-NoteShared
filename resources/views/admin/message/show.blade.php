@extends('layouts.adminwindow')

@section('title', 'Show Message')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Showing Message From : {{$data->name}}</h2>
                            <a href="{{route('admin.message.destroy',['id'=>$data->id])}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure you want to delete?')" style="width: 150px">Delete</a></td>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Show Message</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">Message Details</h4>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <tr class="table-info">
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr class="table-warning">
                    <th>Name & Surname</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr class="table-danger">
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr class="table-success">
                    <th>Phone Number</th>
                    <td>{{$data->phone}}</td>
                </tr>
                <tr class="table-danger">
                    <th>Subject</th>
                    <td>{{$data->subject}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
                </tr>
                <tr class="table-danger">
                    <th>Message</th>
                    <td>{{$data->message}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
                </tr>
                <tr class="table-danger">
                    <th>Ip Number</th>
                    <td>{{$data->ip}}</td><!--Bize html formatında text göstermemesi için düzenledik-->
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
                        <form class="forms-sample" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                            @csrf
                        <textarea cols="100" name="note" id="note">
                            {{$data->note}}
                        </textarea>
                            <button type="submit" class="btn btn-primary me-2">Update Note</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
