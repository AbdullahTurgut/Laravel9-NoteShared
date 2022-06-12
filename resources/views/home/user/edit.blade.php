@extends('layouts.frontbase')

@section('title', 'User Edit Content')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
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
                                <h3>Edit User Content</h3>
                            </div>
                            <div class="input-checkbox">
                                <h4 class="card-title">Content Elements</h4>
                                <form class="forms-sample" action="{{route('userpanel.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Parent Content</label>
                                        <select class="form-control" name="category_id" >
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Keywords</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Details</label>
                                        <textarea class="textarea" id="detail" name="detail" placeholder="Detail">
                        {{$data->detail}}
                </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="image" class="form-control custom-file-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="file" class="form-control custom-file-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Update</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        //summernote textarea için textarea'daki class bizim için önemli
        $(function() {
            $('.textarea').summernote()
        })
    </script>
@endsection
