@extends('layouts.adminwindow')

@section('title', 'User Detail')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Showing {{$data->name}} Detail</h2>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>User Detail</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="card-title">User Details</h4>
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
                <tr class="table-danger">
                    <th>Role</th>
                    <td>
                        @foreach($data->roles as $role)
                            {{$role->name}}
                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                               onclick="return confirm('Are you sure you want to delete?')">[X]</a>
                        @endforeach
                    </td>
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
                    <th>Add Roles to User</th>
                    <td>
                        <form class="forms-sample" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="role_id">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary me-2">Add Role</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
