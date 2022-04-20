@extends('layouts.adminwindow')

@section('title', 'Content Image Gallery')


@section('content')

    <h3>{{$content->title}}</h3>

    <hr>
    <form class="forms-sample" action="{{route('admin.image.store',['cid'=>$content->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail3">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Image</label>
                <div class="input-group col-xs-12">
                    <input type="file" name="image" class="form-control custom-file-input">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                </div>
            </div>
        </div>
    </form>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Content Image List</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
                                <th style="width: 300px">Title</th>
                                <th>Image</th>
                                <th style="width: 50px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td class="py-1">
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['cid'=>$content->id,'id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw"
                                           onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- content-wrapper ends -->
@endsection
