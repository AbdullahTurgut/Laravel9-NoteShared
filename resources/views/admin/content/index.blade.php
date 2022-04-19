@extends('layouts.adminbase')

@section('title', 'Content List')


@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <a href="{{route('admin.content.create')}}" class="btn btn-primary">Add Content</a>
                        </div>
                        <div class="d-flex">
                            <p class="text-muted mb-0 hover-cursor"><a href="{{route('admin.index')}}">Home</a>&nbsp;/&nbsp;</p>
                            <p>Content List</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Content List</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
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
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td class="py-1">
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.index',['cid'=>$rs->id])}}"
                                            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets')}}/admin/images/gallery.png" style="height: 50px">
                                        </a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw"
                                           onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                                    <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}" class="btn btn-success btn-rounded btn-fw">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
